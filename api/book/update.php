<?php
    include('../access_db.php');
    connect_db();
    header('Content-Type: application/json');
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $id         = clean($_GET['id']);
    $judul      = clean($_GET['judul']);
    $Penulis    = clean($_GET['penulis']);
    $Penerbit   = clean($_GET['penerbit']);
    $tahunterbit= clean($_GET['tahunterbit']);
    $Diedit     = date("y-m-d H:i:s");
    $KodeBuku   = clean($_GET['kodebuku']);
    $tersedia   = clean($_GeT['tersedia']);
    $result     = array();
    $sql        = "UPDATE Buku SET bukuJudul = ".$judul.", bukuPenulis = ".$Penulis.", bukuPenerbit = ".$Penerbit.", bukuTahunTerbit = ".$tahunterbit.", Diedit = ".$Diedit.", KodeBuku = ".$kodebuku.", Tersedia = ".$tersedia."  WHERE id = ".$id ;
    $data       = mysqli_query($conn, $sql);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    echo json_encode($result);
    close_db();
?>