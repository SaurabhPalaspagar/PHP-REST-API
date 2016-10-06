<?php

// Include confi.php
include_once('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	// Get data
	$firstName = isset($_POST['firstName']) ? mysql_real_escape_string($_POST['firstName']) : "";
	$lastName = isset($_POST['lastName']) ? mysql_real_escape_string($_POST['lastName']) : "";
	$zipcode = isset($_POST['zipcode']) ? mysql_real_escape_string($_POST['zipcode']) : "";
	$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
	$status = isset($_POST['status']) ? mysql_real_escape_string($_POST['status']) : "";

	// Insert data into data base
	$sql = "INSERT INTO `Medymology`.`user` (`ID`, `firstName`, `lastName`, `zipcode`, `email`, `status`) VALUES (NULL, '$firstName', '$lastName','$zipcode', '$email', '$status');";
	$qur = mysql_query($sql);
	if($qur){
		$json = array("status" => 1, "msg" => "Done User added!");
	}else{
		$json = array("status" => 0, "msg" => "Error adding user!");
	}
}else{
	$json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);