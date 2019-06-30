<?php
class User{

	private $firstName;
	private $secondName;
	private $email;
	private $phone;
	private $address;
	private $password;
	private $order;
	
	public function __construct($u_fistname,$u_secondname,$u_email,$u_phone,$u_address,$u_password){
		$this->firstName = $u_fistname;
		$this->secondName =$u_secondname;
		$this->email = $u_email;
		$this->phone = $u_phone;
		$this->address = $u_address;
		$this->password = $u_password;
	}
	
	public  function set_order($new_order){
		$this->order = $new_order;
	}
	
	public function get_order(){
		return $this->order;
	}
	
	public function set_firstname($new_name){
		$this->firstName = $new_name;
	}
	
	public function get_firstname(){
		return $this->firstName;
	}
	
	public function set_secondname($new_name){
		$this->secondName = $new_name;
	}
	
	public function get_secondname(){
		return $this->secondName;
	}
	
	public function set_email($email){
		$this->email = $email;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function set_phone($phone){
		$this->phone=$phone;
	}
	
	public function get_phone(){
		return $this->phone;
	}
	
	public function set_address($new_address){
		$this->address= $new_address;
	}
	
	public function get_address(){
		return $this->address;
	}
	
	
	public function set_password($new_pass){
		$this->password = $new_pass;
	}
	
	public function get_password(){
		return $this->password;
	}
	
}
?>