<?php
App::uses('AppModel', 'Model');
/**
 * Address Model
 *
 */
class Address extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'address';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'zipCode';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'zipCode';

}
