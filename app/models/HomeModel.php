<?php

class HomeModel extends Model {
	private $__table = 'phone';

	function tableFill() {
		return $this->__table;
	}

	function fieldFill() {
		return 'id_phone, img, title, id_brand, info, price, quantity';
	}

	function primaryKey() {
		return 'id_phone';
	}

	public function loadItem() {
		$data = $this->db->table($this->__table)
			->select('id_phone, img, title, price')
			->get();
		return $data;
	}

	public function count() {
		$data = $this->db->table('cart')
			->select('COUNT(*) as result')
			->where('id_customer', '=', 1)
			->get();
		return $data;
	}

	public function loadCart() {
		$data = $this->db->table('cart')
			->select('cart.id_phone, phone.id_phone, phone.img, phone.title, phone.price, phone.quantity')
			->innerJoin('phone', 'cart.id_phone = phone.id_phone')
			->get();
		return $data;
	}
}

?>