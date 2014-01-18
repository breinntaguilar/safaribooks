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
		'usrID' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'CreditUser' => array(
			'className' => 'User',
			'foreignKey' => 'usrID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
