<?php
class database {

	public function connect(){
		try {
			$username = "afthab";
			$password = "afthab";
		    $conn = new PDO('mysql:host=127.0.0.1', $username, $password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    return $conn;

		} catch(PDOException $e) {
	    	echo 'ERROR: ' . $e->getMessage();
		}
	}
}

/*
$db = new database();
$conn=$db->connect();

$query=$conn->prepare("CREATE TABLE afthab.`users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL default '',
  `password` varchar(128) NOT NULL default '',
  `email` varchar(250) NOT NULL default '',
  `active` binary(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;");
$query->execute();

*/

?>

