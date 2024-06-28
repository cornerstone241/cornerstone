<form action="formtoemailpro.php" method="post" id="frmContact" class="ctc-form contactForm">
	<div class="formLabel">
		<label>Name:</label>
		<input type="text" name="name" id="name" />
	</div>
	<div class="formLabel">
		<label>Phone:</label>
		<input type="text" name="phone" id="phone" />
	</div>
	<div class="formLabel">
		<label>Email:</label>
		<input type="text" name="email" id="email" />
	</div>
	<div class="formLabel">
		<label>Address:</label>
		<input type="text" name="address" id="address" />
	</div>
	<label>Message:</label>
	<textarea cols="30" rows="1" name="comments" id="comments"></textarea>
	<br />
	<input type="submit" value="SUBMIT" name="Submit" class="btn"/>
</form>

<script type="text/javascript">

//You should create the validator only after the definition of the HTML form

  var frmvalidator  = new Validator("frmContact");



 frmvalidator.EnableMsgsTogether();

 frmvalidator.addValidation("Name","req","Please enter your Name");

  frmvalidator.addValidation("Phone","req","Please enter your Phone");  

  frmvalidator.addValidation("email","req","Please enter your Email Address");

  frmvalidator.addValidation("email","email");

</script> 
