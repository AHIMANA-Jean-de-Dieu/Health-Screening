<?php
   include("connect.php");
?>
<?php
$username=$_POST["username"];
$password=$_POST["password"];

$query= "SELECT * FROM register where email= '".$username."'";
//echo $query;
 $result = mysqli_query($con, $query);
	   
		    while($row = mysqli_fetch_array($result)){
				if($row['password']==$password){
					echo "you are loged in as patient";
				}else{
					echo "try again";
			}
	   }
	   
?>