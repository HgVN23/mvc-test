<?php

class Shop extends Controller {
	// public $model_home;
	public $data = [];

	public function __construct() {
		// $this->model_home = $this->model('HomeModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang cửa hàng';
		$this->data['page_title'] = 'Trang cửa hàng';
		$this->data['content'] = 'customer/shop';
		
		$this->render('layouts/customer_layout', $this->data);
	}
}

?>