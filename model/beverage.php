<?php
class Beverage extends ABaseProduct{
	private $size;
	
	public function __construct($newId,$newName,$newPrice,$newSize){
		$this->id = $newID;
		$this->name = $newName;
		$this->price = $newPrice;
		$this->size = $newSize;
	}
	
	public funtion set_id($newId){
		$this->id = $newId;
	}
	public funtion set_name($newName){
		$this->name  = $newName;
	
	}
	public funtion set_price($newPrice){
		$this->price = $newPrice;
	}
	
	public function set_size($newSize){
		$this->size = $newSize;
	}
	public function get_id(){
		return $this->id;
	}
	public function get_name(){
		return $this->name;
	}
	public function get_price(){
		return $this->price;
	}
	public function get_size(){
		return $this->size;
	}

}

?>