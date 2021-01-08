<?php
    header('Content-Type: application/json');
    include('../../access_db.php');
    connect_db();
    function clean($value){
        global $conn;
        return mysqli_real_escape_string($conn,$value);
    }
    
    $judul      = clean($_GET['judul']);
    $syntax     = 'WHERE' ;
    if (!empty($judul))         { $syntax .= " bukuJudul LIKE '%".$judul."%' AND"; }
    if (strlen($syntax)===5)    { $syntax  = ""; }
    else                        { $syntax  = substr($syntax,0,-4); }
    $hasil   = array();
    $result  = array();
    $sql     = "SELECT COUNT(*) AS 'JumlahPencarian' FROM Buku ".$syntax;
    $data    = mysqli_query($conn, $sql);
    $result['JumlahHasil']= mysqli_fetch_array($data)[0];
    $result['startFrom']  = $start;
    $result['endOn']      = $start+$limit;
    $sql     = "SELECT `id`, `bukuJudul`, `bukuPenulis`, `bukuPenerbit`, `KodeBuku` FROM Buku " .$syntax." ";
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