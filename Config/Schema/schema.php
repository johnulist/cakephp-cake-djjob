<?php
/* SVN FILE: $Id$ */
/* App schema generated on: 2011-04-10 19:04:44 : 1302463184*/
class CakeDjjobSchema extends CakeSchema {
	public $name = 'CakeDjjob';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $jobs = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'handler' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'queue' => array('type' => 'string', 'null' => false, 'default' => 'default', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'attempts' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'run_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'locked_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'locked_by' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'failed_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'error' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_at' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
}
