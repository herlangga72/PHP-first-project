<?php
// Todo : 
// 1. make add anggota
include('../access_db.php');
connect_db();
function clean($value){
    global $conn;
    return mysqli_real_escape_string($conn,$value);
}
$user = clean($_GET['username']);
$pass = clean($_GET['password']);
// $user = clean($_POST['username']);
// $pass = clean($_POST['password']);
$hash = password_hash($pass, PASSWORD_BCRYPT, ['salt' =>'adjsbfhjgaeswfgfdswabgiku']);
$new = "INSERT INTO `user` (`username`, `password`) VALUES ('$user', '$hash')";
$delete = "DELETE FROM `user` WHERE username = '".$user."'";


$result     = array();
$data       = mysqli_query($conn, $new);
if ($data){
    $result["Transaction"]=1;
} else {
    $result["Transaction"]=0;
}
echo json_encode($result);

// 2. Delete anggota
// 3. reset password anggota $newPw = "INSERT INTO `user` (`password`) VALUES ('$hash')"??? benerkah...? ;
// 4. perubahan data anggota [alamat dikunci bila di pengguna]
?>