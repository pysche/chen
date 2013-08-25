<?php

class Lja_Controller_Action_Dwz extends Lja_Controller_Action_Base {
	protected $member = array();
	protected $uid = 0;
	protected static $u = null;
	protected $auth = '';
	protected $force_where = '';
	protected $mName = '';

	public function init() {
		parent::init ();
		
		$this->mName = $this->auth = strtolower($this->_request->getControllerName());
		$this->u = &$this->M('users');
		$this->uid = (int)$_SESSION['Uid'];
		if ($this->uid>0) {
			$data = $this->u->find($this->uid)->toArray();
			$this->member = $data[0];

			if (!$this->member) {
				$this->uid = 0;
			} else {
				$this->member['AuthMask'] = $this->member['AuthMask'] ? unserialize($this->member['AuthMask']) : array();
			}
		}
	}

	protected function auth($act, $key=null) {
		$this->loginRequired();

		$key===null && $key = $this->auth;
		if (!isset($this->member['AuthMask'][$key]) || !in_array($act, $this->member['AuthMask'][$key])) {
			$this->error('你没有权限进行这个操作');
		}
	}

	protected function loginRequired() {
		if (!$_SESSION['Uid']) {
			if ($this->isAjax()) {
				$this->ajaxReturn(301, '会话超时，请重新登录');
			} else {
				$this->_helper->getHelper('Redirector')->gotoUrl($this->_request->getParam('module').'/login');
			}
		}
	}

	protected function log($params) {
		$l = &$this->M('logs');
		
		$params['Ip'] = Lja_Funcs::ip();

		$l->insert($params);
	}
	
	protected function _dbMap($dbCols = array()) {
		$dbMap = array ();
		if (is_array ( $dbCols )) {
			foreach ( $_REQUEST as $key => $val ) {
				if (in_array ( $key, $dbCols, true )) {
					$dbMap [$key] = $val;
				}
			}
		}
		return $dbMap;
	}
	
	/**
	 * 数据列表展示页面
	 */
	function indexAction() {
		$this->auth('list');

		$model = $this->M($this->mName);
		$dbMap = $this->_dbMap ( $model->info ( 'cols' ) );
		if (method_exists ( $this, '_filter' )) {
			$this->_filter ( $dbMap );
		}

		$termCount = 0;
		foreach ( $dbMap as $key => $val ) {
			
			if (isset ( $val ) && trim ( $val ) != '') {
				
				if (is_array ( $val ) && trim ( $val [1] ) != '') {
					$where .= ($termCount > 0 ? ' and ' : ' ') . $key . ' ' . $val [0] . ' \'' . trim ( $val [1] ) . '\'';
					$termCount ++;
				} else if (trim ( $val ) != '') {
					$where .= ($termCount > 0 ? ' and ' : ' ') . $key . ' LIKE \'%' . trim ( $val ) . '%\'';
					$termCount ++;
				}
			
			}
		}
		
		if (! empty ( $_REQUEST ['orderField'] )) {
			$order = $_REQUEST ['orderField'];
			if (empty ( $_REQUEST ['orderDirection'] )) {
				$order .= ' asc';
			} else {
				$order .= ' ' . $_REQUEST ['orderDirection'];
			}
		} else {
			$order = "id DESC";
		}
		
		$numPerPage = 20;
		$offset = 0;
		$pageNum = $_REQUEST ['pageNum'];
		if (! empty ( $pageNum ) && $pageNum > 0) {
			$offset = ($pageNum - 1) * $numPerPage;
		}

		$where = $this->force_where ? ($where ? $where.' and '.$this->force_where : $this->force_where) : $where;
		$totalCount = $model->getAdapter ()->fetchOne ( 'select count(*) as count from ' . $model->info ( 'name' ) . (empty ( $where ) ? '' : ' where ' . $where) );

		$this->view->list = $model->fetchAll ( $where, $order, $numPerPage, $offset );
		$this->view->totalCount = $totalCount;
		$this->view->numPerPage = $numPerPage;
		$this->view->currentPage = $pageNum > 0 ? $pageNum : 1;
	}
	
	/**
	 * 数据展示页面
	 */
	function readAction() {
		$this->editAction ('list');
	}
	
	/**
	 * 数据创建页面
	 */
	function addAction() {
		$this->auth('add');
	}
	
	/**
	 * 数据编辑页面
	 */
	function editAction($auth='update') {
		$auth!==null && $this->auth($auth);

		$model = $this->M($this->mName);
		$this->view->vo = $model->fetchRow ( 'id=' . $_REQUEST ['id'] );
	}
	
	/**
	 * 创建数据操作
	 */
	function insertAction() {
		$this->auth('add');

		try {
			$model = $this->M($this->mName);
			$dbMap = $this->_dbMap ( $model->info ( 'cols' ) );
			$dbMap['Uid'] || $dbMap['Uid'] = $this->uid;
			$dbMap['Uname'] = $this->member['Realname'];

			$id = $model->insert ( $dbMap );

			$_SERVER['new_article_hash'] = null;
			$this->success ( '操作成功' );
		} catch ( Exception $e ) {
			$this->error ( '操作失败' );
		}
	}
	
	/**
	 * 更新数据操作
	 */
	function updateAction() {
		$this->auth('update');

		try {
			$model = $this->M($this->mName);
			$dbMap = $this->_dbMap ( $model->info ( 'cols' ) );
			$db = $model->getAdapter ();
			
			$where = $db->quoteInto ( 'id=?', $_REQUEST ['id'] );
			$row_affected = $model->update ( $dbMap, $where );
			$_SERVER['new_article_hash'] = null;
			
			$this->success ( '操作成功' );
		} catch ( Exception $e ) {
			$this->error ( '操作失败' );
		}
	}
	
	/**
	 * 删除数据操作，设置删除标志
	 */
	function deleteAction() {
		$this->auth('delete');

		try {
			$model = $this->M($this->mName);
			$db = $model->getAdapter ();
			
			$where = $db->quoteInto ( 'id=?', $_REQUEST ['id'] );
			$row_affected = $model->update ( array ('is_delete' => 1 ), $where );
			
			$this->success ( "操作成功" );
		} catch ( Exception $e ) {
			$this->error ( '操作失败' );
		}
	}
	
	/**
	 * 强制删除数据操作
	 */
	function foreverdeleteAction() {
		$this->auth('delete');

		try {
			$model = $this->M($this->mName);
			$db = $model->getAdapter ();
			$where = $db->quoteInto ( 'id=?', $_REQUEST ['id'] );
			$row_affected = $model->delete ( $where );
			$this->success ( "操作成功" );
		} catch ( Exception $e ) {
			$this->error ( '操作失败' );
		}
	}
	
	/**
     +----------------------------------------------------------
	 * 是否AJAX请求
     +----------------------------------------------------------
	 * @access protected
     +----------------------------------------------------------
	 * @return bool
     +----------------------------------------------------------
	 */
	protected function isAjax() {
		if (isset ( $_SERVER ['HTTP_X_REQUESTED_WITH'] )) {
			if ('xmlhttprequest' == strtolower ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ))
				return true;
		}
		if (! empty ( $_REQUEST ['ajax'] ))
			// 判断Ajax方式提交
			return true;
		return false;
	}
	
	/**
     +----------------------------------------------------------
	 * Ajax方式返回数据到客户端
     +----------------------------------------------------------
	 * @access protected
     +----------------------------------------------------------
	 * @param boolean $status 返回状态
	 * @param String $message 提示信息
	 * @param String $status ajax返回类型 JSON
     +----------------------------------------------------------
	 * @return void
     +----------------------------------------------------------
	 */
	protected function ajaxReturn($status = 1, $message = '') {
		$result = array ();
		$result ['statusCode'] = $status;
		$result ['navTabId'] = $_REQUEST ['navTabId'];
		$result ['rel'] = $_REQUEST ['rel'];
		$result ['callbackType'] = $_REQUEST ['callbackType'];
		$result ['forwardUrl'] = $_REQUEST ['forwardUrl'];
		$result ['message'] = $message;
		
		$json = Zend_Json::encode($result);
		header('Content-Type: application/json');
		header('Content-Length: '.strlen($json));
		echo $json;
		exit;
	}
	
	/**
     +----------------------------------------------------------
	 * 操作成功跳转的快捷方法
     +----------------------------------------------------------
	 * @access protected
     +----------------------------------------------------------
	 * @param string $message 提示信息
	 * @param Boolean $ajax 是否为Ajax方式
     +----------------------------------------------------------
	 * @return void
     +----------------------------------------------------------
	 */
	protected function success($message, $ajax = false) {
		//		$this->_dispatch_jump (1, $message, $ajax);
		$this->ajaxReturn ( 1, $message );
	}
	
	/**
     +----------------------------------------------------------
	 * 操作错误跳转的快捷方法
     +----------------------------------------------------------
	 * @access protected
     +----------------------------------------------------------
	 * @param string $message 错误信息
	 * @param Boolean $ajax 是否为Ajax方式
     +----------------------------------------------------------
	 * @return void
     +----------------------------------------------------------
	 */
	protected function error($message, $ajax = false) {
		//		$this->_dispatch_jump (0, $message, $ajax);
		$this->ajaxReturn ( 0, $message );
	}
	/*
	private function _dispatch_jump($status = 1, $message='', $ajax = false) {
		// 判断是否为AJAX返回
		if ($ajax || $this->isAjax ())
			$this->ajaxReturn ($status, $message);

		if ($status) { //发送成功信息
			
		} else {
			//发生错误
		}

		exit();
	}
	*/
}
