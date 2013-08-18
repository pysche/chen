<?php

class Lja_Db_Table_Logs extends Lja_Db_Table {
	protected $_name='Lja_Logs';

	public function insert($params) {
		$params['ActTime'] = time();
		
		return parent::insert($params);
	}
}