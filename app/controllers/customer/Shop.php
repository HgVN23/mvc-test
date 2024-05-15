<?php

class Shop extends Controller {
	public $model_shop;
	public $data = [];

	public function __construct() {
		$this->model_shop = $this->model('ShopModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang Cửa hàng';
		$this->data['sub_content']['listItem'] = $this->model_shop->loadItem();
		$this->data['page_title'] = 'Trang cửa hàng';
		$this->data['content'] = 'customer/shop';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function single_product($id = 1) {
		$this->data['sub_content']['title'] = 'Trang Sản phẩm';
		$this->data['sub_content']['item'] = $this->model_shop->singleProduct($id);
		$this->data['page_title'] = 'Trang Sản phẩm';
		$this->data['content'] = 'customer/single_product';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function cart() {
		$this->data['sub_content']['title'] = 'Trang Giỏ hàng';
		$this->data['sub_content']['listItem'] = $this->model_shop->loadCart();
		$this->data['page_title'] = 'Trang Giỏ hàng';
		$this->data['content'] = 'customer/cart';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function checkout() {
		$this->data['sub_content']['title'] = 'Trang Thanh toán';
		$this->data['sub_content']['listItem'] = $this->model_shop->loadCart();
		$this->data['page_title'] = 'Trang Thanh toán';
		$this->data['content'] = 'customer/checkout';
		
		$this->render('layouts/customer_layout', $this->data);
	}


	public function insert_cart($id) {
		$request = new Request();
		$this->model_shop->addCart($id);

		$response = new Response();
		$response->redirect('cua-hang/single_product/'.$id);
	}
}

?>