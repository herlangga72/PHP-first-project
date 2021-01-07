<?php
    include('../access_db.php');
    connect_db();
    header('Content-Type: application/json');
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $id         = clean($_POST['id']);
    $judul      = clean($_POST['judul']);
    $Penulis    = clean($_POST['penulis']);
    $Penerbit   = clean($_POST['penerbit']);
    $tahunterbit= clean($_POST['tahunterbit']);
    $Diedit     = date("y-m-d H:i:s");
    $KodeBuku   = clean($_POST['kodebuku']);
    $tersedia   = clean($_POST['tersedia']);
    $result     = array();
    $sql        = "UPDATE Buku SET bukuJudul = ".$judul.", bukuPenulis = ".$Penulis.", bukuPenerbit = ".$Penerbit.", bukuTahunTerbit = ".$tahunterbit.", Diedit = ".$Diedit.", KodeBuku = ".$KodeBuku.", Tersedia = ".$tersedia."  WHERE id = ".$id ;
    $data       = mysqli_query($conn, $sql);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
        $result["SQL"]=$sql;
    }
    echo json_encode($result);
    close_db();
?>