<?
		$con= mysqli_connect("localhost","root" , "" , "trackEmpl");
		if($con->connect_error){
			die("Error" . $conn->connect_error);
		}
		echo("Connected");
?>