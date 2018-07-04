<?php
	require 'code.php';
	if(isset($_POST['reset'])){
	$email = $_POST['email'];	
	$query = "select * from user where email = '$email'";
	$result = selectData($query);
	$val = mysqli_num_rows($result);
	if($val > 0 ){
		$random = rand(10,100);
		$insert = "insert into pass_change (time,randnum,email) values('".date("H:i:s")."','".rand(10,100)."','".$email."')";
		$val = insertData($insert);//inserted
		if($val){
			//sending mail
			$to      = $email;
			$subject = 'Click the link to recover your password';
			$message = "<a href=".$_SERVER['REQUEST_URI']."/verifyfgtpass.php?ticket=".$random.">Click here</a>";
			$headers = 'From: webmaster@example.com' . "\r\n" .
				'Reply-To: webmaster@example.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
		}
	}
}
?>