<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $nama           = clean($_GET['nama']);
    $id             = clean($_GET['id']);
    $tanggallahir   = clean($_GET['tanggallahir']);
    $tempattinggal  = clean($_GET['tempattinggal']);
    $bukti          = clean($_GET['bukti']);
    $new            = "INSERT INTO user ('nama','id', 'tanggallahir', 'tempattinggal', 'bukti') VALUES ('$id', '$nama', '$tanggallahir', '$tempattinggal', '$bukti')";
    $result         = array();
    $data           = mysqli_query($conn, $new);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    echo json_encode($result);
?>