<?php
include("hedder.php");
?>
<?php 
include("session.php");
?>

<div class="container-fluid text-white bg">
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center mb-5 mt-5">
			<h1 class="fs-2"><?php 
           echo $_SESSION['ankush'];
                   ?></h1>
                   <div class="table-responsive ">
			<table class="table table-bordered">
				<tr>
					<th colspan="9" class="text-center bg-info text-white">data display</th>
				</tr>
				<tr>
					<th class="text-white">id</th>
					<th class="text-white">name</th>
					<th class="text-white">email</th>
					<th class="text-white">city</th>
					<th class="text-white">phone</th>
					<th class="text-white">address</th>
					<th class="text-white">gender</th>
					<th class="text-white">image</th>
					<th class="text-white">action</th>
				</tr>
				<?php
include('dbdon.php');
$email =$_SESSION['ankush'];
// print_r($email);
// die;
$data ="SELECT * from bca where email ='$email'";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
// $b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);
while ($b =mysqli_fetch_array($result)) {
// 	echo "<pre>";
// print_r($b);

?>
				<tr>
					<td class="text-white"><?php echo $b['id']?></td>
					<td class="text-white"><?php echo $b['name']?></td>
					<td class="text-white"><?php echo $b['email']?></td>
					<td class="text-white"><?php echo $b['city']?></td>
					<td class="text-white"><?php echo $b['phone']?></td>
					<td class="text-white"><?php echo $b['address']?></td>
					<td class="text-white"><?php echo $b['gender']?></td>
					<td class="text-white"><img src="<?php echo $b['image']?>"width=50px; height =60px;></td>
					<td>
						<a href="mpct.edit.php?e=<?php echo $b['id']?>" class="btn btn-info">edit</a>
					</td>
				</tr>
				<?php
				} 
				?>
			</table>
		</div>
		</div><!------col-md-12-end---->
	</div><!------row-end------->
 </div><!------container-end---->
</div><!-----container-fluid-end------>
<?php
include("footer.php"); 
?>