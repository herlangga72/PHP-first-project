<?php
    // get data from request
    $judul      = $_GET['judul'];
    $pengarang  = $_GET['pengarang'];
    $penerbit   = $_GET['penerbit'];
    $tahunTerbit= $_GET['tahunTerbit'];
    $limit      = $_GET['limit'];
    switch ($limit) {
        case 1 : $limit=10; break;
        case 2 : $limit=15; break;
        case 3 : $limit=20; break;
        default: $limit=30; }
    // make the sql code
    $syntax     = 'WHERE' ;
    if (!empty($judul))         { $syntax .= " bukuJudul LIKE '%".$judul."%' AND"; }
    if (!empty($pengarang))     { $syntax .= " bukuPenulis LIKE '%".$pengarang."%' AND"; }
    if (!empty($penerbit))      { $syntax .= " bukuPenerbit LIKE '%".$penerbit."%' AND"; }
    if (!empty($tahunTerbit))   { $syntax .= " bukuTahunTerbit LIKE '%".$tahunTerbit."%' AND"; }
    if (strlen($syntax)==5)     { $syntax  = ""; }
    else                        { $syntax  = substr($syntax,0,-4); }
    include('../access_db.php');
    connect_db();
    $sql     = "SELECT bukuJudul, bukuPenulis, bukuPenerbit, bukuTahunTerbit, KodeBuku FROM Buku ".$syntax." LIMIT 0," . $limit;
    $hasil   = array();
    $result  = array();
    $data    = mysqli_query($conn, $sql);
    while($row =mysqli_fetch_assoc($data)) {
        $hasil[] = $row;
    }
    $result['hasil']=$hasil;
    $sql     = "SELECT COUNT(*) AS 'JumlahPencarian' FROM Buku ".$syntax;
    $data    = mysqli_query($conn, $sql);
    $result['JumlahHasil']= mysqli_fetch_array($data)[0];
    echo json_encode($result);
    close_db();
?>