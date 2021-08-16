<?php
 $server ="127.0.0.1";
$con =mysqli_connect($server,'root','','Health_screening');
if($con->connect_error){
	die('connection failed:'.$con->connect_error);
}
//echo "done";
?>