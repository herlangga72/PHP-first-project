<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $id         = clean($_GET['id']);
    $sql        = "SELECT `id`, `Nama`, `tanggallahir`, `tempattinggal` FROM `user` WHERE id=$id" ;
    $result     = array();
    $data       = mysqli_query($conn, $sql);
    $hasil      = array();
    $row        = mysqli_fetch_assoc($data);
    $result['hasil']=$row;
    echo json_encode($result);
?>