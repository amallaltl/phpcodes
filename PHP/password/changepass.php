<?php
	require 'code.php';
	if(isset($_POST['change'])){
		$oldpass = $_POST['oldpass'];
		$newpass = $_POST['newpass'];
		$confirmpass = $_POST['confirmpass'];
		$query = 'select * from admin where ';
	}
?>