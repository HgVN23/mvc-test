<?php

class Dashboard extends Controller {
	public $model_dashboard;
	public $data = [];

	public function __construct() {
		$this->model_dashboard = $this->model('DashboardModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang Quản trị';
		$this->data['sub_content']['count0'] = $this->model_dashboard->count0();
		$this->data['sub_content']['count1'] = $this->model_dashboard->count1();
		$this->data['page_title'] = 'Trang Quản trị';
		$this->data['content'] = 'admin/dashboard';
		
		$this->render('layouts/admin_layout', $this->data);
	}

	public function storage() {
		$this->data['sub_content']['title'] = 'Trang Kho sản phẩm';
		$this->data['sub_content']['idMax'] = $this->model_dashboard->getMax();
		$this->data['sub_content']['listItem'] = $this->model_dashboard->loadItem();
		$this->data['sub_content']['listBrand'] = $this->model_dashboard->loadBrand();
		$this->data['page_title'] = 'Trang Kho sản phẩm';
		$this->data['content'] = 'admin/storage';
		
		$this->render('layouts/admin_layout', $this->data);
	}

	public function list_order() {
		$this->data['sub_content']['title'] = 'Trang Danh sách đơn hàng';
		$this->data['sub_content']['listItem'] = $this->model_dashboard->loadBill();
		$this->data['page_title'] = 'Trang Danh sách đơn hàng';
		$this->data['content'] = 'admin/list_order';
		
		$this->render('layouts/admin_layout', $this->data);
	}

	public function insert_storage() {
		$this->model_dashboard->addItem();

		$response = new Response();
		$response->redirect('quan-tri/storage');
	}

	public function update_storage($url) {
		$this->model_dashboard->editItem($url);

		$response = new Response();
		$response->redirect('quan-tri/storage');
	}

	public function delete_storage() {
		$this->model_dashboard->removeItem();

		$response = new Response();
		$response->redirect('quan-tri/storage');
	}

	/*public function display_img($id = 1) {
		$this->model_dashboard->displayImg($id);
	}*/

	public function update_order() {
		$this->model_dashboard->editOrder();

		$response = new Response();
		$response->redirect('quan-tri/list_order');
	}
}

?>