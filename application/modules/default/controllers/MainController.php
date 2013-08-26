<?php

class MainController extends Lja_Controller_Action_Front {

	public function indexAction() {

		$config = Lja_Config::appConfig();
		//	news
		$news = &Lja_Db::t('articles');
		$db = &$news->getAdapter();
		$select = &$db->select();
		$select->from('Lja_Articles')->where('PubFlag=?', 1)->where('Category=?', $config->db->article_category->news)->order('SortNum')->order('CreateTime DESC')->limit(5);

		$this->view->news = $db->fetchAll($select);

		//	drivers
		$drivers = &Lja_Db::t('drivers');
		$select = &$db->select();
		$select->from('Lja_Drivers')->where('PubFlag=?', 1)->order('SortNum')->order('CreateTime DESC');
		$this->view->drivers = $db->fetchAll($select);

		$this->view->banners = Lja_File::getByHash(md5('lja'));
	}
}

