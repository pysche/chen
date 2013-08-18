<?php

class Admin_ArticlesController extends Lja_Controller_Action_Member {
	protected $categories = array();

	public function init() {
		$c = &$this->M('articlecategories');
		$cs = $c->fetchAll();
		foreach ($cs as $category) {
			$this->categories[$category['id']] = $category['Title'];
		}

		$this->view->categories = $this->categories;
		parent::init();
	}
}