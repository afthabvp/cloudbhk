<?php
include ("../src/sample/database.php");
$db = new database();
$conn=$db->connect();
session_start();
 $user_id=$_SESSION['USER_ID'];
echo "<br>";
	echo "<br>properties<br>";
	$query=$conn->prepare("select name from db.`property` where owner_id=:user_id");
	$query->execute(array("user_id"=>$user_id));
	for($i=0;$i<$query->rowCount();$i++)
	{
	$user[$i] = $query->fetch();
	print_r($user[$i]['name']);
	
		$_SESSION['name']=$user[$i]['name'];

	echo "click here to open";
	echo '<a href="../src/openproperty.php">click</a>';
	echo"<br>";



}


?>
