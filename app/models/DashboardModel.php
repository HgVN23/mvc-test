<?php

class DashboardModel extends Model {
	private $__table = 'phone';

	function tableFill() {
		return $this->__table;
	}

	function fieldFill() {
		return 'id_phone, img, title, info, price, quantity, id_manufacturer';
	}

	function primaryKey() {
		return 'id_phone';
	}

	public function test() {
		$data = $this->db->table($this->__table)->select()->get();
		return $data;
	}
}

?>