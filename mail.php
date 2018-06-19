<?php
	
	// Please specify your Mail Server - Example: mail.example.com.


	$msg="";
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['mailid'];
		$comments=$_POST['comments'];
		
		$to='shriarun97@gmail.com';
		$subject='Comments from customer';
		$message="Name: ".$name."\n"."E-mail: ".$email."\n"."Comments: ".$comments;
		$headers="From: ".$email;
		
		if(mail($to, $subject, $message, $headers)){
			$msg = "Thanks for your comments. We value them";
		}
		else{
			$msg = "Something wrong with your submission";
		}
	}
    header("Location: http://pcet.ac.in/zerog/#info");
	exit();
?>

