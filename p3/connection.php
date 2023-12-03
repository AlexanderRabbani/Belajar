<?php 
if(!isset($conn)){
   	
	$host			= 'localhost';
	$dbUsername		= 'root';
	$dbPassword		= '';
	$dbName			= 'stok';
		
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
   	
	if($conn->connect_errno){
		die("Error. please check!");
		exit();
	}
}
?>