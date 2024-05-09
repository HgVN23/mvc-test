<?php

class Cart extends Controller {
	// public $model_home;
	public $data = [];

	public function __construct() {
		// $this->model_home = $this->model('HomeModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang giỏ hàng';
		$this->data['page_title'] = 'Trang giỏ hàng';
		$this->data['content'] = 'customer/cart';
		
		$this->render('layouts/customer_layout', $this->data);
	}
}

?>