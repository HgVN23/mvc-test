<?php

class ShopModel extends Model {
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

	public function singleProduct($id) {
		$data = $this->db->table($this->__table)
			->select('phone.id_phone, phone.img, phone.title, phone.id_brand, phone.info, phone.price, brand.name')
			->innerJoin('brand', 'phone.id_brand = brand.id_brand')
			->where('id_phone', '=', $id)
			->get();
		return $data;
	}
}

?>