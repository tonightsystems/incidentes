<?php
App::uses('AppController', 'Controller');
/**
 * Incidents Controller
 *
 * @property Incident $Incident
 * @property PaginatorComponent $Paginator
 */
class IncidentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * Models
 *
 * @var array
 */
	public $uses = array('Incident', 'Person', 'Priority', 'IncidentPerson', 'IncidentPriority');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Incident->recursive = 2;
		$this->Incident->order = 'Incident.created DESC, Incident.status DESC';
		$this->set('incidents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Incident->exists($id)) {
			throw new NotFoundException(__('Invalid incident'));
		}
		$this->Incident->recursive = 2;
		$options = array(
			'conditions' => array('Incident.' . $this->Incident->primaryKey => $id)
		);
		$this->set('incident', $this->Incident->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Incident->create();
			if ($this->Incident->save($this->request->data)) {

				$this->IncidentPerson->create();
				$this->IncidentPerson->save(array(
					'incident_id' => $this->Incident->id,
					'person_id' => $this->request->data['Incident']['Person'],
				));

				$this->IncidentPriority->create();
				$this->IncidentPriority->save(array(
					'incident_id' => $this->Incident->id,
					'priority_id' => $this->request->data['Incident']['Priority'],
				));

				$this->Session->setFlash(__('The incident has been saved.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incident could not be saved. Please, try again.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				));
			}
		}
		$priorities = $this->Priority->find('list');
		$people = $this->Person->find('list');
		$this->set(compact('priorities', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Incident->exists($id)) {
			throw new NotFoundException(__('Invalid incident'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Incident->save($this->request->data)) {

				$this->IncidentPerson->create();
				$this->IncidentPerson->save(array(
					'incident_id' => $this->Incident->id,
					'person_id' => $this->request->data['Incident']['Person'],
				));

				$this->IncidentPriority->create();
				$this->IncidentPriority->save(array(
					'incident_id' => $this->Incident->id,
					'priority_id' => $this->request->data['Incident']['Priority'],
				));

				$this->Session->setFlash(__('The incident has been saved.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incident could not be saved. Please, try again.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				));
			}
		} else {
			$options = array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id));
			$this->request->data = $this->Incident->find('first', $options);
		}
		$priorities = $this->Priority->find('list');
		$people = $this->Person->find('list');
		$this->set(compact('priorities', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Incident->id = $id;
		if (!$this->Incident->exists()) {
			throw new NotFoundException(__('Invalid incident'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Incident->delete()) {
			$this->Session->setFlash(__('The incident has been deleted.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-success'
			));
		} else {
			$this->Session->setFlash(__('The incident could not be deleted. Please, try again.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
			));
		}
		return $this->redirect(array('action' => 'index'));
	}}
