<!DOCTYPE html>
    <!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<?php
    if (isset($_POST['submit'])){

require_once('PHPmailer/PHPMailerAutoload.php');

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];



$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth='true';
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
//$mail->Host="smtp.hostinger.in";

$mail->Port='465';
$mail->isHTML();
$mail->Username="socialplayerdotin@gmail.com";
$mail->Password='natrajan807';
$mail->SetFrom('urvi@jopgroup.in');
$mail->AddReplyTo($email);
$mail->FromName=$name;
$mail->Subject="New Message from JOP Group Media Contact Form";
$email_content = "Name: $name <br>";
$email_content .= "Email: $email <br>";
$email_content .= "Subject: $subject <br>";
$email_content .= "Message: $message ";

$mail->Body=$email_content;
$mail->addAddress('njaiswal78@gmail.com');
$mail->addAddress('priyankasingh2993@gmail.com');
if(!$mail->Send())
{
   echo "Error sending: " . $mail->ErrorInfo;
}
else
{
    echo '<script>';
    echo 'alert("We got your request and we will reach you within 48 hours. ")';
    echo '</script>';
    echo "<p style='text-align:center;'>We got your request and we will reach you within 48 hours.</p>";
}
}
?>


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Contact US</title>
    <meta name='keywords' content='business, clean, twitter, bootstrap 3, responsive'>
    <meta name='description' content="Colores is a professional multipurpose template for any business, portfolio or blog website.">
    <meta name='author' content='#'>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >

    <!-- Mega menu -->
    <link rel="stylesheet" type="text/css" href="css/megamenu.css">
   
  
  
   <style>
	
	
	.speech-bubble {
	position: relative;
	background: #ffffff;
	border-radius: .4em;
}

.speech-bubble:after {
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	width: 0;
	height: 0;
	border: 20px solid transparent;
	border-bottom-color: #ffffff;
	border-top: 0;
	border-left: 0;
	margin-left: -10px;
	margin-top: -20px;
	
}



logo{

}
	
	.column {
  float: left;
  width: 33.33%;
  padding: 15px;
  height: 70px; /* Should be removed. Only for demonstration */
   transition: transform .2s;
}

.col 
{
  float: left;
  width: 50%;
  padding: 18px;
  font-family: Arial;
  padding-right: 10px;
  font-size: 16px;
  height: 70px; /* Should be removed. Only for demonstration */
   transition: transform .2s;
  
  
}

.col2 {
  float: left;
  width: 50%;
  padding-top: 2px;
  margin-bottom: 5px;
  padding-left: 30px;
  font-family: Lato;
  font-size: 18px;
  height: 80px; /* Should be removed. Only for demonstration */
  transition: transform .2s;
   
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


p.lowercase {
  text-transform: lowercase;
  color: #00d982;
}

text.capitalize {
  text-transform: capitalize;
}


.zoom {
  padding: 50px;
  background-color: green;
  transition: transform .2s ease-in-out;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.column:hover {
  -ms-transform: scale(1.3); /* IE 9 */
  -webkit-transform: scale(1.3); /* Safari 3-8 */
  transform: scale(1.3); 
  transform-color: #00de89;
}







	li:hover
	{
	background-color: #00de89;
	}
	
	.overlay 
	{
    position:absolute;
    font-family: Calibri;
	Font-size: 36px;
    top:220px;
    left:160px;
    z-index:1;
	}
	
	
	
	@media screen and (max-width:500px){
.overlay1{
margin-left:-20%;
margin-top:-15%;
}
.overlay p{
font-size:20px;
line-height:90%;
margin-top:0px;
text-align:left;
}
#box1{
width:100%
}
#box2{
width:100%;
}
}

@media screen and (min-width:501px){
.overlay{
margin-left:20%;
margin-top:5%;
}
#p1{
font-size:50px;
}
#p2{
font-size:20px;
}
#box1{
width:50%
}
#box2{
width:50%;
}
}




	
	
	
	</style>
   
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="css/colors/color1.css" id="colors">


    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
       <script src="javascript/html5shiv.js"></script>
       <script src="javascript/respond.min.js"></script>
    <![endif]-->
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</head>
<body>

<section class="loading-overlay">
    <div class="Loading-Page">
        <h2 class="loader">Loading...</h2>
    </div>
</section>
    

            <div class="middle-educationsls-nav py-2">
		           	<div class="container">
			        	<div class="row">
						<div class="col2">
				         	<div>
					           	<a href="Media/index.html"><img src="images/1.png" id="img2"></a>
					                   </div>
									   </div>
									   
									   <div class="col">
			<p style="margin-top:2px;font-weight: bold;color:#00a4b0; margin-left: 300px; border:0px solid black;padding-left:-5%; padding-bottom: 5px;">
			<a href="mailto:info@jopgroup.in" style="color: #00a4b0;">info@jopgroup.in</a></p>
			<div style="margin-top: -15px;">
			<p style="margin-top:2px;font-weight: bold;color:#00a4b0; margin-left: 300px; border:0px solid black;padding-left:-5%; padding-bottom: 5px;">  <a href="tel:011 47323166" style="color: #00a4b0;">011 47323166</a></p> 	</div>
			</div>
										
					<!-- <a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="index.html">LIFEMANTRA</a><br> -->
					
					
					</div>





				</div>
			</div>
		</div>



     <!-- /.flat-header-top -->
	 
	 
	 
	 
         <div class="flat-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-menu flat-left">
                            <div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
                            <div class="nav-wrap">                            
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu"> 
                                            <li>
                                               <td></td>              
                                            </li>
											<li>
                                               <td></td>              
                                            </li>
                                           <li><a href="index.html">About US</a></li>
                                            <li><a href="ourcontent.html">Our Content</a></li>
                                            <li class="parent"><a href="#">Our Channels</a>
                                                <ul class="submenu"> 
                                                    <li><a href="lifemantra.html"><font color="black">LIFEMANTRA</font></a>
                                                    </li>
                                                    <li><a href="hollywoodmasala.html"><font color="black">HollyWood Masala</font></a>
                                                    </li>
													<li><a href="hollywoodlocal.html"><font color="black">HollyWood Local</font></a>
                                                    </li>
                                                    <li><a href="fitness_studio.html"><font color="black">Fitness Studio</font></a>
                                                    </li>                                    
                                                </ul><!-- /.submenu -->
                                            </li>
                                            
                                            </li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="press_room.html">Press Room</a>
                                                
                                            </li>                        
                                        </ul><!-- /.menu -->
                                </nav><!-- /.mainnav -->  
                            </div><!-- /.nav-wrap -->
                        </div> <!-- /.flat-menu -->
                        
                        <div class="flat-header-socials flat-right" style="border:0px solid black;padding-right:5%;">
                            <ul>
                                 <li><a href="https://www.instagram.com/jop_network/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/14603769/admin/"><i class="fa fa-linkedin"></i></a></li>
                                
                            </ul>
                        </div> <!-- /.flat-header-socials -->
                    </div>
                </div>
            </div>
        </div> <!-- /.flat-header-bottom -->
    </header> 
  
  
  

  
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 25%%;
  padding: 10px;
  height: 300px; 

  /* Should be removed. Only for demonstration */
}
.column:hover{
  transform: scale(1.0);
}


</style>

<h2 style="margin-left: 12.5%;line-height: 120%;margin-top: 2%;font-weight: bold;font-size: 30px;">CONTACT US</h2>
<hr style="width: 50px;border: 2px solid green;margin-left: 12.5%;">
<div class="row" style="margin-left: 12.5%; margin-right: 12.5%;">
  <div class="column" style="background-color:white;text-align: center;  float: left; width: 25%%; padding: 10px; height: 300px; ">
    <img src="images/loc.png" width="30px" height="50px" style="margin-top: 20%"><br><br>
    <h2 style="color: grey;font-weight: bold;margin-top:0;">ADDRESS</h2>

    <p style="color: black;font-size: 15px;">32, 2nd Floor, NWA, Club Road, Punjabi Bagh West, New Delhi-110026</p>
  </div>
  <div class="column" style="background-color:white;text-align: center; border-left: 1px solid grey; float: left; width: 25%%; padding: 10px; height: 300px;">
    <img src="images/phone.png" width="30px" height="50px" style="margin-top: 20%"><br><br>
    <h2 style="color: grey;font-weight: bold;margin-top:0;">PHONE NUMBER</h2>

    <p style="color: black;font-size: 15px;"> <a href="tel:011 47323166" style="color: #000;">011 47323166</a></p>
  </div>
  <div class="column" style="background-color:white;text-align: center;border-left: 1px solid grey;float: left; width: 25%%; padding: 10px; height: 300px; ">
    <img src="images/email.png" width="30px" height="50px" style="margin-top: 20%"><br><br>
    <h2 style="color: grey;font-weight: bold;margin-top:0;">EMAIL</h2>

    <p style="color: black;font-size: 15px;"><a href="mailto: info@jopgroup.in" style="color: #000;">info@jopgroup.in</a></p>
  </div>
  </div>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" role="form" class="contactForm" style="margin-left: 10%;margin-right: 12.5%;margin-top: 5%">
            <div class="form-row" style="margin-left: -1%;margin-right: -1%">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" style="background-color: #00a4b0;margin: 2%;border-radius: 5px;" name="submit">Send Message</button></div>
          </form>


<!-- /.flat-bottom -->
        <div class="flat-bottom">
            <div class="container">
                <div class="row">
                   

                   <div class="col-md-6">
                        <div class="flat-cash flat-right">
                            <a href="index.html"><font color="black">About JOP GROUP</font></a> &nbsp &nbsp <font color="white">|</font>
                            <a href="ourcontent.html"><font color="black">Our Content</font></a>&nbsp &nbsp <font color="white">|</font>
                            <a href="press_room.html"><font color="black">Press Room</font></a>&nbsp &nbsp <font color="white">|</font>
                            <a href="contact.php"><font color="black">ContactUs</font></a> &nbsp &nbsp <font color="white">|</font>
                        </div> <!-- /.flat-cash -->
                    </div>
					
					 <div class="col-md-5">
                        <div class="flat-copyright flat-left">© Copyright <a href="#">JOP</a> 2019. All Rights Reserved.</div> <!-- /.flat-copyright -->
                    </div>
					
                </div>
            </div>  
        </div> <!-- /.flat-bottom -->

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>  
        </a>  







</div><!-- /.boxed -->

    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/jquery-waypoints.js"></script>    
    <script type="text/javascript" src="js/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>

</body>
</html>