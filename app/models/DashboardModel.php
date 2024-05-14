<?php

class DashboardModel extends Model {
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

	public function getMax() {
		$data = $this->db->table($this->__table)->select('max(id_phone) as max')->get();
		return $data;
	}

	public function loadItem() {
		$data = $this->db->table($this->__table)
			->select('phone.id_phone, phone.img, phone.title, phone.id_brand, phone.info, phone.price, phone.quantity, brand.name')
			->innerJoin('brand', 'phone.id_brand = brand.id_brand')
			->get();
		return $data;
	}

	public function loadBrand() {
		$data = $this->db->table('brand')->select()->get();
		return $data;
	}

	public function addItem() {
		$request = new Request();

		$this->db->table($this->__table)
			->insert($request->getFields());
	}

	public function removeItem() {
		$request = new Request();
		$this->db->table($this->__table)
			->where('id_phone', '=', $request->getFields()["remove"])
			->delete();
	}

	public function editItem() {
		$request = new Request();
		$data = $request->getFields();
		$this->db->table($this->__table)
			->where('id_phone', '=', $data["id_phone"])
			->update($data);
	}

	/*public function displayImg($id) {
		$data = $this->db->table($this->__table)
			->select('img')
			->where('id_phone', '=', $id)
			->get();
		echo $data[0]["img"];
	}*/
}

?>