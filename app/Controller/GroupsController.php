<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * Models used
 *
 * @var array
 */
	public $uses = array('Group', 'Incident');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Group->recursive = 0;
		$this->Group->order = 'Group.name ASC';
		$this->set('groups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->Group->recursive = 1;
		$this->Incident->recursive = 0;
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$group = $this->Group->find('first', $options);
		$incidents = $this->Incident->find('all', array(
			'contain' => array(
				'IncidentPerson' => array(
					'Person' => array(
						'conditions' => array(
							'Person.group_id' => $id
						)
					)
				)
			)
		));
		// pr($incidents); die();
		$this->set(compact('group', 'incidents'));

		// $serialized = array();
		// foreach ($group['Person'] as $person) {
		// 	if (!empty($person['IncidentPerson'])) {
		// 		foreach ($person['IncidentPerson'] as $incident) {
		// 			$serialized[] = $incident['Incident'];
		// 		}
		// 	}
		// }
		// // pr($serialized); die();
		// $this->set('_serialize', $serialized);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				));
			}
		} else {
			$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
			$this->request->data = $this->Group->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('The group has been deleted.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-success'
			));
		} else {
			$this->Session->setFlash(__('The group could not be deleted. Please, try again.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
			));
		}
		return $this->redirect(array('action' => 'index'));
	}}
