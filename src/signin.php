<?php	
include ("../database/database.php");
$username=$_POST["username"];
$password=$_POST["password"];
$db=new database();
$conn=$db->connect();
$query=$conn->prepare("select * from db.`users` where username=:username and password=:password");
$query->execute(array("username"=>$username,"password"=>$password));
if ($query->rowCount() == 0)
	echo "invalid login";
else
	echo "login success";





?>


