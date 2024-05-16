<?php

class Home extends Controller {
	public $model_home;
	public $data = [];

	public function __construct() {
		$this->model_home = $this->model('HomeModel');
		$this->data['sub_content']['count'] = $this->model_home->count();
		$this->data['sub_content']['cart'] = $this->model_home->loadCart();
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang chủ';
		$this->data['sub_content']['listItem'] = $this->model_home->loadItem();
		$this->data['page_title'] = 'Trang chủ';
		$this->data['content'] = 'customer/home';
		
		$this->render('layouts/customer_layout', $this->data);
	}
}

?>