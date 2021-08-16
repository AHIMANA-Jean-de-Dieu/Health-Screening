<?php
   include("connect.php");
   
   $r = "SELECT * FROM patient WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($con, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "patient id: ".$d["id"]."<br/>";
	   echo "patient fname: ".$d["fname"]."<br/>";
	   echo "patient lname: ".$d["lname"]."<br/>";
   }
   
?>