




<html>
	<head>
	   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			PROCESSED
		</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	
    </head>
<body>		
	<img src="image1.png" width=100%  height=100 alt="Lion Image"/>
	<br/><br/>
	<div class="container" >
	<table width="100%"><tr><td align="left">
	<a href="dep101main_page.php">HOME</a></td>
	<td align="right">
	<a href="log_out.php">LOGOUT</a></td></table>
	</div>
	<br/>
	<div><center><h1>CROP DECISION MAKING DEPARTMENT</h1></center>
	<br/>
	<table align="center" width="50%">
		
		
		
		<?php 
		error_reporting(E_ALL ^ E_DEPRECATED);
		//Start the session to see if the user is authenticated user. 
		if(!isset($_SESSION['USER_ID']))session_start(); 
		//Check if the user is authenticated first. Or else redirect to login page 
		//Check if the user is authenticated first. Or else redirect to login page 
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
			
		} 
		else{ 
			include('location:login_form.php'); 
		exit(); 
		} 

		$link = mysql_connect("localhost", "root", ''); 
	
		$db = mysql_select_db('project'); 

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result = mysql_query("SELECT e_name,f_id,c_name,f_proposal,finalprice FROM employee,cropdecisionmaking WHERE employee.emp_id = cropdecisionmaking.emp_id ;" ); 
		
		
		

		$count = mysql_num_rows($result);


	
		if( $count != 0 ){
			
		echo '<tr>
		<th>Employee processed</th>
		<th >FARMER ID</th>
	    <th >CROP NAME</th>
	    <th >FARMER PROPOSAL</th>
		<th >FINAL PRICE</th>
		</tr>';
		
		while($m = mysql_fetch_array($result)) {
		echo '<tr>
			<td>'.$m['e_name'].'</td>
			<td>'.$m['f_id'].'</td>
			<td>'.$m['c_name'].'</td>
			<td>'.$m['f_proposal'].'</td>
			<td>'.$m['finalprice'].'</td>
		</tr>';
		}
		
		}
	
	
		else{
			
			echo '<div style="padding:50px;"><center>NO RECORD FOUND</center></div>';
		
		}
		
		?>
		
		
	</table>
	
	
	
</body>
</html>

