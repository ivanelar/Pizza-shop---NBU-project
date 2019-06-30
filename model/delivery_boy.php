<?php

class DeliveryBoy{
	private $id;
	private $name;
	private $isBusy;
	private $awaitingOrders = array();
	
	public function __construct($newId,$newName,$isBusy,$newOrders){
		$this->id = $newId;
		$this->name = $newName;
		$this->isBusy = $isBusy;
		$this->newOrders = $newOrders;
	}
	
	public function set_id($newId){
		$this->id = $newId;
	}
	
	public function get_id(){
		return $this->id;
	}
	
	public function set_name($newName){
		$this->name = $newName;
	}
	
	public function get_name(){
		return $this->name;
	}
	
	public function set_isBusy($newBusy){
		$this->isBusy = $newBusy;
	}
	
	public function get_isBusy(){
		return $this->isBusy;
	}
	
	public function set_new_orders($newOrders){
		$this->awaitingOrders = $newOrders;
	}
	
	public function get_awaiting_orders(){
		return $this->awaitingOrders;
	}
	
	//TODO functions for working with the awaiting orders
}

?>