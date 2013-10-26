<?php
App::uses('AppModel', 'Model');

class Wishlist extends AppModel {
	public $useTable = 'wishlist';
	
	public $primaryKey = 'wshID';
	
	public $displayField = 'bkID';
	
	// Validation rules
	public $validate = array(
		'wshID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
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
	);
	
	// belongsTo associations
	public $belongsTo = array(
		'WishlistCustomer' => array(
			'className' => 'Customer',
			'foreignKey' => 'cusID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'WishlistBook' => array(
			'className' => 'Book',
			'foreignKey' => 'bkID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
