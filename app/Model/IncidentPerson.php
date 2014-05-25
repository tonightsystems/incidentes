<?php
App::uses('AppModel', 'Model');
/**
 * IncidentPerson Model
 *
 * @property Incident $Incident
 * @property Person $Person
 */
class IncidentPerson extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Incident' => array(
			'className' => 'Incident',
			'foreignKey' => 'incident_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
