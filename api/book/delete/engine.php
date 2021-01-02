<?php
    header('Content-Type: application/json');
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $id     = $_POST['id'];
    include('../../access_db.php');
    connect_db();
    $result  = array();
    $sql     = "DELETE FROM Buku WHERE Buku.id =".$id;
    $data    = mysqli_query($conn, $sql);
    echo json_encode($result);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    echo json_encode($result);
    close_db();
?>