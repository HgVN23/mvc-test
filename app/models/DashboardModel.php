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

	public function test() {
		$data = $this->db->table($this->__table)
			->select('phone.id_phone, phone.img, phone.title, phone.info, phone.price, phone.quantity, brand.name')
			->join('brand', 'phone.id_brand = brand.id_brand')
			->get();
		return $data;
	}
}

?>