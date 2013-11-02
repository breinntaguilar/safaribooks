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
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkAuthor' => array(
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
			'maxLength' => array(
				'rule' => array('maxLength', 3),
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
				'message' => 'Price should be in this format (0.00).',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkDiscPrice' => array(
			'decimal' => array(
				'rule' => array('decimal', 2),
				'message' => 'Price should be in this format (0.00).',
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
		'bkSnippet' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'bkCover' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
			),
			/*'mimeType' => array(
				'rule' => array('mimeType', array('image/jpeg', 'image/png')),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
			),*/
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '200KB'),
				'message' => 'File uploaded is more than 200KB.',
				'allowEmpty' => true,
			),
			'dimensions' => array(
				'rule' => array('dimensions'),
				'message' => 'File uploaded is less than the recommended dimensions.',
				'allowEmpty' => true,
			),
			'processBookCover' => array(
				'rule' => 'processBookCover',
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
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
	
	// Check image dimension.
	public function dimensions($check, $height = 400, $width = 330) {
		if (empty($check['bkCover']['tmp_name'])) {
			return false;
		}
		else {
			$file = getimagesize($check['bkCover']['tmp_name']);
			
			if (!$file) {
				return false;
			}
			
			$w = $file[0];
			$h = $file[1];
			$width = intval($width);
			$height = intval($height);
			
			if ($width > 0 && $height > 0) {
				return ($w < $width || $h < $height) ? false : true;
			}
			else if ($width > 0 && !$height) {
				return ($w < $width) ? false : true;
			}
			else if ($height > 0 && !$width) {
				return ($h < $height) ? false : true;
			}
			else {
				return false;
			}
		}
	}
	
	// Upload image to server.
	public function processBookCover($check) {
		if (!is_uploaded_file($check['bkCover']['tmp_name'])) {
			return false;
		}
		$filename = $this->data['Book']['bkID'] . '.' . pathinfo($check['bkCover']['name'], PATHINFO_EXTENSION);
		if (!move_uploaded_file($check['bkCover']['tmp_name'], WWW_ROOT . 'img' . DS . 'covers' . DS . $filename)) {
			return false;
		}
		$this->data['Book']['bkCover'] = 'covers/' . $filename;
		return true;
	}
	
	// Add generated bkID value before saving.
	public function beforeValidate($options = array()) {
		if (empty($this->data['Book']['bkID'])) {
			$newID = preg_replace('/(\d{2})(\d{2})-(\d{2})-(\d{2})/', '\2\3', $this->data['Book']['bkPubDate']) . '001';
			for (;;) {
				if (empty($this->find('first', array('conditions' => array('Book.bkID' => $newID), 'recursive' => -1)))) {
					break;
				}
				$newID++;
			}
			$this->data['Book']['bkID'] = $newID;
		}
		return true;
	}
}
