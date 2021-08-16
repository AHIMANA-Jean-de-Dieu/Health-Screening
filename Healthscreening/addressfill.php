<?php
   include("connect.php");
?>
<?php
if(isset($_GET['submit'])){
$street=$_REQUEST['streetaddress'];
$streetl2=$_REQUEST['streetl2'];
$city=$_REQUEST['city'];
$province=$_REQUEST['province'];
$areacode=$_REQUEST['areacode'];
$emphone=$_REQUEST['emphone'];


$query=("INSERT INTO address(id,street_address,street_address_line2,city,province,areacode,em_phone)
VALUES('','$streetaddress','$streetl2','$city','$province','$areacode','$emphone')");
//echo $query;
	   $result = mysqli_query($con, $query);
	   if(!$result){
		   echo "Not processed! ".mysqli_error($con);
	   }else{
		   echo "Registration is done!";
	   }
}

?>