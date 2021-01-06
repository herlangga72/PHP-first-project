<?php
    header('Content-Type: application/json');
    include('../../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    
    $judul      = clean($_GET['judul']);
    // $pengarang  = clean($_GET['pengarang']);
    // $penerbit   = clean($_GET['penerbit']);
    // $tahunTerbit= clean($_GET['tahunTerbit']);
    // $limit      = clean($_GET['limit']);
    
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
            default: $limit=30; 
        }
    }
    
    $syntax     = 'WHERE' ;
    if (!empty($judul))         { $syntax .= " bukuJudul LIKE '%".$judul."%' AND"; }
    if (!empty($pengarang))     { $syntax .= " bukuPenulis LIKE '%".$pengarang."%' AND"; }
    if (!empty($penerbit))      { $syntax .= " bukuPenerbit LIKE '%".$penerbit."%' AND"; }
    if (!empty($tahunTerbit))   { $syntax .= " bukuTahunTerbit LIKE '%".$tahunTerbit."%' AND"; }
    if (strlen($syntax)===5)    { $syntax  = ""; }
    else                        { $syntax  = substr($syntax,0,-4); }

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
    $result['judul']=$judul;
    $result['SQL']=$sql;
    $result['hasil']=$hasil; 
    echo json_encode($result);
    close_db();
?>