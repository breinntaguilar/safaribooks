<?php
App::uses('AppModel', 'Model');

class Procure extends AppModel {
	public $useTable = 'procure';
	
	public $primaryKey = 'prcID';
	
	public $displayField = 'prcID';
	
	// Validation rules
	public $validate = array(
		'prcID' => array(
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
		'prcQnty' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'prcLprice' => array(
			'decimal' => array(
				'rule' => array('decimal', 2),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrID' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'prcStat' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
			),
		),
	);
	
	// belongsTo associations
	public $belongsTo = array(
		'ProcureUser' => array(
			'className' => 'User',
			'foreignKey' => 'usrID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProcureBook' => array(
			'className' => 'Book',
			'foreignKey' => 'bkID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
