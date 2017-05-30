<?php 
 session_start();
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">UMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">
        
        <?php 
         if(!isset($_SESSION['user_id'])){
             ?>
                <li><a href="login.php">Login </a></li>
                 <li><a href="index.php">Register </a></li>
             <?php
         }
        ?>
        
        <?php 
         if(isset($_SESSION['user_id'])){
             ?>
             <li  class="active"><a href="dashboard.php">Home</a></li>
             <li><a href="profile.php">My Account</a></li>
              <li><a href="logout.php">Logout</a></li>
             <?php
         }
        ?>
        
        
      </ul>

      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>