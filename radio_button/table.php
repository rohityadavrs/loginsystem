<?php  
$con = mysql_connect ("localhost","root","");  
if (!$con)  
  {  
  die ('Could not connect: ' . mysql_error());  
  }  
mysql_select_db ("ABC", $con);  
$sql = "CREATE TABLE employee  
(  
name VARCHAR( 50 ) ,  
sex VARCHAR( 50 ) ,  
)";  
mysql_query($sql,$con);  
echo "Your Table Created !!";  
mysql_close($con);  
?> 