<?php

class Admin_NewsController extends Lja_Controller_Action_Member {

	public function init() {
		parent::init();

		$this->mName = 'articles';
		$this->force_where = ' Category='.intval(Lja_Config::appConfig()->article_category->news);
	}
}

