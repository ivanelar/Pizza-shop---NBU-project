<?php

class Addition{
	private $id;
	private $name;
	private $price;
	
	public function __construct($newId,$newName,$newPrice){
		$this->id = $newId;
		$this->name = $newName;
		$this->price = $newPrice;
	}
	
	public function get_id(){
		return $this->id;
	}
	public function set_id($newId){
		$this->id = $newId;
	}
	public function get_name(){
		return $this->name;
	}
	public function set_price($newPrice){
		$this->price = $newPrice;
	}
}

?>