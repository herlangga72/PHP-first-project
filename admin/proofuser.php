<?php
session_start();    
if ($_SESSION["isLogin"]){
    $user = $_SESSION['username'];
}
else{
    echo "<script>window.location.replace('/admin/login/');</script>" ;
}
?>