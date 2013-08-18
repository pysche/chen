<?php

class Lja_Db_Table_Articlecategories extends Lja_Db_Table {
	protected $_name='Lja_Articlecategories';

	public function insert($params) {
		$params['CreateTime'] = time();
		
		return parent::insert($params);
	}
}