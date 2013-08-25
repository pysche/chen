<?php

class Lja_Db_Table_Logs extends Lja_Db_Table {
	protected $_name='Lja_Logs';

	public function insert($params) {
		$params['ActTime'] = date('Y-m-d H:i:s');
		
		return parent::insert($params);
	}
}