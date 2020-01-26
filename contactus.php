<?php include"includes/header.php"; ?>
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Feedback</h4>
				<p class="contact-agile2">Share Your Experienced</p>
				<form method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Your Feedback</label>
                            <input type="text" class="form-control" name="Feedback" id="email" required cols="10" rows="5">
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Rate(Out Of 10)</label>
                            <input type="text" class="form-control" name="rate" id="email" required cols="10" rows="5">
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$Feedback=$_POST['Feedback'];
					 $rate=$_POST['rate'];
					$approval = "Not Allowed";
					
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`,`Feedback`,`rate`) VALUES ('$name','$phone','$email',now(),'$approval', '$Feedback', '$rate')" ;
					
					
					$feed=mysqli_query($con,$sql);
					if(!$feed){
						die('Failed to INSERT'.mysqli_error($con));
					}
					
				}
				?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+880 1831852614</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@HotelManagement</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Dhanmondi 19, Dhaka, Bangladesh</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 

								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.08057359503!2d90.37073572495441!3d23.745942738366114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b6264409eb%3A0x48558c56551a5947!2z4Ka44KeN4Kaf4Ka-4KawIOCmueCni-Cmn-Cnh-CmsiDgpo_gpqjgp43gpqEg4KaV4Ka-4Kas4Ka-4Kas!5e0!3m2!1sbn!2sbd!4v1564819972286!5m2!1sbn!2sbd" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<?php include"includes/arr.php";?>  
<?php include"includes/footer.php";?>  
