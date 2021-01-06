<?php
    header('Content-Type: application/json');
    include('../../access_db.php');
    connect_db();
    function clean($value){global $conn;return mysqli_real_escape_string($conn,$value);}
    $id      = clean($_GET['id']);
    $result  = array();
    $sql     = "SELECT * FROM Buku WHERE id=".$id;
    $data    = mysqli_query($conn, $sql);    
    $result['sql']=$sql;
    $result['hasil']=mysqli_fetch_assoc($data);
    echo json_encode($result);
?>