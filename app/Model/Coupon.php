<?php
App::uses('AppModel', 'Model');

class Coupon extends AppModel {
	public $useTable = 'coupon';
	
	public $primaryKey = 'cpnID';
	
	public $displayField = 'cpnID';
	
	// Validation rules
	public $validate = array(
		'cpnID' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
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
		'cpnType' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cpnParam' => array(
			'decimal' => array(
				'rule' => array('decimal', 2),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
			),
		),
		'cpnDetail' => array(
			'custom' => array(
				'rule' => array('custom'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cpnStat' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'CouponCheckout' => array(
			'className' => 'Checkout',
			'foreignKey' => 'cpnID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
