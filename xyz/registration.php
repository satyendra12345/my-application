<?php
  
  
  if(isset($_POST['submit']))
{
   // $female= htmlentities(trim($_POST['female']),ENT_NOQUOTES);
    $male= htmlentities(trim($_POST['male']),ENT_NOQUOTES);
	$fname= htmlentities(trim($_POST['fname']),ENT_NOQUOTES);
	$lname= htmlentities(trim($_POST['lname']),ENT_NOQUOTES);
	$EMAIL= htmlentities(trim($_POST['EMAIL']),ENT_NOQUOTES);
	$MSISDN= htmlentities(trim($_POST['MSISDN']),ENT_NOQUOTES);
	$city= htmlentities(trim($_POST['city']),ENT_NOQUOTES);
	$state= htmlentities(trim($_POST['state']),ENT_NOQUOTES);
	$zipcode= htmlentities(trim($_POST['zipcode']),ENT_NOQUOTES);
	$message= htmlentities(trim($_POST['message']),ENT_NOQUOTES);
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Site Title -->
	<title>Registration | Miss & Mrs International India 2019</title>

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
	<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
   
	

</head>
	
<body>

	<div class="body-inner">

	<!-- Header start -->
        <header id="header" class="header header-transparent">
            <div class="container">
               <div class="row">
                  <div class="navbar-header">
                     <div class="logo">
                        <a href="index.html">
                        <img src="images/logo.png" alt="logo" height="100px" witdth="100px">
                        </a>
                     </div>
                     
                     <!-- logo end -->
                  </div>
                  <!-- Navbar header end -->
                  <div class="site-nav-inner">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <nav class="collapse navbar-collapse navbar-responsive-collapse pull-right">
                        <ul class="nav navbar-nav">
                           <li><a href="index.php">Home</a></li>
                           <!-- Home li end -->
                           
                           <li class="header-ticket">
                              <a class="ticket-btn btn-primary" href="https://msmrsinternationalindia.com/ticket.php" target="_blank"><i class="fa fa-ticket"></i>Ticket</a>
                           </li>
                        </ul>
                        <!--/ Nav ul end -->
                     </nav>
                     <!--/ Collapse end -->
                  </div>
                  <!--/ Site nav inner end -->
               </div>
               <!--/ Row end -->
            </div>
            <!--/ Container end -->
         </header>
        
	<!--/ Header end  payment/PaytmKit/pgRedirect.php-->
	
	 

	<section class="venu-map no-padding">
	    
            <div class="container-fluid pd-top">
              <div class="row text-center">
                  <div class="col-md-12">
                     <div class="bottom-contact">
                         
                        <h3>Registration</h3>
                         <form class="contact-form-bottom" action="newinsert.php" method="post">
                           <div class="error-container"></div>
                           <div class="row">
                               <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-1 col-xs-6">
                                    <label class="container">Miss
                                        <input type="radio" name="male" value="Miss" required>
                                        <span class="checkmark"></span>
                                    </label>
                                   </div>
                                   <div class="col-md-1 col-xs-6">
                                    <label class="container">Mr
                                        <input type="radio" name="male" value="Mr" required>
                                        <span class="checkmark"></span>
                                    </label>
                                   </div>
                                    <div class="col-md-1 col-xs-6">
                                    <label class="container">Mrs
                                        <input type="radio" name="male" value="Mrs" required>
                                        <span class="checkmark"></span>
                                    </label>
                                   </div>
                                 </div>
                              </div>
                               
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input class="form-control form-control-name" placeholder="Full Name" name="fname" id="name" type="text" required>
                                 </div>
                              </div>
                             
                              <div class="col-md-6">
                                 <div class="form-group">
                                     
                                     
                                <input class="form-control form-control-subject" placeholder="Email" name="EMAIL" required type="email">
                                 </div>
                              </div>
                               
                               <div class="col-md-6">
                                 <div class="form-group">
                                    <input class="form-control form-control-subject" placeholder="Contact" name="MSISDN" required pattern="[6789][0-9]{9}">
                                 </div>
                              </div>
                               
                               <div class="col-md-6">
                                 <div class="form-group">
                                    <input class="form-control form-control-subject" placeholder="City" name="city" required>
                                 </div>
                              </div>
                               
                              
                           </div>
                           <div class="form-group">
                              <textarea class="form-control form-control-message" name="message" placeholder="About Yourself" rows="8" required></textarea>
                           </div>
                           <div class="text-right"><br>
                              <button class="btn btn-primary btn-full" name="submit" type="submit"><i class="fa fa-paper-plane-o"></i> REGISTER</button> 
                           </div>
                           
                         <!--  
                           <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"  name="ORDER_ID" autocomplete="off"	value="">
                             <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
                            <input type="hidden"  id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                            <input type="hidden"  id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                           <input  type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT"	value="4000">-->
                           
                           
                        </form>
                        <!-- Contact form end -->
                     </div>
                     <!-- Contact form div end -->
                  </div>
                  <!-- Col end -->
                  
               </div>
                
               <!-- Content row end -->
            </div>
            <!-- Container end -->
         </section>
        


	<footer id="footer" class="footer text-center">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     
                     <!-- Footer menu end -->
                    
                  </div>
                  <!-- Content col end -->
               </div>
               <!-- Content row end -->
            </div>
            <!-- Container end -->
            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
               <button class="btn btn-primary" title="Back to Top">
               <i class="fa fa-angle-up"></i>
               </button>
            </div>
         </footer>
	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Google Map API Key-->
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
	<!-- Google Map Plugin-->
	<script type="text/javascript" src="js/gmap3.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>
</html>