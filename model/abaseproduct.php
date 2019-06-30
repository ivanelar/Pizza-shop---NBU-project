<?php

abstract class ABaseProduct{
	private $name;
	private $price;
	private $id;
	
	abstract public funtion set_id($newId);
	abstract public funtion set_name($newName);
	abstract public funtion set_price($newPrice);

}
?>