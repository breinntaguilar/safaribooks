<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	public $useTable = 'user';
	
	public $primaryKey = 'usrID';
	
	public $displayField = 'usrID';
	
	// Validation rules
	public $validate = array(
		'usrID' => array(
			'custom' => array(
				'rule' => '/[a-z]/',
				//'message' => 'Your custom message here',
			),
		),
		'usrEmail' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Email already used.',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrPass' => array(
			'custom' => array(
				'rule' => '/[a-z0-9_\.]/',
				'message' => 'Allowed characters are alphanumeric, underscore (_), and period (.) only.',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrPassOld' => array(
			'custom' => array(
				'rule' => '/[a-z0-9_\.]/',
				'message' => 'Allowed characters are alphanumeric, underscore (_), and period (.) only.',
			),
		),
		'usrFname' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrLname' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrAddress1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrCity' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrProvince' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrZIP' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrPhone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrSSN' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrRole' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'usrStat' => array(
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
	
	// hasMany associations
	public $hasMany = array(
		'UserCredit' => array(
			'className' => 'Credit',
			'foreignKey' => 'usrID',
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
		'UserCart' => array(
			'className' => 'Cart',
			'foreignKey' => 'usrID',
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
		'UserCheckout' => array(
			'className' => 'Checkout',
			'foreignKey' => 'usrID',
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
		'UserReview' => array(
			'className' => 'Review',
			'foreignKey' => 'usrID',
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
		'UserWishlist' => array(
			'className' => 'Wishlist',
			'foreignKey' => 'usrID',
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
		'UserProcure' => array(
			'className' => 'Procure',
			'foreignKey' => 'usrID',
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
	
	// Hash password before saving.
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['usrPass'])) {
			$passHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['usrPass'] = $passHasher->hash($this->data[$this->alias]['usrPass']);
		}
		return true;
	}

	// Generate usrID value before saving.
	public function beforeValidate($options = array()) {
		if (empty($this->data['User']['usrID'])) {
			$lname = substr(strtolower($this->data['User']['usrLname']), 0, (strlen($this->data['User']['usrLname']) > 3 ? 4 : strlen($this->data['User']['usrLname'])));
			$fname = substr(strtolower($this->data['User']['usrFname']), 0, (strlen($this->data['User']['usrLname']) > 3 ? 4 : strlen($this->data['User']['usrLname'])));
			$newID = $lname . $fname;
			$this->data['User']['usrID'] = $newID;
		}
		return true;
	}

	// Check if current user is the owner.
	public function isOwner($curUser, $user) {
		return $this->field('usrID', array('usrID' => $curUser, 'usrID' => $user)) === $curUser;
	}
}
