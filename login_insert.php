<?php 
session_start();
include('dbdon.php');
$ema =$_POST['email'];
$paas =$_POST['pass'];
$data ="SELECT * FROM mpct where email='$ema' && password ='$paas'";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$b =mysqli_num_rows($result);
// echo "<pre>";
// print_r($b);
$d =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($result);
// die;
if ($b ==1) {
	// $_SESSION['ankush'] ='login successfuly';
	$_SESSION['ankush'] = $ema;
	$_SESSION['n']=$d['name'];
	header('location:descbord.php');
}
else{
	$_SESSION['error']= "invalid username or password";
	header('location:index.php');
}



?>