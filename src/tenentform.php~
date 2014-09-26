<html>
<body>
<?php
include ("../sample/database.php");
$db = new database();
$conn=$db->connect();

 session_start();
if (isset($_SESSION['MSG'])) {
	$msg=$_SESSION['MSG'];
	unset($_SESSION['MSG']);
	echo $msg;
	
}

echo '<form action="../src/new.php" method="post">
enter the tenent details<br>
name		  : <input type="text" name="name"><br>
email    	  :<input type="text" name="email"placeholder="example@example.com"><br>
Date of birth     :<input type="date" name="dob"><br>
Permanent address :<input type="text" name="address"><br>
city              :<input type="text" name="city"><br>
state             :<input type="text" name="state"><br>
pincode           :<input type="text" name="pincode"><br>
Phone	          :<input type="text" name="phone"><br>
Property_id	  :<input type="text" name="p_id"><br>
Room number 	  :<input type="text" name="roomno"><br>
Occupancy date    :<input type="date" name="occupancy_date"><br>
Security deposit  :<input type="text" name="deposit"><br>
<input type="submit" value="submit">
</form>';
?>
</body>
</html>


  

