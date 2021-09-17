<?php 
include'hedder.php';
?>
<?php
session_start(); 
?>
<div class="container-fluid aa bg">
	<div class="row">
		<div class="col-md-6">
			<img src="image/login.png" class="w-100">
		</div>
		<div class="col-md-4 shadow rounded marg">
			<div class="tec">
				<img src="image/user.png" class="w-25 icon">
			<h1 class="text-center text-white">User Login form</h1>
			<?php
			if (isset($_SESSION['error'])) {
			 	 echo '<div class="alert alert-danger alert-dismissible fade show       col-lg-12" role="alert">
             '.$_SESSION['error'].'
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                       </button>
                           </div>';
			 	unset($_SESSION['error']);
			 } 
			?>
			<hr>
			<form method="post" action="login_insert.php">
				<div class="mb-3">
					<label class="text-white">email</label>
					<input type="text" name="email" class="form-control" placeholder="&#xf0e0; Enter Email" required="">
				</div>
				<div class="mb-5">
					<label class="text-white">password</label>
					<input type="text" name="pass" class="form-control" placeholder="&#xf023; Enter password" required="">
				</div>
				<div class="text-center d-grid gap-2 ">
					<input type="submit" name="" class="btn btn-info text-white">
				</div>
				<br>
				<div class="text-center d-grid gap-2">
				<a href="" class="btn btn-danger text-white" data-bs-target="#aa" data-bs-toggle="modal">create account</a>
			   </div>
			</form>
		</div>
		</div>
		<div class="col-md-2">
			
		</div>
	</div><!-------row-end----->
</div><!----container-filudh----->
<?php
include'footer.php';
?>

<!-- Button trigger modal -->
<div class="container font">
<div class="modal fade" id="aa">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header text-centar bgg">
        <h1 class="modal-title text-center text-white" id="exampleModalLabel">create your account</h1>

         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body bgg">
      <form method="post" action="new_user_insert.php">
              <div class="mb-3">
                <label class="text-white">Name</label>
                <input type="text" name="name" class="form-control" placeholder="&#xf14b; Enter Name" required="">
              </div>
              <div class="mb-3">
              	<?php
			if (isset($_SESSION['mail'])) {
			 	 echo '<div class="alert alert-danger alert-dismissible fade show       col-lg-12" role="alert">
             '.$_SESSION['mail'].'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
              </button>
                        </div>';
			 	unset($_SESSION['mail']);
			 } 
			?>
                <label class="text-white">Email</label>
                <input type="text" name="email" class="form-control" placeholder="&#xf2b6;Enter Email" required="">
                <p class="text-white">we"ll never share your email white anyone eles.</p>
              </div>
              <div class="mb-3">
                <label class="text-white">password</label>
                <input type="text" name="pass" class="form-control" placeholder="&#xf13e; Enter-password" required="">
              </div>
              <input type="submit" name="" value="Submit" class="btn btn-info text-white">
            </form>
       </div>
         </div>
            </div> 
            </div><!-----container-end----->     