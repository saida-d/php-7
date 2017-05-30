<?php 
  session_start();
  echo "Logging out..";
  unset($_SESSION['user_id']); 
  unset($_SESSION['user_name']); 
  ?>
  <script>
   window.location="index.php";
  </script>
  <?php
?>