<?php

class Checkout extends Controller {
	// public $model_home;
	public $data = [];

	public function __construct() {
		// $this->model_home = $this->model('HomeModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang thanh toán';
		$this->data['page_title'] = 'Trang thanh toán';
		$this->data['content'] = 'customer/checkout';
		
		$this->render('layouts/customer_layout', $this->data);
	}
}

?>