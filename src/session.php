<?php
include ("sample/database.php");
$db = new database();
$conn=$db->connect();


$username=$_POST["username"];
$password=$_POST["password"];

session_start();
if(empty($username)){				//check the each values
	$msg= "user name is empty ";
	$_SESSION['MSG'] =$msg;			//for echo ing the warning message
	header('Location: ../src/signinform.php');
	exit(); 
}
if(empty($password)){ 
	$msg= "password is emty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/signinform.php');
	exit();
}
		$query=$conn->prepare("select * from db.`users` where username=:username and password=:password");
		$query->execute(array("username"=>$username,"password"=>$password));
									// If there are no matches then the username and password do not match
		if($query->rowCount() == 0) 
		{
			$msg= "login error";
			$_SESSION['MSG'] =$msg;			//for echo ing the warning message	
			header('Location: ../src/signinform.php');
			exit();
		}   
		else
		{
		echo "login success <br>";
		echo "welcome ".$username."<br>";
		$user = $query->fetch();
			print_r($user);
		$_SESSION['USER_ID']= $user['id'];
		$_SESSION['USERNAME']=$username;
		
			echo "property mangement";
		echo '<a href="../src/propertymanager.php">click</a>';
		echo "<br>";
	
		echo "click here to logout";
		echo '<a href="../src/logout.php">click</a>';

		
		}
  
?>
