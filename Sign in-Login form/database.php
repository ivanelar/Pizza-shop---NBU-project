<?php
//Singleton implementation of database connection
class Database{
	private $host = "127.0.0.1";
	private $username = "root";
	private $password = "";
	private $databaseName = "pizzashop";

	private static $instance;
	private $connection;
	private $results = array();
	private $count = 0;


	private function __construct(){
		$this->connect();
	}


	public static function getInstance(){
		if(self::$instance==null){
			self::$instance = new Database();
		}
		return self::$instance;
	}

	private function connect(){
		$this->connection = mysqli_connect($this->host,$this->username ,$this->password , $this->databaseName);
		if ($this->connection->connect_error) {
			die("No connection: " . $con->connect_error);
		}
	}

	//use as Database::getInstance()->query("sql string here")->results() gives the saved objects in the db
	public function search($sql){

		if($this->query = $this->connection->query($sql)){
			while($row = $this->query->fetch_object()){
				$this->results[] = $row;
			}
			$this->count = $this->query->num_rows;
		}
		return $this;
	}


	//inserts user into db
	public function insertUser($first,$second,$pass,$address,$phone,$email){
		$empty_meals = NULL;
		$sql = "INSERT INTO `users` ( `first_name`, `second_name`, `password`, `address`, `phone`, `email`, `selected_meals`)
VALUES ('$first', '$second', '$pass', '$address', '$phone', '$email', '$empty_meals')";
		$res =$this->connection->query($sql);
if ($res) {
//Uncomment the below to see results for creating the user	
   // echo "Success ,created user !!";
} else {
    echo "Error this profile is already taken ";
}
	}
	
	public function hasProfile($email,$password){
		//select * from users where email = 'admin@admin.com' and password='123' LIMIT 1
		$sql = "select * from `users` where `email`='$email' and `password`='$password' limit 1";
		$result = $this->connection->query($sql);
		if ($result){
			echo "Login success";
		}else{
			echo "Wrong email or password.Please try again";
		}
	}
	//the result of the search or null
	public function results(){
		return $this->results;
	}

	//returns if the queried property exists in the DB as occurance
	public function count(){
		return $this->count;
	}
}


?>