<?php 
$dsn = 'mysql:host=localhost;dbname=mntk';
$user ='root';
$pssword ='01124711700';
$option = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	
);
try {
	$con = new PDO($dsn,$user,$pssword,$option);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo 'Field To Connect' . $e->getMessage();
}

?>