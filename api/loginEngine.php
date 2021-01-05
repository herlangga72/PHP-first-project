<?php
require_once('access_db.php');
connect_db();
global $conn;
if (!is_null($_POST['username'])) {
  // get data from web
  $user             = $_POST['username'];
  // get data from db start
  $sql              = "SELECT password FROM `user` where username='$user' ";
  $result           = mysqli_query($conn,$sql);
  $password_from_db = mysqli_fetch_array($result,MYSQLI_NUM);
  // get data from db end

  // apa username ada?? 
  if (!is_null($password_from_db)){
    // checking password using encryption
    $checked          = password_verify($_POST['password'],$password_from_db[0]);
    if ($checked) {
      session_start();
      $_SESSION['username']= $user;
      $_SESSION['isLogin'] = 1;
      echo json_encode(array('success' => 1));
    }
    else{
      echo json_encode(array('success' => 0));
    }
  }
  else {
    echo json_encode(array('success' => 2));
  }
}
else{
  echo json_encode(array('success' => 2));
}
?>