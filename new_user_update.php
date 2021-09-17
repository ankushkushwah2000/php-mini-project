<?php 
include('dbdon.php');
$id =$_POST['id'];
$a =$_POST['name'];
$b =$_POST['email'];
$c =$_POST['pass'];
$data ="update mpct set name ='$a', email ='$b', password ='$c' where id =$id";
$result =mysqli_query($con,$data);
if ($result) {
	header('location:descbord.php');
}



?>