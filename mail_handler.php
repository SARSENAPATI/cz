<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$cn=$_POST['cn'];
		$email=$_POST['email'];
		$message=$_POST['Message'];

		$to='Ndhamne210@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Contact us';
		$message="Name :".$name."\n"."cn :".$cn."\n"."Wrote the following :"."\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header('Location: thankyou.html');
		}
		else{
			echo "Something went wrong!";
		}
	}
?>