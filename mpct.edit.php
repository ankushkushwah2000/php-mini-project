
<?php 
include('dbdon.php');
$id =$_GET['e'];
$data ="SELECT * FROM bca where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);


?>
<?php 
include"hedder.php";
?>
<div class="container-fluid bg">
<div class="container text-white kl">
	<div class="row">
    <h1 class="text-dark text-center text-white">Edit your detail</h1>
		<div class="col-md-6 shadow  kl">
			<h1 class="text-center">edit form</h1>
		<form method="post" action="data_update.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $b['id']?>">
              <div class="mb-3">
                <label>Student Name</label>
                <input type="text" name="name" value="<?php echo $b['name']?>" class="form-control" placeholder="Enter Name">
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $b['email']?>" class="form-control" placeholder="Enter Email">
                <p>we"ll never share your email white anyone eles.</p>
              </div>
              <div class="mb-3">
                <label>city</label>
                <input type="text" name="city" value="<?php echo $b['city']?>" class="form-control" placeholder="Enter city">
              </div>
              <div class="mb-3">
                <label>phone</label>
                <input type="Number" name="phone" value="<?php echo $b['phone']?>" class="form-control" placeholder="Enter Mobile Number">
              </div>
              <div class="mb-3">
                <label>Address</label>
                <textarea class="form-control" name="address">
                  <?php echo $b['address']?>
                </textarea>
              </div>
              <div class="mb-3">
                <label>Gender</label>
                <br>
                <input type="radio" name="gender" value="male"
                <?php
                if ($b['gender']=='male') {
                  echo "checked";
                }
                ?>
                >male
                <br>
                <input type="radio" name="gender" value="female"
                <?php
                if ($b['gender']=='female') {
                   echo "checked";
                 } 
                ?>
                >female
                <br>
                <input type="radio" name="gender" value="outher"
                <?php
                if ($b['gender']=='outher') {
                  echo "checked";
                }
                ?>
                >outher
              </div>
              <div class="mb-3">
              	<label>image</label>
              	<input type="file" name="image" class="form-control">
                <img src="<?php echo $b['image']?>" widht=50px; height=50px;>
              </div>
              <div class="text-center">
              <input type="submit" name="" value="Submit" class="btn btn-info">
            </div>
            </form>
		</div>
		<div class="col-md-6 text-center tk">
			<img src="image/edit.png" class="w-75">
		</div>
	</div>
</div>
</div>
<?php
include'footer.php'
  ?>