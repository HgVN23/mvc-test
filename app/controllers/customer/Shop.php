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
}

?>