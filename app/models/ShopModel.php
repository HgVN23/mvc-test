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

	public function loadCart() {
		$data = $this->db->table('cart')
			->select('cart.id_phone, cart.c_quantity, phone.id_phone, phone.img, phone.title, phone.price, phone.quantity')
			->innerJoin('phone', 'cart.id_phone = phone.id_phone')
			->get();
		return $data;
	}

	public function addCart($id) {
		$data = [
			"id_customer" => 1,
			"id_phone" => $id,
			"c_quantity" => 1
		];
		$this->db->table('cart')->insert($data);
	}

	public function removeCart() {
		$request = new Request();
		$this->db->table('cart')
			->where('id_phone', '=', $request->getFields()["remove"])
			->delete();
	}

	public function editCart($data) {
		$this->db->table('cart')
			->where('id_phone', '=', $data["id_phone"])
			->update($data);
	}

	public function count() {
		$data = $this->db->table('cart')
			->select('COUNT(*) as result')
			->where('id_customer', '=', 1)
			->get();
		return $data;
	}

	public function getMax() {
		$data = $this->db->table('checkout')->select('max(id_checkout) as max')->get();
		if($data[0]["max"] == NULL) 
			$data[0]["max"] = 0;
		return $data;
	}

	public function addCheckout($data) {
		$max = $this->getMax()[0]["max"] + 1;
		foreach($data as $item) {
			$item["id_checkout"] = $max;
			$item["total"] = $item["price"]*$item["c_quantity"];
			$item["status"] = 'Đang xử lý';
			// Cắt array hay j đó ở đây....
			$this->db->table('checkout')->insert($item);
		}
	}
}

?>