<?php 
  include_once('includes/header_login.php');
 ?>
  <div class="container">
  <?php include_once('includes/navbar.php');?>
 <div class="col-md-6">

    <h2>
     Welcome  
     <?php 
        echo $_SESSION['user_name'];
     ?>
    </h2>
</div>

 <div class="col-md-6">
    

 </div>
</div>
 <?php 
  include_once('includes/footer.php');
 ?>