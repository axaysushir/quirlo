<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$subject=$_POST['subject'];

		$toEmail='quirlotech@outlook.com'; // Receiver Email ID, Replace with your email ID
		$message="Name :".$name."\n"."Subject :".$subject."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($toEmail, $subject, $message, $headers)){
			echo "<p>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</p>";
		}
		else{
			echo "Something went wrong !";
		}
	}
?>