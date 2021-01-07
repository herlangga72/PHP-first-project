<?php
    header('Content-Type: application/json');
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $id      = $_POST['id'];
    $result  = array();
    $sql     = "DELETE FROM Buku WHERE id = '".$id."'  ";
    $data    = mysqli_query($conn, $sql);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    echo json_encode($result);
    close_db();
?>