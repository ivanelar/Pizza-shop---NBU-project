<?php

class Order{
	private $id;
	private $beveragesList = array();
	private $additionsList = array();
	private $productsList = array();
	private $isReady;
	private $price;
	
	public function __construct($newId,$newBeveragesList,$newAdditionsList,$newProductsList,$ready,$newPrice){
		$this->id = newId;
		$this->beveragesList = $newBeveragesList;
		$this->additionsList = $newAdditionsList;
		$this->productsList = $newProductsList;
		$this->isReady = $ready;
		$this->price = $newPrice;
	}
	
	public function get_beveragesList(){
		return $this->beveragesList;
	}
	
	public function set_beveragesList($newList){
		$this->beveragesList = $newList;
	}
	
	public function get_additionsList(){
		return $this->additionsList;
	}
	
	public function set_additionsList($newList){
		$this->additionsList = $newList;
	}
	
	public function get_productsList(){
		return $this->productsList;
	}
	
	public function set_productsList($newList){
		$this->productsList = $newList;
	}
	
	public function get_isReady(){
		return $this->isReady;
	}
	
	public function set_isReady($ready){
		$this->isReady = $ready;
	}
	
	public function get_price(){
		return $this->price ;
	}
	
	public function set_price($newPrice){
		$this->price = $newPrice;
	}
	
	public function addBeverage($newBeverage){
		$beveragesList[] = $newBeverage;
	}
	
	public function addAddition($newAddition){
		$additionsList[] = $newAddition;
	}
	
	public function addProduct($newProduct){
		$productsList[] = $newProduct;
	}
	
//TODO add functions for removing objects from the list 
}
?>