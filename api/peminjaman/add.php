<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    session_start();
    header('Content-Type: application/json');
    $id             = clean($_POST['id']);
    $peminjam       = clean($_POST['peminjam']);
    $staff          = $_SESSION['username'];
    $buku1_kodebuku = clean($_POST['buku1_kodebuku']);
    $buku2_kodebuku = clean($_POST['buku2_kodebuku']);
    $buku3_kodebuku = clean($_POST['buku3_kodebuku']);
    $tanggalpinjam  = date("y-m-d H:i:s");
    $tanggalkembali = clean($_POST['tanggalkembali']);
    $result         = array();
    if ($id!="") {
        if ($buku3_kodebuku) {
            $sql        = "UPDATE `transaksi` SET `peminjam`='$peminjam',`staff`='$staff',`buku1_kodebuku`='$buku1_kodebuku',`buku2_kodebuku`='$buku2_kodebuku',`buku3_kodebuku`='$buku3_kodebuku', `tanggalkembali`='$tanggalkembali' WHERE `id`='$id' " ;
        } elseif ($buku2_kodebuku){
            $sql        = "UPDATE `transaksi` SET `peminjam`='$peminjam',`staff`='$staff',`buku1_kodebuku`='$buku1_kodebuku',`buku2_kodebuku`='$buku2_kodebuku', `tanggalkembali`='$tanggalkembali' WHERE `id`='$id' " ;
        } else {
            $sql        = "UPDATE `transaksi` SET `peminjam`='$peminjam',`staff`='$staff',`buku1_kodebuku`='$buku1_kodebuku', `tanggalkembali`='$tanggalkembali' WHERE `id`='$id' " ;
        }
    } elseif ($buku3_kodebuku) {
        $sql        = "INSERT INTO `transaksi` (`id`, `peminjam`, `staff`, `buku1_kodebuku`, `buku2_kodebuku`, `buku3_kodebuku`, `tanggalpinjam`) VALUES (NULL,'$peminjam','$staff','$buku1_kodebuku','$buku2_kodebuku','$buku3_kodebuku', '$tanggalpinjam' )";    
    } elseif ($buku2_kodebuku){
        $sql        = "INSERT INTO `transaksi` (`id`, `peminjam`, `staff`, `buku1_kodebuku`, `buku2_kodebuku` `tanggalpinjam`) VALUES (NULL,'$peminjam','$staff','$buku1_kodebuku','$buku2_kodebuku', '$tanggalpinjam' )";
    } else {
        $sql        = "INSERT INTO `transaksi` (`id`, `peminjam`, `staff`, `buku1_kodebuku`, `tanggalpinjam`) VALUES (NULL,'$peminjam','$staff', '$buku1_kodebuku', '$tanggalpinjam' )";
    }
    $data           = mysqli_query($conn, $sql);
    if ($data) {
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    $result['sql']  = $sql;
    echo json_encode( $result );
?>