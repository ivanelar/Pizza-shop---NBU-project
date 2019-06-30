<?php

class Pizza extends Product{
	private $doughType;
	
	public function __construct($pName,$pIngredients,$pPrice,$pWeight,$pImage,$pDoughType){
		$this->name = $pName;
		$this->ingredients = $pIngredients;
		$this->price = $pPrice;
		$this->weight = $pWeight;
		$this->image = $pImage;
		$this->doughType = $pDoughType;
	}

	public function set_doughtype($newDoughType){
		$this->doughType = $newDoughType;
	}
	public function get_doughtype(){
		return $this->doughType;
	}
}
?>