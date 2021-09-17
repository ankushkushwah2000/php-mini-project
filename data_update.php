<?php 
include('dbdon.php');
$id =$_POST['id'];
echo$a =$_POST['name'];
echo$b =$_POST['email'];
echo$c =$_POST['city'];
echo$d =$_POST['phone'];
echo$e =$_POST['address'];
echo$f =$_POST['gender'];
// $g =$_FILES['image'];
// echo "<pre>";
// print_r($g);
echo$g =$_FILES['image']['name'];
echo$tem_name =$_FILES['image']['tmp_name'];
$file ="uplode/".$g;
move_uploaded_file($tem_name,$file);
if ($g=="") {
	$data ="update bca set name ='$a',email ='$b',city ='$c',phone ='$d',address ='$e',gender ='$f' where id =$id";
	$result =mysqli_query($con,$data);
	header('location:mpct.display.php');
}
else{
	$data ="update bca set name ='$a',email ='$b',city ='$c',phone ='$d',address ='$e',gender ='$f',image='$file' where id =$id";
	$result =mysqli_query($con,$data);
	header('location:mpct.display.php');

}




?>