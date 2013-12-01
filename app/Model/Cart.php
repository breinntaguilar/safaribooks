<?php
App::uses('AppModel', 'Model');

class Cart extends AppModel {
	public $useTable = 'cart';
	
	public $primaryKey = 'crtID';
	
	public $displayField = 'bkID';
	
	// Validation rules
	public $validate = array(
		'crtID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cusID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'bkID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'crtQnty' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'crtShip' => array(
			'decimal' => array(
				'rule' => array('decimal', 2),
				//'message' => 'Your custom message here',
			),
		),
	);
	
	// belongsTo associations
	public $belongsTo = array(
		'CartCustomer' => array(
			'className' => 'Customer',
			'foreignKey' => 'cusID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CartBook' => array(
			'className' => 'Book',
			'foreignKey' => 'bkID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
