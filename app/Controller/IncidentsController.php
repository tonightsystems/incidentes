<?php
App::uses('AppController', 'Controller');
/**
 * Incidents Controller
 *
 * @property Incident $Incident
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IncidentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Incident->recursive = 0;
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
		$options = array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id));
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
				$this->Session->setFlash(__('The incident has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incident could not be saved. Please, try again.'));
			}
		}
		$priorities = $this->Incident->Priority->find('list');
		$people = $this->Incident->Person->find('list');
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
				$this->Session->setFlash(__('The incident has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incident could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id));
			$this->request->data = $this->Incident->find('first', $options);
		}
		$priorities = $this->Incident->Priority->find('list');
		$people = $this->Incident->Person->find('list');
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
			$this->Session->setFlash(__('The incident has been deleted.'));
		} else {
			$this->Session->setFlash(__('The incident could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}