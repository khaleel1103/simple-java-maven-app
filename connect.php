<?php 
$username = "ram"; 
$password = "password"; 
$hostname = "ram.cxwjwxxsn6kz.ap-south-1.rds.amazonaws.com";
$dbname = "ram";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL"); 
echo "Connected to MySQL using username - $username, password - $password, host - $hostname,dbname - $dbname<br>"; 
$selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again."); 
?>





