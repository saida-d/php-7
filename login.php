<?php 
  session_start();
  include_once('includes/header.php');
 ?>
  <div class="container">
  <?php include_once('includes/navbar.php');?>
  <div class="col-md-6">

  <form method="post">
 
<div class="form-group">
  <label>Username</label>
  <input type="text" class="form-control" name="username" placeholder="Username" required>
</div>

<div class="form-group">
   <label>Password</label>
  <input type="password" class="form-control" name="password" placeholder="******" required>
</div>

<div class="form-group">
   <button class="btn btn-primary" name="login" type="submit">Login</button>
</div>
</form>
</div>

 <div class="col-md-6">
   <?php 
  if(isset($_POST['login'])){
      $obj= new Database();
      $obj->connect();
      $username=$_POST['username'];
      $password=$_POST['password'];

      $response=$obj->login($username,$password);
      if($response){
          
          $_SESSION['user_id']=$response['id'];
          $_SESSION['user_name']=$response['full_name'];
          ?>
          <script>
           window.location="dashboard.php";
          </script>
          <?php
          //header('Location:dashboard.php');
      }

  }
?>


 </div>
</div>
 <?php 
  include_once('includes/footer.php');
 ?>