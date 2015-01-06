<?php
	if ( isset($_POST['firstName'])) {
		$formSubmitted = true;
		
		//send email
		$firstName = $_POST['firstName'] ;
		$lastName = $_POST['lastName'] ;
		$email = $_POST['email'] ;
		$phone = $_POST['phone'] ;
		$comments = $_POST['comments'] ;
		//$user_ip = $_SERVER['REMOTE_ADDR'];
		//$date = date("Y-m-d g:i A");
		
		mail( "bensilvermagic@gmail.com", "Ben Silver Magic Website Inquiry", "Name: $firstName $lastName\nEmail: $email\nPhone: $phone\nComments: $comments\n", "From: $firstName $lastName <$email>" );
	}
?>

	<?php
		if ($formSubmitted) {
			echo "<div id='formSubmitted'>Thank You for your inquiry, $firstName.<br/>We will contact you shortly.</div>";
		} else {
			echo "<div id='formSubmitted'>There was an error sending your information. Please try again.</div>";
		}
	?>