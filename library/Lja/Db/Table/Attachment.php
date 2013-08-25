<?php

class Lja_Db_Table_Attachment extends Lja_Db_Table {
	protected $_name='Lja_Attachment';

	public function insert($params) {
		$params['CreateTime'] = date('Y-m-d H:i:s');
		
		return parent::insert($params);
	}

	public function saveOrder($id, $order) {
		$db = &$this->getAdapter();
		$where = $db->quoteInto('id=?', $id);

		return $this->update(array(
			'OrderNo' => $order
			), $where);
	}

	public function getByHash($hash) {
		$db = &$this->getAdapter();
		$where = $db->quoteInto('Hash=?', $hash);

		return $this->fetchAll($where, 'OrderNo ASC')->toArray();
	}
}