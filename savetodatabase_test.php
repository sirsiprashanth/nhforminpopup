<?php  
$name=$_POST['name'];  
mysql_connect("http://newhorizonindia.edu", "newhokhk_popup", "*GMoJfkT;FAF") or die(mysql_error());  
mysql_select_db("newhokhk_popup") or die(mysql_error());  
mysql_query("INSERT INTO `data` VALUES ('$name')");  
Print "Your information has been successfully added to the database.";  
?>