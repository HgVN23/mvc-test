<?php

class Shop extends Controller {
	public $model_shop;
	public $data = [];

	public function __construct() {
		$this->model_shop = $this->model('ShopModel');
		$this->data['sub_content']['count'] = $this->model_shop->count();
		$this->data['sub_content']['cart'] = $this->model_shop->loadCart();
	}

	public function index() {
		$this->data['sub_content']['listItem'] = $this->model_shop->loadItem();
		$this->data['page_title'] = 'Trang Cửa hàng';
		$this->data['content'] = 'customer/shop';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function single_product($id = 1) {
		$this->data['sub_content']['item'] = $this->model_shop->singleProduct($id);
		$this->data['page_title'] = 'Trang Sản phẩm';
		$this->data['content'] = 'customer/single_product';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function cart() {
		$this->data['page_title'] = 'Trang Giỏ hàng';
		$this->data['content'] = 'customer/cart';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function checkout() {
		$this->data['page_title'] = 'Trang Thanh toán';
		$this->data['content'] = 'customer/checkout';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function order_history() {
		$this->data['sub_content']['listItem'] = $this->model_shop->loadBill();
		$this->data['page_title'] = 'Trang Lịch sử đặt hàng';
		$this->data['content'] = 'customer/order_history';
		
		$this->render('layouts/customer_layout', $this->data);
	}

	public function insert_cart($id) {
		$this->model_shop->addCart($id);

		$response = new Response();
		$response->redirect($_SERVER['HTTP_REFERER']);
	}

	public function delete_cart() {
		$this->model_shop->removeCart();

		$response = new Response();
		$response->redirect($_SERVER['HTTP_REFERER']);
	}

	public function update_cart() {
		$request = new Request();
		$this->model_shop->editCart($request->getFields());

		$response = new Response();
		$response->redirect('cua-hang/cart');
	}

	public function insert_checkout() {
		$this->model_shop->addCheckoutBill($this->model_shop->loadCart());

		$response = new Response();
		$response->redirect('cua-hang/order_history');
	}
}

?>