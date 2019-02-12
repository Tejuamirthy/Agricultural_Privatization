<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 

<html>
<head>
<title>
SIGNUP
</title>
<style type="text/css">

</style>
</head>
<body><fieldset class="fs1">
		<div><center><font size=5>SIGN UP</font></center>
		</div>
		<br />
		<table>
		<form action="edit_farmer.php" method="post"> 
		<tr><td> <label for="Name">NAME*</label> </td>
            <td> <input type="text" name="Firstname" placeholder="First" ></td>
            <td> <input type="text" name="lastname" placeholder="Last"></td></tr>
		<tr><td> <label for="userid">USER_ID*</label></td>
            <td> <input type="text" name="userid"></td></tr>
		<tr><td> <label for="password">PASSWORD*</label></td>
            <td> <input type="password" name="password"></td></tr>
		<tr><td> <label for="sex">SEX</label> </td>
                 <td> <select name="select"> 
                 <option value="M">Male</option> 
                 <option value="F">Female</option>  
                 <option value="O">Others</option>  </select> </td></tr>
		<tr><td> <label for="Date of birth">DATEOFBIRTH</label></td>
            <td> <input type="date" name="Date of birth" placeholder="MM/DD/YYYY"></td></tr>
		<tr><td> <label for="address">ADDRESS</label></td>
             <td> <input type="text" name="address"></td></tr>	
			 <td></td><td> <input type="text" name="address1"></td></tr>
             <td></td><td> <input type="text" name="address"></td></tr>
		<tr><td> <label for="integer">PINCODE*</label></td>
            <td> <input type="integer" name="pincode"></td></tr>	 
        </table>
		<center>
        <input type="submit" name="signup" value="SIGN UP">
        </center>			 
		</fieldset>
		</body>
		</html>
		