<?php 

	require 'config.php';//For database connection

//to select data
function selectData($query){
	global $conn;
	$data = mysqli_query($conn, $query);
	$result = mysqli_num_rows($data);
		if ($result > 0) {
			// use $result->fetch_assoc() to fetch row by row
			return $data;//returns the whole array
		}else{
			return false;
		}
		mysqli_close($conn);
}

//to insert data
function insertData($query){
	//require 'config.php';//For database connection
	global $conn;
	$result = mysqli_query($conn, $query);
	if ($result) {//if inserted
		return TRUE;
	} else {
		return false;
	}
	mysqli_close($conn);
}

//to update data
function updateData($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	if ($result === TRUE) {
		return TRUE;//if updated,return true
	}else{
		return false;
	}
	mysqli_close($conn);
}

//to delete data
function deleteData($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	if ($result === TRUE) {
		return TRUE;//if deleted,return true
	}else{
		return false;
	}
	mysqli_close($conn);
}

//to login
function login($query){
	global $conn;
	$data = mysqli_query($conn, $query);
	$result = mysqli_num_rows($data);
		if ($result > 0) {
			return TRUE;
		}else{
			return false;
		}
		mysqli_close($conn);
}

//to register
function register($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	if ($result) {//if registered
		return TRUE;
	} else {
		return false;
	}
	mysqli_close($conn);
}

?>