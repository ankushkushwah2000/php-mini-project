<?php 
include('dbdon.php');
$id =$_GET['e'];
$data ="SELECT * from mpct where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);

?>

<?php 
include('hedder.php')
?>
<div class="container-fluid font  aa bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6 bgg rounded">
				<form method="post" action="new_user_update.php">
					<h1 class="text-white text-center">update_form</h1>
					<input type="hidden" name="id" value="<?php echo$b['id'] ?>">
              <div class="mb-3">
                <label class="text-white">Name</label>
                <input type="text" name="name" class="form-control" placeholder="&#xf14b; Enter Name" value="<?php echo$b['name'] ?>" required="">
              </div>
              <div class="mb-3">
                <label class="text-white">Email</label>
                <input type="text" name="email" class="form-control" placeholder="&#xf2b6;Enter Email" value="<?php echo$b['email'] ?>" required="">
                <p class="text-white">we"ll never share your email white anyone eles.</p>
              </div>
              <div class="mb-3">
                <label class="text-white">password</label>
                <input type="text" name="pass" class="form-control" placeholder="&#xf13e; Enter-password" value="<?php echo$b['password'] ?>" required="">
              </div>
              <input type="submit" name="" value="Submit" class="btn btn-info text-white">
            </form>
			</div>
			<div class="col-md-6">
				
			</div>
		</div><!-----row------->
	</div><!-----container------->
</div><!----container-fluid-end---->
<?php 
include('footer.php');

?>