<?php

class Home extends Controller {
	// public $model_home;
	public $data = [];

	public function __construct() {
		// $this->model_home = $this->model('HomeModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang chủ';
		$this->data['page_title'] = 'Trang chủ';
		$this->data['content'] = 'customer/home';
		
		$this->render('layouts/customer_layout', $this->data);
	}
}

?>