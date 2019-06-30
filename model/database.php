<?php
//include("user.php");
//Singleton implementation of database connection
class Database{
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $databaseName = "trackEmpl";

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
	public function insertUser($fname,$lname,$email,$pass){
		//$empty_meals = NULL;
		$sql = "INSERT INTO `register` ( `fname`, `lname`, `email`, `password`)
VALUES ('$fname', '$lname', '$email', '$pass')";
		$res =$this->connection->query($sql);
if ($res) {
    echo "kato da stiga go tuka";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
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