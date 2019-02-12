

<?php 
//Start the session to see if the user is authenticated user. 
session_start();
?> 


<html>
	<head>
	   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			FINANCIAL HELP DEPARTMEMT
		</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	
    </head>
<body>		
	<img src="image1.png" width=100%  height=100 alt="Lion Image"/>
	<br/><br/>
	<div class="container" >
	<table width="100%"><tr><td align="left">
	<a href="emp102main_page.html">HOME</a></td>
	<td align="right">
	<a href="login_form.html">LOGOUT</a></td></table>
	</div>
	<br/>
	<br/>
	<br/>
	<div><center><h1>FINANCIAL HELP DEPARTMENT</h1></center>
	<br/>
	<table align="center" width="25%">
	<th><td align="left"><button type="submit" class="btn btn-primary btn-lg" name="submit" value="PENDING">PENDING</button></td>
	    <td align="right"><button type="submit" class="btn btn-primary btn-lg" name="submit" value="PROCESSED">PROCESSED</button></td>
	    <td align="left"><button type="submit" class="btn btn-primary btn-lg" name="submit" value="FARMERDETAILS">FARMER DETAILS</button></td>
	    <td align="right"><button type="submit" class="btn btn-primary btn-lg" name="submit" value="LOANDETAILS">LOAN DETAILS</button></td></th>	
	</table>
	
	
</body>