<?php 
require 'config.php';//For database connection

//to select data
function selectData($query){
	$result = $conn->query($query);
	if ($result->num_rows > 0) {
		// use $result->fetch_assoc() to fetch row by row
		return $result;//returns the whole array
	}
}

//to insert data
function insertData($query){
	$result = $conn->query($query);
	if ($result === TRUE) {
		return TRUE;//if inserted,return true
	}
}

//to update data
function updateData($query){
	$result = $conn->query($query);
	if ($result === TRUE) {
		return TRUE;//if updated,return true
	}
}

//to delete data
function deleteData($query){
	$result = $conn->query($query);
	if ($result === TRUE) {
		return TRUE;//if deleted,return true
	}
}


//For login
function login($query){
	$result = $conn->query($query);
	if ($result->num_rows > 0) {
		return TRUE;//if deleted,return true
	}
}

//to register
function register($query){
	$result = $conn->query($query);
	if ($result === TRUE) {
		return TRUE;//if registered,return true
	}
}
?>