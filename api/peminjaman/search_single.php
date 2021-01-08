<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $id         = $_GET['id'];
    $select     = "SELECT * FROM `transaksi` WHERE id='$id' ";
    $result     = array();
    $data       = mysqli_query($conn, $select);
    $hasil      = array();
    $row = mysqli_fetch_assoc($data);
    $result['hasil']=$row;
    echo json_encode($result);
?>