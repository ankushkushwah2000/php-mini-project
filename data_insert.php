<?php 
include('dbdon.php');
echo$a =$_POST['name'];
echo$b =$_POST['email'];
echo$c =$_POST['city'];
echo$d =$_POST['phone'];
echo$e =$_POST['address'];
echo$f =$_POST['gender'];
$g =$_FILES['image'];
// echo "<pre>";
// print_r($g);
echo$g =$_FILES['image']['name'];
echo$tem_name =$_FILES['image']['tmp_name'];
$file ="uplode/".$g;
move_uploaded_file($tem_name,$file);
$data ="INSERT into bca(name,email,city,phone,address,gender,image)value('$a','$b','$c','$d','$e','$f','$file')";
mysqli_query($con,$data);
header('location:mpct.display.php');




?>