<?php

class Lja_Db_Table_Articlecategories extends Lja_Db_Table {
	protected $_name='Lja_Articlecategories';

	public function insert($params) {
		$params['CreateTime'] = date('Y-m-d H:i:s');
		
		return parent::insert($params);
	}
}