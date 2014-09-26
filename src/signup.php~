<html> 
<?php

include ("../sample/database.php");

$username= $_POST['username'];			//get the values from front end
$password= $_POST['password'];
$email = $_POST['email'];
$name= $_POST['name'];
$phone_number= $_POST['phone_number'];
 

session_start();				//session for redirect the signup page

if(empty($username)){				//check the each values
	$msg= "user name is empty ";
	$_SESSION['MSG'] =$msg;			//for echo ing the warning message
	header('Location:../src/signupform.php');
	exit(); 
}
if(empty($password)){ 
	$msg= "password is emty";
	$_SESSION['MSG'] =$msg;	
	header('Location:../src/signupform.php');
	exit();
}
if(empty($email)){
	$msg= "email is empty";
	$_SESSION['MSG'] =$msg;
	header('Location:../src/signupform.php');
	exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {		//validating the email
	$msg= "enter valid Email";				//......@....com
	$_SESSION['MSG'] =$msg;
	header('Location:../src/signupform.php');
	exit();

}
if(empty($name)){
	$msg ="name is empty";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/signupform.php');
	exit();
}
if(empty($phone_number))
{
	$msg ="phone_number is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/signupform.php');
	exit();
}


$db=new database();						//creating the object for database
$conn=$db->connect();						//connect data base.. using database class

echo $username;
echo $email;
echo $name;
echo $phone_number;
$query=$conn->prepare("select * from db.`users` where username=:username");//preparing for access
$query->execute(array("username"=>$username));					//access or execute
if ($query->rowCount() > 0){					//check existance of each

	$msg ="username already exists";
 	$_SESSION['MSG'] =$msg;
	header('Location: ../src/signupform.php');
	exit();
}
$query=$conn->prepare("select * from db.`users` where email=:email");
$query->execute(array("email"=>$email));
if ($query->rowCount() >0){
	$msg= "email already exist";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/signupform.php');
	exit();
}

$query=$conn->prepare("select * from db.`users` where phone_number=:phone_number");
$query->execute(array("phone_number"=>$phone_number));
if ($query->rowCount() >0){
	$msg= "phone_number already exist";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/signupform.php');
	exit();
}
	
$query=$conn->prepare("insert into db.`users` (username,password,email,name,phone_number) values (:username,:password,:email,:name,:phone_number)");	   

$query->execute(array("username" => $username,"password" => $password,"email" => $email,"name"=>$name,"phone_number"=>$phone_number));//insert in to database

	echo "click sign to login".'<a href="../src/signinform.php">sign_in</a>;';// refer to sign in page
?>	
</html>
