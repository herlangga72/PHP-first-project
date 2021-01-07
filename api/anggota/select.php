<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $name       = clean($_GET['nama']);
    $sql        = "SELECT nama,id FROM user WHERE nama LIKE '%" . $name. "%'";
    $result     = array();
    $data       = mysqli_query($conn, $sql);
    $hasil      = array();
    while($row = mysqli_fetch_assoc($data)) {
        $hasil[] = $row;
    }
    $result['hasil']=$hasil;
    echo json_encode($result);
?>