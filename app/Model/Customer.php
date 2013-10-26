<?php
App::uses('AppModel', 'Model');

class Customer extends AppModel {
	public $useTable = 'customer';
	
	public $primaryKey = 'cusID';
	
	public $displayField = 'cusEmail';
	
	// Validation rules
	public $validate = array(
		'cusID' => array(
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
		'cusEmail' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cusPass' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
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
		'CustomerDetail' => array(
			'className' => 'Detail',
			'foreignKey' => 'cmnID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	// hasMany associations
	public $hasMany = array(
		'CustomerCredit' => array(
			'className' => 'Credit',
			'foreignKey' => 'cusID',
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
		'CustomerReview' => array(
			'className' => 'Review',
			'foreignKey' => 'cusID',
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
		'CustomerCart' => array(
			'className' => 'Cart',
			'foreignKey' => 'cusID',
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
		'CustomerCheckout' => array(
			'className' => 'Checkout',
			'foreignKey' => 'cusID',
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
		'CustomerWishlist' => array(
			'className' => 'Wishlist',
			'foreignKey' => 'cusID',
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
