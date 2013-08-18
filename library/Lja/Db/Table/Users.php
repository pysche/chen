<?php

class Lja_Db_Table_Users extends Lja_Db_Table {
	protected $_name='Lja_Users';

	public function insert($params) {
		$params['Password'] = md5($params['Password']);
		
		$auths = array();
		foreach ($params['AuthMask'] as $v) {
			list($key, $auth) = explode('_', $v);

			isset($auths[$key]) || $auths[$key] = array();
			$auths[$key][] = $auth;
		}

		$params['AuthMask'] = serialize($auths);

		return parent::insert($params);
	}

	public function &u($username) {
		$row = array();

		$db = &$this->getAdapter();
		$row = $this->fetchRow($db->quoteInto('Username=?', $username));

		return $row;
	}	

	public function update($params, $where=null) {
		if (isset($params['Password']) && $params['Password']=='') {
			unset($params['Password']);
		}

		if (isset($params['AuthMask'])) {
			$auths = array();
			foreach ($params['AuthMask'] as $v) {
				list($key, $auth) = explode('_', $v);

				isset($auths[$key]) || $auths[$key] = array();
				$auths[$key][] = $auth;
			}

			$params['AuthMask'] = serialize($auths);
		}

		return parent::update($params, $where);
	}
}