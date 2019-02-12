// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
//$validationFlag = true; 
//Check all the required fields are filled 
<?php
if($_POST['signup'] == 'SIGN UP')

if(!($_POST['customer_name']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$customer_name = $_POST['customer_name']; 
$customer_city = $_POST['customer_city']; 
$customer_street = $_POST['customer_street']; 
}


//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysql_connect('dbms.iiitdmj.ac.in', '2016152', 'c9ce98a3'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('2016152'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO customer (customer_name, customer_street, customer_city) VALUES ('$customer_name','$customer_city','$customer_street')"; 
//Execute query 
$results = mysql_query($query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'Data inserted successfully! '; 
} 
} 