<?php 
	if (!isset($_SESSION['loginid']) && empty($_SESSION['loginid'])) {//checking for login or not
		header('Location: ../login.php');
	}
?>