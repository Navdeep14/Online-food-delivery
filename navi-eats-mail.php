<?php
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$to='navi.14121997@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='PASSWORD RECOVERY';
		$headers="From: ".$email;

		if(mail($to, $subject, $headers)){
			echo "<h1>Sent Successfully! Thank you, We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
