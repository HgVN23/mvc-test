<?php

class Dashboard extends Controller {
	public $model_dashboard;
	public $data = [];

	public function __construct() {
		$this->model_dashboard = $this->model('DashboardModel');
	}

	public function index() {
		$this->data['sub_content']['title'] = 'Trang Quản trị';
		$this->data['page_title'] = 'Trang Quản trị';
		$this->data['content'] = 'admin/dashboard';
		
		$this->render('layouts/admin_layout', $this->data);
	}

	public function storage() {
		$this->data['sub_content']['title'] = 'Trang Kho sản phẩm';
		$this->data['sub_content']['list'] = $this->model_dashboard->test();
		$this->data['page_title'] = 'Trang Kho sản phẩm';
		$this->data['content'] = 'admin/storage';
		
		$this->render('layouts/admin_layout', $this->data);
	}
}

?>