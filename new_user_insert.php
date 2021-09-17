<?php
session_start(); 
include('dbdon.php');
$a =$_POST['name'];
$b =$_POST['email'];
$c =$_POST['pass'];
$quee ="SELECT * FROM mpct where email ='$b'";
$emailchek =mysqli_query($con,$quee);
// echo "<pre>";
// print_r($emailchek);
// die;
if (mysqli_num_rows($emailchek)>0) {
	// echo "email is allredy use";
	$_SESSION['mail']= 'email is allredy use';
	header('location:index.php');

}
else{
	$data ="INSERT into mpct(name,email,password)value('$a','$b','$c')";
mysqli_query($con,$data);
header('location:index.php');
}
// $data ="INSERT into mpct(name,email,password)value('$a','$b','$c')";
// echo $data;
// mysqli_query($con,$data);





?>