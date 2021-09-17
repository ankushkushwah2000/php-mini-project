<?php
include('session.php');
?>
<?php 
include'hedder.php';
?>
<?php include('dbdon.php'); ?>
<?php 
$email =$_SESSION['ankush'];
$data ="SELECT * from mpct where email ='$email'";
$result =mysqli_query($con,$data);
$d =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);
?>
<?php 
$email =$_SESSION['ankush'];
$data ="SELECT * from bca where email ='$email'";
$result =mysqli_query($con,$data);
?>
<div class="container-fluid bg pad">
	<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 text-center mb-5 shadow-lg">
      <img src="image/user.png" class="w-25 imgg">
    <h1 class="text-white fs-3"> <?php 
echo $_SESSION['ankush'];
?></h1> 
 <!-- <h1 class="text-white"><?php 
echo $_SESSION['n'];
?></h1> --> 
    </div>
    <div class="col-md-3"></div>
				<div class="col-md-3">
          
        </div>
        <div class="col-md-6 text-center shadow">
          <div class="text-center">
        <h1 class="text-white">select the coursh</h1>
      </div>
      <div class="d-grid gap-2">
          <?php
          if (mysqli_num_rows($result)==0) {
             echo '<a href="" class="btn btn-info btn-outline-primary btn-lg text-white " data-bs-toggle="modal" data-bs-target="#aa">MCA</a>';
           }
           else{
            echo '<a href="" class="btn btn-info btn-outline-primary btn-lg text-white" data-bs-toggle="modal" data-bs-target="">MCA</a>
            <P class="text-white">you are all rady fill this form</p>';
           } 

          ?>
        </div>
          <br><br>
          <div class="d-grid gap-2">
          <a href="" class="btn btn-info btn-outline-primary btn-lg text-white" data-bs-toggle="modal" data-bs-target="#aa">BCA</a>
        </div>
          <br><br>
          <div class="d-grid gap-2">
          <a href="" class="btn btn-info btn-outline-primary btn-lg text-white" data-bs-toggle="modal" data-bs-target="#aa">B.E</a>
        </div>
          <br><br>
        </div>
        <div class="col-md-3">
          
        </div>
				<br>
				<br>
				<div class="col-md-12 text-center mm">
					<a href="mpct.display.php" class="btn btn-info text-white">Data display</a>
          <a href="new_user_edit.php?e=<?php echo$d['id']?>" class="btn btn-danger text-white">view</a>
				</div>
	</div><!-----row end------->
</div><!------container end----->
<?php
include"footer.php"; 
?>

<div>
	<!-- Button trigger modal -->
<div class="modal fade font" id="aa">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header text-centar bgg">
        <h1 class="modal-title text-white" id="exampleModalLabel">ragistration-form</h1>

         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body bgg text-white">
      <form method="post" action="data_insert.php" enctype="multipart/form-data">
              <div class="mb-3">
                <label>Student Name</label>
                <input type="text" name="name" class="form-control" placeholder="&#xf14b; Enter Name" required="" value="<?php echo$_SESSION['n']?>">
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="&#xf0e0; Enter Email" required="" value="<?php echo$_SESSION['ankush']?>">
                <p>we"ll never share your email white anyone eles.</p>
              </div>
              <div class="mb-3">
                <label>city</label>
                <input type="text" name="city" class="form-control" placeholder="&#xf018; Enter city">
              </div>
              <div class="mb-3">
                <label>phone</label>
                <input type="Number" name="phone" class="form-control" placeholder="&#xf10b; Enter Mobile Number" required="">
              </div>
              <div class="mb-3">
                <label>Address</label>
                <textarea class="form-control" name="address" placeholder="&#xf041; Enter address"></textarea>
              </div>
              <div class="mb-3">
                <label>Gender</label>
                <br>
                <input type="radio" name="gender" value="male">male
                <br>
                <input type="radio" name="gender" value="female">female
                <br>
                <input type="radio" name="gender" value="outher">outher
              </div>
              <div class="mb-3">
              	<label>image</label>
              	<input type="file" name="image" class="form-control" placeholder="&#xf03e;" required="">
              </div>
              
              <input type="submit" name="" value="Submit" class="btn btn-info">
            </form>
       </div>
         </div>
            </div>      
</div><!----modal-end------->
