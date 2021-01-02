<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $user = clean($_GET['username']);
    // $user = clean($_POST['username']);
    $delete = "DELETE FROM `admin` WHERE username = '".$user."'";
    $result     = array();
    $data       = mysqli_query($conn, $delete);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    echo json_encode($result);
?>  