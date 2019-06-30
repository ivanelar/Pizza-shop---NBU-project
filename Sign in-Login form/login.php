<?php
include("database.php");
echo "v logina";
if(isset ($_POST["login"])){
$email = $_POST["loginEmail"];
$password = $_POST["loginPassword"];
Database::getInstance()->hasProfile($email,$password);	
}
?>