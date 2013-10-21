<?php
App::uses('AppModel', 'Model');
/**
 * Noshipping Model
 *
 */
class Noshipping extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'noshipping';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'provName';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'provName';

}
