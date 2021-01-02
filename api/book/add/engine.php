<?php
    include('../../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    header('Content-Type: application/json');
    $judul       = clean($_POST['judul']);
    $penulis     = clean($_POST['penulis']);
    $penerbit    = clean($_POST['penerbit']);
    $tahunterbit = clean($_POST['tahunterbit']);
    $kodebuku    = clean($_POST['kodebuku']);
    $tersedia    = clean($_POST['tersedia']);
    $result      = array();
    $sql         = "INSERT INTO Buku (bukuJudul,bukuPenulis,bukuPenerbit,bukuTahunTerbit,KodeBuku, Tersedia) VALUES ( '" . $judul ."' , '" . $penulis . "' , '" . $penerbit . "' , '" . $tahunterbit . "' , '" . $kodebuku . "' , '" . $tersedia . "' )";
    $data        = mysqli_query($conn, $sql);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }

?>