<?php
include ("../sample/database.php");
$db = new database();
$conn=$db->connect();

 session_start();
	$name=$_SESSION['name'];
	$query=$conn->prepare("select * from db.`property` where name=:name");//preparing for access
	$query->execute(array("name"=>$name));					//access or execu
	$user = $query->fetch();
	print_r($user);	 		


?>
