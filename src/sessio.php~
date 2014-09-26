<?php
 include ("sample/database.php");
//function login($username, $password)
$db=new database();
$conn=$db->connect();
		$query =$conn->prepare("SELECT * FROM db.`users` WHERE password = :$password AND username = :$username");
		$query->execute(array("username"=>$username,"password"=>$password));
		// If there are no matches then the username and password do not match
		if($query->rowCount() == 0) 
		{
			echo error;
			return false;
		}
		else
		{
			while($u = array($query))
			{ 
                session_regenerate_id(true);
                $session_id = $u[id];
                $session_username = $username;
//                $session_level = $u[user_level];
 
                $_SESSION['user_id'] = $session_id;
  //              $_SESSION['user_level'] = $session_level;
                $_SESSION['user_name'] = $session_username;
                $_SESSION['user_lastactive'] = time();
				return true;
			}
		}
 
?>
