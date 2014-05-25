<?php
App::uses('AppModel', 'Model');
/**
 * IncidentPriority Model
 *
 * @property Incident $Incident
 * @property Priority $Priority
 */
class IncidentPriority extends AppModel {


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
		'Priority' => array(
			'className' => 'Priority',
			'foreignKey' => 'priority_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
