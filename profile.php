<?php 
  include_once('includes/header_login.php');
 ?>
  <div class="container">
  <?php 
   include_once('includes/navbar.php');
    $obj= new Database();
    $obj->connect();

    $user=$obj->get_user($_SESSION['user_id']);
  
  ?>
 <div class="col-md-6">
 <form method="post">
 <div class="form-group">
  <label>Name</label>
  <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $user['full_name']?>">
</div>

<div class="form-group">
  <label>Username</label>
  <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user['user_name']?>" readonly>
</div>

<h2>Change Password</h2>
<div class="form-group">
   <label>New Password</label>
  <input type="password" class="form-control" name="password" placeholder="******" >
</div>

<div class="form-group">
   <button class="btn btn-primary" name="update" type="submit">Update</button> 
   
</div>
</form>
</div>

 <div class="col-md-6 text-right">
  <form method="post">
    <button class="btn btn-default" name="delete" type="submit">Delete My Account</button> 
    <br>Note: No confirm alert on deletion, make sure before you proceed.
  </form>
  <?php 
  if(isset($_POST['update'])){

      $full_name=$_POST['name'];
      $password=$_POST['password'];

      $response=$obj->update($full_name,$password,$_SESSION['user_id']);
      if($response){
         echo "Profile updated successfully";
         ?>
         <script>
          window.location.reload();
         </script>
         <?php
      }

  }
  if(isset($_POST['delete'])){
      $response=$obj->delete($_SESSION['user_id']);
      if($response){
         echo "Account deleted successfully";
         ?>
         <script>
          window.location="logout.php";
         </script>
         <?php
      }
  }
?>

 </div>
</div>
 <?php 
  include_once('includes/footer.php');
 ?>