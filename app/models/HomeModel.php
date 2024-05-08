<?php

class HomeModel extends Model {
	private $__table = 'testt';

	/*function __construct() {
		parent::__construct();
	}*/

	function tableFill() {
		return $this->__table;
	}

	function fieldFill() {
		return 'id, text';
	}

	function primaryKey() {
		return 'id';
	}

	public function getList2() {
		// $data = $this->db->table($this->__table)->select()->orderBy('id', 'DESC')->get();
		/*$data = $this->db->table('testt')
			->join('test2', 'testt.id = test2.t_id')
			->select('*, test2.id as id2')
			->get();*/
		// return $data;
	}

	public function getDetail2($name) {
		$data = $this->db->table($this->__table)->where('text', '=', $name)->select()->get();
		return $data;
	}

	public function inserLastNew($id) {
		$this->db->table('testt')->insert($id);
		return $this->db->lastId();
	}
}

?>