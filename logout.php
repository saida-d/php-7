<?php 
  echo "Logging out..";
  session_unset($_SESSION['user_id']); 
  session_unset($_SESSION['user_name']); 
  
  ?>
  <script>
   window.location="index.php";
  </script>
  <?php
?>