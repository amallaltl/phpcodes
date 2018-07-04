<?php 
	require 'config.php';
	
	function selectData($query){
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare($query); 
			$stmt->execute();
			// set the resulting array to associative
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
			return $result;//return array
		}catch(PDOException $e) {
			return $e->getMessage();
		}
		$conn = null;
	}
	
	//to insert data
	function insertData($query){
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// use exec() because no results are returned
			$conn->exec($query);
			return TRUE;
		}catch(PDOException $e){
			return $e->getMessage();
		}
		$conn = null;
	}

	//to update data
	function updateData($query){
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare($query);
			$result = $stmt->execute();
			return TRUE;
		}catch(PDOException $e){
				return $e->getMessage();
		}
		$conn = null;
	}

	//to delete data
	function deleteData($query){
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$result = $conn->exec($query);
			return TRUE;
		}catch(PDOException $e){
			return $e->getMessage();
		}
		$conn = null;
	}
?>