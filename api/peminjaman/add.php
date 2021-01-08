<?php
    include('../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    session_start();
    header('Content-Type: application/json');
    $id            = clean($_POST['id']);
    $peminjam      = clean($_POST['peminjam']);
    $staff         = $_SESSION['username'];
    $buku1_kodebuku= clean($_POST['buku1-kodebuku']);
    $buku2_kodebuku= clean($_POST['buku2-kodebuku']);
    $buku3_kodebuku= clean($_POST['buku3-kodebuku']);
    $buku4_kodebuku= clean($_POST['buku4-kodebuku']);
    $buku5_kodebuku= clean($_POST['buku5-kodebuku']);
    $buku6_kodebuku= clean($_POST['buku6-kodebuku']);
    $buku7_kodebuku= clean($_POST['buku7-kodebuku']);
    $tanggalpinjam = date("y-m-d H:i:s");
    $tanggalkembali= clean($_POST['tanggalkembali']);
    $result        = array();
    if ($id!="") {
        $sql         = "UPDATE `transaksi` SET `peminjam`=$peminjam,`staff`=$staff,`buku1_kodebuku`='$buku1_kodebuku',`buku2_kodebuku`='$buku2_kodebuku',`buku3_kodebuku`='$buku3_kodebuku',
                        `buku4_kodebuku`='$buku4_kodebuku',`buku5_kodebuku`='$buku5_kodebuku',`buku6_kodebuku`='$buku6_kodebuku',`buku7_kodebuku`='$buku7_kodebuku',
                        `tanggalkembali`='$tanggalkembali' WHERE `id`='$id' " ;
    } else {
        $sql         = "INSERT INTO `transaksi`(`peminjam`, `staff`, `buku1_kodebuku`, `buku2_kodebuku`, `buku3_kodebuku`, `buku4_kodebuku`, `buku5_kodebuku`, `buku6_kodebuku`, `buku7_kodebuku`, `tanggalpinjam`)
                        VALUES ('$peminjam','$staff','$buku1_kodebuku','$buku2_kodebuku','$buku3_kodebuku','$buku4_kodebuku','$buku5_kodebuku','$buku6_kodebuku','$buku7_kodebuku'), '$tanggalpinjam' )";
    }
    $data        = mysqli_query($conn, $sql);
    if ($data){
        $result["Transaction"]=1;
    } else {
        $result["Transaction"]=0;
    }
    $result['sql']=$sql;
    echo json_encode($result);
?>