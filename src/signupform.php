<html>
<body>
<?php
 session_start();

if (isset($_SESSION['MSG'])) {
	$msg=$_SESSION['MSG'];
	unset($_SESSION['MSG']);
	echo $msg;
	
}

echo '<form action="../src/signup.php" method="post">
User name   : <input type="text" name="username"><br>
Password    :<input type="password" name="password"><br>
email       :<input type="text" name="email" placeholder="Enter your email address"><br>
name        :<input type="text" name="name"><br>
phone number:<input type="text" name="phone_number"><br>
<input type="submit" value="submit">
</form>';
?>
</body>
</html>
