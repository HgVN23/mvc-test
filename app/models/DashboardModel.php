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

	public function count($status) {
		$data = $this->db->table('bill')
			->select('COUNT(status) AS count')
			->where('status', '=', $status)
			->get();
		return $data;
	}

	public function getMax() {
		$data = $this->db->table($this->__table)->select('MAX(id_phone) AS max')->get();
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
		$this->db->table('cart')
			->where('id_phone', '=', $request->getFields()["remove"])
			->delete();
		$this->db->table('checkout')
			->where('id_phone', '=', $request->getFields()["remove"])
			->delete();
		$this->db->table($this->__table)
			->where('id_phone', '=', $request->getFields()["remove"])
			->delete();
	}

	public function editItem($img) {
		$request = new Request();
		$data = $request->getFields();
		$data["img"] = $img;
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

	public function loadBill() {
		$data = $this->db->table('bill')
			->select('bill.*, checkout.id_checkout, checkout.id_phone, checkout.c_quantity, phone.id_phone, phone.title, customer.id_customer, customer.name AS c_name, admin.id_admin, admin.name AS a_name')
			->innerJoin('checkout', 'bill.id_checkout = checkout.id_checkout')
			->innerJoin('phone', 'checkout.id_phone = phone.id_phone')
			->innerJoin('customer', 'bill.id_customer = customer.id_customer')
			->innerJoin('admin', 'bill.id_admin = admin.id_admin')
			->orderBy('id_bill', 'DESC')
			->get();
		return $data;
	}

	public function editOrder() {
		$request = new Request();
		$data = $request->getFields();
		$this->db->table('bill')
			->where('id_bill', '=', $data["id_bill"])
			->update($data);
	}
}

?>