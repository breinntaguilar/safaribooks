<?php
App::uses('AppModel', 'Model');

class Review extends AppModel {
	public $useTable = 'review';
	
	public $primaryKey = 'revID';
	
	public $displayField = 'revDesc';
	
	// Validation rules
	public $validate = array(
		'revID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'usrID' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'empID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
			),
		),
		'bkID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'revDesc' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'revRating' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'revStat' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
			),
		),
	);
	
	// belongsTo associations
	public $belongsTo = array(
		'ReviewUser' => array(
			'className' => 'User',
			'foreignKey' => 'usrID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ReviewBook' => array(
			'className' => 'Book',
			'foreignKey' => 'bkID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
