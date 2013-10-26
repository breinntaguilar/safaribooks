<?php
App::uses('AppModel', 'Model');

class Checkout extends AppModel {
	public $useTable = 'checkout';
	
	public $primaryKey = 'chkID';
	
	public $displayField = 'chkTprice';
	
	// Validation rules
	public $validate = array(
		'chkID' => array(
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
		'usedCC' => array(
			'cc' => array(
				'rule' => array('cc', array('visa', 'amex', 'disc', 'mc'), true, null),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cpnID' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
			),
		),
		'chkDate' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
			),
		),
		'chkTprice' => array(
			'decimal' => array(
				'rule' => array('decimal', 2),
				//'message' => 'Your custom message here',
			),
		),
	);
	
	// hasOne associations
	public $hasOne = array(
		'CheckoutCoupon' => array(
			'className' => 'Coupon',
			'foreignKey' => 'cpnID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	// belongsTo associations
	public $belongsTo = array(
		'CheckoutCustomer' => array(
			'className' => 'Customer',
			'foreignKey' => 'cusID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
