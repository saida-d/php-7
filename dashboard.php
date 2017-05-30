<?php 
  include_once('includes/header_login.php');
 ?>
  <div class="container">
  <?php include_once('includes/navbar.php');?>
 <div class="col-md-12 center">

    <h2>
     Hello 
     <?php 
        echo $_SESSION['user_name'];
     ?>
    </h2>
     <p>
      Welcome to account dashboard
     </p>
</div>

  
</div>
 <?php 
  include_once('includes/footer.php');
 ?>