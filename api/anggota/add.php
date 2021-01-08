<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $nama           = clean($_POST['nama']);
    $id             = clean($_POST['id']);
    $tanggallahir   = clean($_POST['tanggallahir']);
    $tempattinggal  = clean($_POST['tempat-tinggal']);
    if ($id) {
        $new        = "UPDATE `user` SET ,`Nama`='$nama',`tanggallahir`='$tanggallahir',`tempattinggal`='$tempattinggal' WHERE `id`='$id'";
    }else {
        $new        = "INSERT INTO user (`Nama`, `tanggallahir`, `tempattinggal`) VALUES ( '$nama', '$tanggallahir', '$tempattinggal')";
    }
    $result         = array();
    $data           = mysqli_query($conn, $new);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    $result['sql']=$new;
    echo json_encode($result);
?>