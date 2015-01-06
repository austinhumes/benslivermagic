<?php include("header_darkwood.inc"); ?> 

	<div class="pad10 center white">
		Call Ben: (619) 788-3660
	</div>
	
	<div class="pad10">
		<img id="contactPic" src="/images/contact.jpg" width="450" height="284"/>
		
		<form id="contactForm" method="post" action="contactSubmit.php" name="contactForm">
			<div id="formFeedback"></div>
			<div class="right">* All fields are required</div>
			<label for="firstName">First Name</label>
			<input type="text" name="firstName" value="">
			
			<label for="lastName">Last Name</label>
			<input type="text" name="lastName" value="">
			
			<label for="email">Email</label>
			<input type="text" name="email" value="">
			
			<label for="phone">Phone</label>
			<input type="text" name="phone" value="">
	
			<label for="comments">Comments</label>
			<textarea name="comments"></textarea>
			<br><br>
			<input type="submit" class="blackShine" value="Submit">
		</form>
	</div>
		
	<script>
		$('#contactForm').submit(function(event) {
			event.preventDefault();
			
			//Get the data from all the fields
	        var firstName = $('input[name=firstName]');
	        var lastName = $('input[name=lastName]');
	        var email = $('input[name=email]');
	        var phone = $('input[name=phone]');
	        var comments = $('textarea[name=comments]');
	        
	         //Simple validation to make sure user entered something
	        //If error found, add hightlight class to the text field
	        if (firstName.val()=='') {
	            firstName.addClass('highlight');
	            return false;
	        } else firstName.removeClass('highlight');
	        
	        if (lastName.val()=='') {
	            lastName.addClass('highlight');
	            return false;
	        } else lastName.removeClass('highlight');
	         
	        if (email.val()=='') {
	            email.addClass('highlight');
	            return false;
	        } else email.removeClass('highlight');
	        
	        if (phone.val()=='') {
	            phone.addClass('highlight');
	            return false;
	        } else phone.removeClass('highlight');
	         
	        if (comments.val()=='') {
	            comments.addClass('highlight');
	            return false;
	        } else comments.removeClass('highlight');
	        
	        $('#formFeedback').html("Sending...");
	        
	        $.post("contactSubmit.php", $("#contactForm").serialize(), function(data) {
	        	$('#formFeedback').html(data);
	        });
		});
	</script>
<?php include("footer_darkwood.inc"); ?> 