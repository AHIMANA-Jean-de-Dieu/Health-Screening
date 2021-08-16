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
					//echo "done";
		 ?>
		     <html>
<head><title>Doctors</title>
<style>
ul {
    list-style-type: none;

    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#ffffff;
}
li {
    float: right;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}

</style>
</head>
<body style="background-image:url('d1.jpg')">
<ul>
   <li> <a class="active" href="deletepa.php"><font size="" color="#006633">Delete</font></a></li>
   <li> <a href=""><font size="" color="#006633">Update</font></a></li>
    <li><a href="#"><font size="" color="#006633">View Patient's record</font></a></li>
  </ul>
</body>
</html>

		   <?php
				}else{
					echo "try again";
			}
	   }
	   
?>