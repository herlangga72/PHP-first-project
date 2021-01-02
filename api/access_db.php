<?php
function connect_db(){
  $servername = "127.0.0.1";
  $username = "admin";
  $password = "admin";
  $db_nama  = "PWD_Kerjaan";
  global $conn;
  $conn = mysqli_connect($servername, $username, $password, $db_nama);
  if (mysqli_connect_errno()) {
    return "Gagal Terkoneksi";
  }
}

function close_db(){
  global $conn;  
  mysqli_close($conn);
}
?>