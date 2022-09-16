<?php include('header.php');
	
	if(isset($_POST['submit']))
	{
	 
	$sql = "insert into users(firstName,email,phone,dob,type,state,city,country) values('".$_POST['firstName']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['dob']."',2,'".$_POST['state']."','".$_POST['city']."','".$_POST['country']."')";
	$query=mysqli_query($conn, $sql);
	if ($query) {
	$msg="You have successfully register, when admin will approve then you will list in users section";
	}
	else
	{
	  $msg="Something Went Wrong. Please try again";
	}


}

		
 ?>
 
<div class="grid">
	<div class="row space-bot">
		<!--INTRO-->
		<p style="color: green"><?=$msg?></p>
		<!--Box 1-->
		<div class="c12">
			<h2 class="title hometitlebg"><b>Join Us</b></h2>
			<div class="noshadowbox">
				<br>
				<p align="left">
<!-- 4th column -->
			<div>
				
				<hr>
				 <form action="" name="Mail_form2" method="post" >
						<div class="form">
							<div class="c6 noleftmargin">
								<label>Name</label>
								<input type="text" name="firstName" required="">
							</div>
							<div class="c6 noleftmargin">
								<label>E-mail address</label>
								<input type="email" name="email" required="">
							</div>
							<div class="c6 noleftmargin">
								<label>Mobile</label>
								<input type="text" name="phone" required="">
							</div>
							 
							<div class="c6 noleftmargin">
								<label>Date of Birth</label>
								<input type="date" name="dob" required="">
							</div>

							<div class="c6 noleftmargin">
								<label>City</label>
								<input type="text" name="city" required="">
							</div>
							<div class="c6 noleftmargin">
								<label>State</label>
								<input type="text" name="state" required="">
							</div>

							<div class="c6 noleftmargin">
								<label>Country</label>
								<input type="text" name="country" required="">
							</div>
							<div class="c6 noleftmargin">
								<label>Address</label>
								<input type="text" name="address" required="">
							</div>
							
							
							
							<label>Your Message</label>
							<textarea name="comment" class="ctextarea" rows="4"></textarea>
							<input type="submit" id="submit" name="submit" class="button" style="font-size:12px;" value="SUBMIT">
						</div>
					</form>
			</div>
			<!-- end 4th column -->			 
				</p>
				
			</div>
		</div>
		
	</div>
	 
<?php include('footer.php'); ?>