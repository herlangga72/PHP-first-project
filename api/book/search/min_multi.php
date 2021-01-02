<?php
    // header('Content-Type: application/json');
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    $judul      = $_GET['judul'];
    $pengarang  = $_GET['pengarang'];
    $penerbit   = $_GET['penerbit'];
    $tahunTerbit= $_GET['tahunTerbit'];
    $limit      = $_GET['limit'];
    
    if (is_null($_GET['start']) or !isset($_GET['start'])){
        $start  = 0;
    } else {
        $start  = clean($_GET['start']);
    }
    if (is_null($_GET['limit']) or !isset($_GET['limit'])){
        $limit  = 10;
    } else {
        switch ($limit) {
            case 1 : $limit=10; break;
            case 2 : $limit=15; break;
            case 3 : $limit=20; break;
            default: $limit=30; }
    }
        // make the sql code
    $syntax     = 'WHERE' ;
    if (!empty($judul))         { $syntax .= " bukuJudul LIKE '%".$judul."%' AND"; }
    if (!empty($pengarang))     { $syntax .= " bukuPenulis LIKE '%".$pengarang."%' AND"; }
    if (!empty($penerbit))      { $syntax .= " bukuPenerbit LIKE '%".$penerbit."%' AND"; }
    if (!empty($tahunTerbit))   { $syntax .= " bukuTahunTerbit LIKE '%".$tahunTerbit."%' AND"; }
    if (strlen($syntax)==5)     { $syntax  = ""; }
    else                        { $syntax  = substr($syntax,0,-4); }
    include('../../access_db.php');
    connect_db();
    $hasil   = array();
    $result  = array();
    $sql     = "SELECT COUNT(*) AS 'JumlahPencarian' FROM Buku ".$syntax;
    $data    = mysqli_query($conn, $sql);
    $result['JumlahHasil']= mysqli_fetch_array($data)[0];
    $result['startFrom']  = $start;
    $result['endOn']      = $start+$limit;
    $sql     = "SELECT `id`, `bukuJudul`, `bukuPenulis`, `bukuPenerbit`, `KodeBuku` FROM Buku " .$syntax." LIMIT ".$start."," . $limit;
    $data    = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($data)) {
        $hasil[] = $row;
    }
    $result['hasil']=$hasil; 
    echo json_encode($result);
    close_db();
?>