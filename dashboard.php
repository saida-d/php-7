<?php 
  include_once('includes/header_login.php');
 ?>
  <div class="container">
  <?php include_once('includes/navbar.php');?>
 <div class="col-md-8">

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

<div class="col-md-4">
  <h4>Users just to sharing with you</h4>
  <?php 
   $obj=new Database();
   $obj->connect();
   $users=$obj->get_users();
   ?>
    <ul class="list-group">
   <?php
    
   foreach($users as $user){
   ?>    
        <li class="list-group-item">
        <?php echo $user[full_name];?>
        </li>
   <?php
   }
  ?>
  </ul>
</div>

  
</div>
 <?php 
  include_once('includes/footer.php');
 ?>