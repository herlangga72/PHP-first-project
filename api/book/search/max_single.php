<?php
    header('Content-Type: application/json');
    function clean($value){global $conn;return mysqli_real_escape_string($conn,$value);}
    include('../../access_db.php');
    connect_db();
    $id      = clean($_GET['id']);
    $result  = array();
    $sql     = "SELECT * FROM Buku WHERE id=".$id;
    $data    = mysqli_query($conn, $sql);
    $result['hasil']=mysqli_fetch_assoc($data);
    echo json_encode($result);
    close_db();
?>