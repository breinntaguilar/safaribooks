<?php
App::uses('AppModel', 'Model');

class Book extends AppModel {
	public $useTable = 'book';
	
	public $primaryKey = 'bkID';
	
	public $displayField = 'bkTitle';
	
	// Validation rules
	public $validate = array(
		'bkID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'bkTitle' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w ñ\.\,\&\?\:\;\(\)\-\+]+/'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkAuthor' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w ñ\.]+/'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkPubDate' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkQnty' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkRating' => array(
			'decimal' => array(
				'rule' => array('decimal', 1),
				//'message' => 'Your custom message here',
			),
		),
		'bkPrice' => array(
			'decimal' => array(
				'rule' => array('decimal', 2),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkDiscPrice' => array(
			'decimal' => array(
				'rule' => array('decimal', 2),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
			),
		),
		'bkStat' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkAddedDate' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
			),
		),
	);
	
	// hasMany associations
	public $hasMany = array(
		'BookReview' => array(
			'className' => 'Review',
			'foreignKey' => 'bkID',
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
		'BookCart' => array(
			'className' => 'Cart',
			'foreignKey' => 'bkID',
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
		'BookProcure' => array(
			'className' => 'Procure',
			'foreignKey' => 'bkID',
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
		'BookWishlist' => array(
			'className' => 'Wishlist',
			'foreignKey' => 'bkID',
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
