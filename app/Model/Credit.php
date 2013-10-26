<?php
App::uses('AppModel', 'Model');

class Credit extends AppModel {
	public $useTable = 'credit';
	
	public $primaryKey = 'ccID';
	
	public $displayField = 'ccNum';
	
	// Validation rules
	public $validate = array(
		'ccNum' => array(
			'cc' => array(
				'rule' => array('cc', array('visa', 'amex', 'disc', 'mc'), true, null),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				//'message' => 'Your custom message here',
			),
		),
		'cusID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'ccType' => array(
			'custom' => array(
				'rule' => array('custom'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
	);
	
	// belongsTo associations
	public $belongsTo = array(
		'CreditCustomer' => array(
			'className' => 'Customer',
			'foreignKey' => 'cusID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
