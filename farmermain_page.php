
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
?> 
<html>
	<head>
		<title>
			FARMER MAIN PAGE
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
        <li class="active"><a href="farmermain_page.php">HOME</a></li>
        <li><a href="feedback.php">FEEDBACK</a></li>
        <li><a href="myprofile.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero"><center><font size="7px" color="#F2E3E3">DEPARTMENT OF AGRICULTURE</font></center>
	                  <center><font size="6px" color="#F2E3E3">WELCOMES YOU!!</font></center>
	<div class="button">
     <a href="" class="btn btn-one" >PROPOSE PRICE</a>
     <a href="" class="btn btn-two">APPROVED CROPS</a>
     <a href="" class="btn btn-three">APPLY LOAN</a>
     <a href="" class="btn btn-four">TAKEN LOANS</a>
  </div>
</div>
	
	
</header>	
</body>
</html>