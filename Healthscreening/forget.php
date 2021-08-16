<?php
   include("connect.php");
?>
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];

$query= "SELECT * FROM register where email= '".$email."'";
//echo $query;
 $result = mysqli_query($con, $query);
	   if($result==true){
		    while($row = mysqli_fetch_array($result)){
				$update="UPDATE register SET password='".$password."',confirm='".$confirm."' where email='".$email."'";

				//echo $update;
				$resultt = mysqli_query($con, $update);
			}
	   }else{
		   echo "sorry";
	   }
	   
?>