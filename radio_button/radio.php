<?php  
$con = mysql_connect("localhost","root","");  
mysql_select_db("ABC", $con);  
@$a=$_POST['name'];  
@$b=$_POST['sex'];  
if(@$_POST['submit'])  
{  
echo $s="insert into employee(name,sex) values('$a','$b')";  
echo "Your Data Inserted";  
mysql_query($s);  
}  
?>   
<html>  
<body bgcolor="pink">  
<center>  
<form method="post">  
<table border="1" bgcolor="#00CCFF">  
<tr><td>Name</td>  
<td><input type="text" name="name"/></td>  
</tr>  
<tr><td rowspan="2">Sex</td>  
<td><input type="radio" name="sex" value="Male"/>Male</td>  
<tr>  
<td><input type="radio" name="sex" value="Female"/>Female</td></tr>  
</tr>  
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>  
</table>  
</form>  
</center>  
</body>  
</html> 