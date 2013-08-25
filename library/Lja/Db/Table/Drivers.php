<?php

class Lja_Db_Table_Drivers extends Lja_Db_Table {
	protected $_name='Lja_Drivers';

	public function insert($params) {
		$params['CreateTime'] = date('Y-m-d H:i:s');
		
		return parent::insert($params);
	}
}