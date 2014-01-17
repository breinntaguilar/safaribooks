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
				'message' => 'Title should not be empty.',
			),
		),
		'bkAuthor' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Author should not be empty.',
			),
		),
		'bkPubDate' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Date should be in this format (yyyy-mm-dd).',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Publication date should not be empty.',
			),
		),
		'bkQnty' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Book quantity should only be numeric.',
			),
			'maxLength' => array(
				'rule' => array('maxLength', 3),
				'message' => 'Maximum quantity is 999 only.',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Book quantity should not be empty.',
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
				'message' => 'Price should not be empty.',
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
				'message' => 'Book status should not be empty.',
			),
		),
		'bkAddedDate' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Date should be in this format (yyyy-mm-dd).',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Date added should not be empty.',
			),
		),
		'bkSnippet' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Description should not be empty.',
			),
		),
		'bkCover' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the upload.',
			),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '200KB'),
				'message' => 'File uploaded is more than 200KB.',
			),
			'fileExt' => array(
				'rule' => array('fileExt', array('jpeg', 'jpg', 'png')),
				'message' => 'Supported image types are JPEG and PNG only.',
			),
			'dimensions' => array(
				'rule' => array('dimensions'),
				'message' => 'File uploaded is less than the recommended dimensions.',
			),
			'processBookCover' => array(
				'rule' => 'processBookCover',
				'message' => 'Something went wrong with the upload.',
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
	
	// Check file type.
	public function fileExt($check, $options = array()) {
		if (empty($check['bkCover']['tmp_name'])) {
			return false;
		}
		else {
			$extChecked = pathinfo($check['bkCover']['name'], PATHINFO_EXTENSION);
			
			$flagger = 0;
			foreach($options as $val) {
				if ($extChecked == $val) {
					$flagger = 1;
					break;
				}
			}
			return ($flagger == 1) ? true : false;
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

	public function getNewReleases() {

		return $this->query("SELECT * FROM Book WHERE bkPubDate > DATE_SUB(now(), INTERVAL 24 MONTH)");
	}
}
