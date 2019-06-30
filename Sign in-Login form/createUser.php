<?php
include("database.php");
if(isset ($_POST["register"])){
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email= $_POST["email"];
$address = $_POST["address"];
$phone = $_POST["telephone"];
$password = $_POST["password"];

Database::getInstance()->insertUser($firstName,$lastName,$password,$address,$phone,$email);	
}

?>