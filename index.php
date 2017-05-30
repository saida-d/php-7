<?php 
  include_once('includes/header.php');
  
 ?>
  <div class="container">
  <?php include_once('includes/navbar.php');?>
  <div class="col-md-6">

  <form method="post">
 <div class="form-group">
  <label>Name</label>
  <input type="text" class="form-control" name="name" placeholder="Name" required>
</div>

<div class="form-group">
  <label>Username</label>
  <input type="text" class="form-control" name="username" placeholder="Username" required>
</div>

<div class="form-group">
   <label>Password</label>
  <input type="password" class="form-control" name="password" placeholder="******" required>
</div>

<div class="form-group">
   <button class="btn btn-primary" name="register" type="submit">Register</button>
</div>
</form>
</div>

<div class="col-md-6">
  <?php 
  if(isset($_POST['register'])){
      $obj= new Database();
      $obj->connect();
      $full_name=$_POST['name'];
      $username=$_POST['username'];
      $password=$_POST['password'];

      $response= $obj->insert($username,$password,$full_name);
      if(!$response){
          echo "Registered successfully";
      }

  }
  ?>
</div>
</div>
 <?php 
  include_once('includes/footer.php');
 ?>