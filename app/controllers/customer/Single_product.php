<?php

class Single_product extends Controller {
	// public $model_home;
	public $data = [];

	public function __construct() {
		// $this->model_home = $this->model('HomeModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang sản phẩm';
		$this->data['page_title'] = 'Trang sản phẩm';
		$this->data['content'] = 'customer/single_product';
		
		$this->render('layouts/customer_layout', $this->data);
	}
}

?>