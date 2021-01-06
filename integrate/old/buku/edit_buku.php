<?php 
    require_once('../proofuser.php');
    include('../access_db.php'); 
    connect_db();
    $sql    = "SELECT * FROM Buku WHERE id=" . $_GET['id'] ;
    $data   = mysqli_query($conn, $sql);
    $row    = mysqli_fetch_array($data);
?>
<html lang="en">
    <head>
        <base href="127.0.0.1/">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="/static/tailwind.css"> -->
    </head>
    <body>
        <form action="submit" method="get" style="display:flex;flex-direction: column;">
            <label for="cID">id</label>
            <input type="text" id="cID" value="<?php echo $row['id']; ?>" disabled >
            <label for="bukuJudul">Judul Buku</label>
            <input type="text" name="bukuJudul" id="bukuJudul" value="<?php echo $row['bukuJudul']; ?>">
            <label for="bukuPenulis">Penulis</label>
            <input type="text" name="bukuPenulis" id="bukuPenulis" value="<?php echo $row['bukuPenulis']; ?>">
            <label for="bukuPenerbit">Penerbit</label>
            <input type="text" name="bukuPenerbit" id="bukuPenerbit" value="<?php echo $row['bukuPenerbit']; ?>">
            <label for="bukuTahunTerbit">Tahun Terbit</label>
            <input type="text" name="bukuTahunTerbit" id="bukuTahunTerbit" value="<?php echo $row['bukuTahunTerbit']; ?>">
            <label for="KodeBuku">Kode Buku</label>
            <input type="text" name="KodeBuku" id="KodeBuku" value="<?php echo $row['KodeBuku']; ?>">
            <label for="cDiedit">Terakhir Diedit</label>
            <input type="text" id="cDiedit" value="<?php echo $row['Diedit']; ?>" disabled >
            <label for="cDimasukan">Data Dimasukan</label>
            <input type="text" id="cDimasukan" value="<?php echo $row['Dimasukan']; ?>" disabled >
            <button type="reset">Reset Perubahan</button>
            <button type="submit">Simpan Perubahan</button>
        </form>
    </body>
    <?php close_db(); ?>
</html>