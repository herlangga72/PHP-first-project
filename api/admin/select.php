<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $nama       = $_GET['search-staff'];
    $select     = "SELECT `id`,`username` FROM `admin` WHERE username LIKE '%".$nama."%' ";
    $result     = array();
    $data       = mysqli_query($conn, $select);
    $hasil      = array();
    while($row = mysqli_fetch_assoc($data)) {
        $hasil[] = $row;
    }
    $result['hasil']=$hasil;
    echo json_encode($result);
?>