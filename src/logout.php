<?php
session_start();

if(isset($_SESSION['USER_ID'])){

    unset($_SESSION['USER_ID']); 
    echo "you are successfully logout";
echo '<form action="../src/session.php" method="post">
        	User name: <input type="text" name="username"><br>
		Password:<input type="password" name="password"><br>
		<input type="submit" value="submit">
		</form>';
}

?>
