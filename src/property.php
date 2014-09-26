<?php
include ("../sample/database.php");
$db = new database();
$conn=$db->connect();

$name=$_POST["name"];
$type=$_POST["type"];
$max_floor=$_POST["max_floor"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];
$conditions=$_POST["conditions"];
session_start();				//session for redirect the signup page
$owner_id=$_SESSION['USER_ID'];

if(empty($name)){				//check the each values
	$msg= "name is empty ";
	$_SESSION['MSG'] =$msg;			//for echo ing the warning message
	header('Location: ../src/propertyform.php');
	exit(); 
}


if(empty($type)){ 
	$msg= "type is emty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/propertyform.php');
	exit();
}
if(!($type=="PG"||$type=="FLAT"||$type=="APPARTMENT"||$type=="HOUSE"))
{
	$msg= "enter valid type";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/propertyform.php');
	exit();
}

if(empty($max_floor)){
	$msg= "number of floor field is empty";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/propertyform.php');
	exit();
}

if(empty($address)){
	$msg ="address is empty";
	$_SESSION['MSG'] =$msg;
	header('Location: ../src/propertyform.php');
	exit();
}
if(empty($city))
{
	$msg ="city is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/propertyform.php');
	exit();
}
if(empty($state))
{
	$msg ="state is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/propertyform.php');
	exit();
}
if(empty($pincode))
{
	$msg ="pincode is empty";
	$_SESSION['MSG'] =$msg;	
	header('Location: ../src/propertyform.php');
	exit();
}



/*$query=$conn->prepare("select * from db.`property` where name=:name ");//preparing for access
$query->execute(array("name"=>$name));					//access or execute
if ($query->rowCount() > 0){					//check existance of each

	$msg ="name already exists";
 	$_SESSION['MSG'] =$msg;
	header('Location: ../src/propertyform.php');
	exit();
}
*/
$query=$conn->prepare("insert into db.`property` (name,type,max_floor,address,city,state,pincode,conditions,owner_id) values (:name,:type,:max_floor,:address,:city,:state,:pincode,:conditions,:owner_id)");	   

$query->execute(array("name" => $name, "type" => $type,"max_floor" => $max_floor, "address" => $address, "city" => $city, "state" => $state, "pincode" => $pincode, "conditions" => $conditions,"owner_id" => $owner_id));//insert in to database

	echo "property is added";
	$query=$conn->prepare("select * from db.`property` where name=:name");//preparing for access
	$query->execute(array("name"=>$name));					//access or execute

	$user = $query->fetch();
	print_r($user);
	$_SESSION['P_ID']=$user['id'];

	echo "view the properties";
	echo '<a href="../src
/propertylist.php">click</a>';
	echo"<br>";


?>
