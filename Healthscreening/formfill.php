<?php
   include("connect.php");
?>
<?php
if(isset($_GET['submit'])){
$Firstname= $_REQUEST['fname'];
$Lastname= $_REQUEST['lname'];
$mobile= $_REQUEST['mobile'];
$Email= $_REQUEST['email'];
$birthday= $_REQUEST['birthday'];
$height= $_REQUEST['height'];
$weight= $_REQUEST['weight'];
$sex= $_REQUEST['sex'];
$active= $_REQUEST['dailybasis'];
$pregnant= $_REQUEST['pregnant'];
$medical= $_REQUEST['medicalhistory'];
$hadsurgeryt= $_REQUEST['hadsurgery'];
$suffer= $_REQUEST['backpain'];
$injury= $_REQUEST['injury'];
$anytake= $_REQUEST['anytake'];
$bestshape= $_REQUEST['bestshape'];
$rateus= $_REQUEST['rateus'];
$nutritional= $_REQUEST['nutrition'];
$agreement= $_REQUEST['agreement'];

$query=("INSERT INTO patient(id,Fname,Lname,mobile,email,date_of_birth,height,weight,sex,active_on_daily_basis,pregnant,medical_history,had_surgery,suffer_from_back_pain,have_any_injuries,any_take,when_where_in_best_shape,rate_us,nutritional_habbits,aggreement)
VALUES('','$fname','$lname','$mobile','$email','$birthday','$height','$weight','$sex','$dailybasis','$pregnant','$medicalhistory','$hadsurgery','$backpain','$injury','$anytake','$bestshape','$rateus','$nutrition','$agreement')");
//echo "$query";
	   $result = mysqli_query($con, $query);
	   if(!$result){
		   echo "Not processed! ".mysqli_error($con);
	   }else{
		   echo "Registration is done!";
	   }
}


?>