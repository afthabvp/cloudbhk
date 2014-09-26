<html>
<body>

<?php
include ("../database/database.php");
$db = new database();
$conn=$db->connect();

 session_start();
if (isset($_SESSION['MSG'])) {
	$msg=$_SESSION['MSG'];
	unset($_SESSION['MSG']);
	echo $msg;
	
}
if (isset($_SESSION['USER_ID'])) {

	echo " logged in<br>";

	//welcome username
	$username=$_SESSION['USERNAME'];
	echo "welcome ".$username."<br>";
	$query=$conn->prepare("select * from db.`users` where username=:username");
	$query->execute(array("username"=>$username));

	$user = $query->fetch();
		print_r($user);
		echo "property mangement";
		echo '<a href="../src/propertymanager.php">click</a>';
	echo "<br>";
	echo "click here to logout";
	echo '<a href="../src/logout.php">click</a>;';
	        

}
else{
 echo '<form action="session.php" method="post">
        	User name: <input type="text" name="username"><br>
		Password:<input type="password" name="password"><br>
		<input type="submit" value="submit">
		</form>';
}
 ?>

</body>
</html>
