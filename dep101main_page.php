
<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 


} 
else{ 
include('location:login_form.php'); 
exit(); 
} 

echo '
<html>
	<head>
		<title>
			CROPDM
		</title>
		
		<link href="style.css" rel="stylesheet" type="text/css">
	
    </head>
<body>		
<header>	
	<div class="row" >
        <div class="logo">
        <img src="lions.png">
        </div>
	<ul class="main-nav">
        <li class="active"><a href="dep101main_page.php">HOME</a></li>
        <li><a href="myprofile.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero"><center><font size="7px" color="#F2E3E3">CROP DECISION MAKING DEPARTMENT</font></center>
	<div class="button">
     <a href="pendingcrop_price.php" class="btn btn-one" >PENDING</a>
     <a href="processedcrop_price.php" class="btn btn-two">PROCESSED</a>
     <a href="farmer_details.php" class="btn btn-three">FARMER DETAILS</a>
     <a href="crop_details.php" class="btn btn-four">CROP DETAILS</a>
  </div>
</div>
	
	
</header>	
</body>
</html>';

?>