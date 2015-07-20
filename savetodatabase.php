<?php  
$name=$_POST['name'];  
$email=$_POST['email'];  
$location=$_POST['location'];  
mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error());  
mysql_select_db("Database_Name") or die(mysql_error());  
mysql_query("INSERT INTO `data` VALUES ('$name', '$email', '$location')");  
Print "Your information has been successfully added to the database.";  
?>