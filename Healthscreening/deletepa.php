<?php
   include("connect.php");
   
   $r = "DELETE FROM patient WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($con, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($con);
   }else{
	   echo "User deleted successfly";
   }
       
   
?>