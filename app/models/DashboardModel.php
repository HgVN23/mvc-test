<?php

class DashboardModel extends Model {
	private $__table = 'phone';

	function tableFill() {
		return $this->__table;
	}

	function fieldFill() {
		return 'id_phone, img, title, info, price, quantity, id_brand';
	}

	function primaryKey() {
		return 'id_phone';
	}

	public function getMax() {
		$data = $this->db->table($this->__table)->select('max(id_phone) as max')->get();
		return $data;
	}

	public function loadItem() {
		$data = $this->db->table($this->__table)
			->select('phone.id_phone, phone.img, phone.title, phone.info, phone.price, phone.quantity, brand.name')
			->join('brand', 'phone.id_brand = brand.id_brand')
			->get();
		return $data;
	}

	public function loadBrand() {
		$data = $this->db->table('brand')->select()->get();
		return $data;
	}

	public function addItem() {
		$request = new Request();
		$this->db->insertData($this->__table, $request->getFields());
	}

	public function removeItem() {
		$request = new Request();
		$this->db->deleteData($this->__table, 'id_phone = '.$request->getFields()["remove"]);
	}
}

?>