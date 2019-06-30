<?php
class Pasta extends Product{

	private $sauseType;
	
	public function __construct($pName,$pIngredients,$pPrice,$pWeight,$pImage,$pSauseType){
		$this->name = $pName;
		$this->ingredients = $pIngredients;
		$this->price = $pPrice;
		$this->weight = $pWeight;
		$this->image = $pImage;
		$this->sauseType = $pSauseType;
	}

	public function set_sauseType($newSauseType){
		$this->sauseType = $newSauseType;
	}
	public function get_sauseType(){
		return $this->sauseType;
	}
}

?>