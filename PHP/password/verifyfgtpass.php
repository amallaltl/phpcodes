<?php 
	require 'code.php';
	if(isset($_GET['ticket'])){
		$ticket = $_GET['ticket'];
		$query = 'select time from pass_change where randnum='.$ticket.';';
		$result = selectData($query);
		$row = $result->fetch_assoc();
		$time = $row['time'];
		$now = date("H:i:s");
		if(strtotime($time)<=strtotime($now)) {
			$hourdiff = round((strtotime($now) - strtotime($time))/3600, 1);
			$email = $row['email'];
			if($hourdiff > 6){
				$cookie_name = "user";
				$cookie_email = $email;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 0.4), "/"); // 86400 = 1 day
				
				header('Location: changepass.php');
			}else{
				echo "The tocken has been timed out! Please request for new tocken";
			}
		} else {
			echo "The tocken has been timed out! Please request for new tocken";
		}
	}else{
		echo "Invalid Ticket Id";
	}
?>