<?php
App::uses('AppModel', 'Model');

class Noshipping extends AppModel {
	public $useTable = 'noshipping';
	
	public $primaryKey = 'provName';
	
	public $displayField = 'provName';
}
