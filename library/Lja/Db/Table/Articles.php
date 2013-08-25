<?php

class Lja_Db_Table_Articles extends Lja_Db_Table {
	protected $_name='Lja_Articles';

	public function insert($params) {
		$params['CreateTime'] = date('Y-m-d H:i:s');
		
		return parent::insert($params);
	}
}