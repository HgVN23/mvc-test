<?php

abstract class Model extends Database {
	protected $db;

	function __construct() {
		$this->db = new Database();
	}

	abstract function tableFill();
	abstract function fieldFill();
	abstract function primaryKey();

	public function get() {
		$tableName = $this->tableFill();
		$fieldSelect = $this->fieldFill();

		if(empty($fieldSelect)) {
			$fieldSelect = '*';
		}
		$sql = "SELECT $fieldSelect FROM $tableName";
		$query = $this->db->query($sql);
		if(!empty($query)) {
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		return false;
	}

	public function find($id) {
		$tableName = $this->tableFill();
		$fieldSelect = $this->fieldFill();
		$primaryKey = $this->primaryKey();

		if(empty($fieldSelect)) {
			$fieldSelect = '*';
		}
		$sql = "SELECT $fieldSelect FROM $tableName WHERE id = $id";
		$query = $this->db->query($sql);
		if(!empty($query)) {
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		return false;
	}
}

?>