<?php  
$con = mysqli_connect("localhost","root","");  
if (!$con)  
  {  
  die('Could not connect: ' . mysql_error());  
  }   
if (mysqli_query("CREATE DATABASE ABC",$con))  
  {  
  echo "Your Database created !!";  
  }  
else  
  {  
  echo "Error creating database: " . mysqli_error();  
  }  
mysqli_close($con);  
?>  