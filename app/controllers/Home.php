<?php

class Home extends Controller {
	public $model_home;
	public $data = [];

	public function __construct() {
		$this->model_home = $this->model('HomeModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang chủ';
		$this->data['page_title'] = 'Trang chủ';
		$this->data['content'] = 'home/index';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function shop() {
		$this->data['sub_content']['title'] = 'Trang cửa hàng';
		$this->data['page_title'] = 'Trang cửa hàng';
		$this->data['content'] = 'home/shop';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function single_product() {
		$this->data['sub_content']['title'] = 'Trang sản phẩm';
		$this->data['page_title'] = 'Trang sản phẩm';
		$this->data['content'] = 'home/single_product';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function cart() {
		$this->data['sub_content']['title'] = 'Trang giỏ hàng';
		$this->data['page_title'] = 'Trang giỏ hàng';
		$this->data['content'] = 'home/cart';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function checkout() {
		$this->data['sub_content']['title'] = 'Trang thanh toán';
		$this->data['page_title'] = 'Trang thanh toán';
		$this->data['content'] = 'home/checkout';
		
		$this->render('layouts/customer_layout', $this->data);
	}
}

?>