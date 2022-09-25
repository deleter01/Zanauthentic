<?php
	include 'include/header.php';
	
	require_once('include/conn.php');
	session_start();
	error_reporting(0);
	
?>

<!-- Header Start -->
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
</style>
<div class="page-header">
<main class="content">
            <!-- <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px"> -->
			<div class="slider">
					<ul class="slides">
						<li data-background="images/bluesfr.jpg" style="height: 300px">
							<div class="container">
                            <div class="d-flex flex-column align-items-center justify-content-center text-white" style="min-height: 300px">
									<h1>Contact</h1>
                            </div>
							</div>
						</li>
					</ul>
					
				</div>
            </div>
        </div>
    </div>

    <!-- Header End -->	

			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4 wow fadeInLeft">
								<h4>ZANAUTHENTIC</h4>
								<ul class="list-fa">
									<li><i class="fa fa-map-marker"></i> Pete Zanzibar Tanzania, TZ</li>
									<li><i class="fa fa-phone"></i>Tel:+2556579192024</a></li>
									<li><i class="fa fa-envelope"></i>zanauthentic@gmail.com</a></li>
								</ul>

								<form class="contact-form" name = "contact" action = contact.php method="post">

		 						<?php 
								 if(isset($conn,$_POST['submit'])){
									$name = mysqli_real_escape_string($conn,$_POST['name']);
									$email = mysqli_real_escape_string($conn,$_POST['email']);
									$message = mysqli_real_escape_string($conn,$_POST['message']);
									$subject = mysqli_real_escape_string($conn,$_POST['subject']);
							
									$query = "INSERT INTO contact(Name,Email,Subject,Message)VALUES('$name','$email','$subject','$message')";
									$results = mysqli_query($conn,$query);
									
										if($results == 1)
										{ ?>
											<div class="succWrap"><strong>SUCCESS</strong>:<?php echo " Successfully Submited "; ?> </div>
									<?php	}
										else 
										{ ?>
											<div class="errorWrap shake"><strong>ERROR</strong>:<?php echo " Something went wrong. Please try again"; ?> </div>
									<?php	}
								}
								?>
									<input type="text" placeholder="Your Name" name = "name" id="name" required>
									<input type="email" placeholder="Email" name = "email" id="email" required>
									<input type="text" placeholder="Subject" name = "subject" id="subject">
									<textarea name="message" id="message" placeholder="Message..." required></textarea>
									<input type="submit" class="button" value="Equiry" name = "submit">
								</form>
							</div>
							<div class="col-md-7 col-md-push-1 wow fadeInRight">
								<div class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3029.2188753874375!2d-73.9617075!3d40.6029943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c244f289a17b03%3A0x5108f35e55b5aa3c!2s983+Avenue+S%2C+Brooklyn%2C+NY+11223%2C+Amerika+Serikat!5e0!3m2!1sid!2sid!4v1411068708925" width="600" height="520" frameborder="0" style="border:0"></iframe>
								</div>
							</div>
							
						</div>

					</div>

				</div>

				
			</main> <!-- .content -->


<?php
	include 'include/footer.php';
?>