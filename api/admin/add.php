<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $user         = clean($_POST['nama']);
    $pass         = clean($_POST['password']);
    $id           = clean($_POST['id']);
    $tempatinggal = clean($_POST['tempat-tinggal']);
    $tanggallahir = clean($_POST['tanggal-lahir']);
    if($pass){
        $hash = password_hash($pass, PASSWORD_BCRYPT, ['salt' =>'adjsbfhjgaeswfgfdswabgiku']);
    }
    if ($id && $hash){
        $new = "UPDATE `admin` SET `username`='$user', `password`='$hash',`tempattinggal`='$tempatinggal', `tanggallahir`='$tanggallahir' WHERE id='$id' ";
    }
    elseif ($id) {
        $new = "UPDATE `admin` SET `username`='$user',`tempattinggal`='$tempatinggal', `tanggallahir`='$tanggallahir' WHERE id='$id' ";
    }
    else {
        $new = "INSERT INTO `admin` (`username`, `password`, `tempattinggal`, `tanggallahir`) VALUES ('$user', '$hash','$tempatinggal' ,'$tanggallahir')";
    }
    $result     = array();
    $data       = mysqli_query($conn, $new);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    echo json_encode($result);
?>  