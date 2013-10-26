<?php
App::uses('AppModel', 'Model');

class Address extends AppModel {
	public $useTable = 'address';
	
	public $primaryKey = 'zipCode';
	
	public $displayField = 'zipCode';
}
