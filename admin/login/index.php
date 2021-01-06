<?php
  session_start();
  if (isset($_SESSION['isLogin'])){
    echo "<script>window.location.replace('/admin/home/');</script>" ;
  }
  include('login.html');
?>
