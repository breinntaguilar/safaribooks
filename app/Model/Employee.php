<?php
App::uses('AppModel', 'Model');

class Employee extends AppModel {
	public $useTable = 'employee';
	
	public $primaryKey = 'empID';
	
	public $displayField = 'empID';
	
	// Validation rules
	public $validate = array(
		'empID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'empPass' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'empSSN' => array(
			'ssn' => array(
				'rule' => array('ssn', null, 'us'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
	);
	
	// hasOne associations
	public $hasOne = array(
		'EmployeeDetail' => array(
			'className' => 'Detail',
			'foreignKey' => 'cmnID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	// hasMany associations
	public $hasMany = array(
		'EmployeeReview' => array(
			'className' => 'Review',
			'foreignKey' => 'empID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EmployeeProcure' => array(
			'className' => 'Procure',
			'foreignKey' => 'empID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
