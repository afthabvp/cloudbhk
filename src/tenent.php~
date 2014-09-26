<?php
include ("../sample/database.php");
$db = new database();
$conn=$db->connect();

$name=$_POST["name"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];
$phone=$_POST["phone"];
$p_id=$_POST["p_id"];
$roomno=$_POST["roomno"];
$occupancy_date=$_POST["occupancy_date"];
$deposit=$_POST["deposit"];



if(empty($name)){				//check the each values
	$msg= "name is empty ";
	$_SESSION['MSG'] =$msg;			//for echo ing the warning message
	header('Location: ../src/tenentform.php');
	exit();
}

if(empty($email)){
	$msg= "email is empty";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/tenentform.php');
	exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {		//validating the email
	$msg= "enter valid Email";				//......@....com
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/tenentform.php');
	exit();

}


if(empty($dob)){
	$msg= "please enter date of birth";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/tenentform.php');
	exit();
}

if(empty($address)){
	$msg ="address is empty";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/tenentform.php');
	exit();
}
if(empty($city))
{
	$msg ="city is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/tenentform.php');
	exit();
}
if(empty($state))
{
	$msg ="state is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/tenentform.php');
	exit();
}
if(empty($pincode))
{
	$msg ="pincode is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/tenentform.php');
	exit();
}


if(empty($phone)){
	$msg ="phone is empty";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/tenentform.php');
	exit();
}
if(empty($p_id))
{
	$msg ="property_id  is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/tenentform.php');
	exit();
}
if(empty($roomno))
{
	$msg ="roomno is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/tenentform.php');
	exit();
}
if(empty($occupancy_date))
{
	$msg ="enter occupancy date";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/tenentform.php');
	exit();
}
if(empty($deposit))
{
	$msg ="enter deposit";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/tenentform.php');
	exit();
}
$query=$conn->prepare("insert into db.`tenent` (name,email,dob,dob,address,city,state,pincode,phone,p_id,roomno,occupancy_date,deposit) values (:id,:name,:email,:dob,:address,:city,:state,:pincode,:phone,:p_id,:roomno,:occupancy_date,:deposit)");	   

$query->execute(array("name"=>$name,"email"=>$email,"dob"=>$dob,"address"=>$address,"city"=>$city,"state"=>$state,"pincode"=>$pincode,"phone"=>$phone,"p_id"=>$p_id,"roomno"=>$roomno,"occupancy_date"=>$occupancy_date,"deposit"=>$deposit));

	echo "tenent is added";
	$query=$conn->prepare("select * from db.`tenent` where name=:name");//preparing for access
	$query->execute(array("name"=>$name));					//access or execute

	$user = $query->fetch();
	print_r($user);
	session_start();
	$_SESSION['T_ID']=$user['id'];



?>
