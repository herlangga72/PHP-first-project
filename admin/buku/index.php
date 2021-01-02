<?php require_once('../proofuser.php'); ?>
<!-- bar ketruron mmaf aku ngoding lagi set 7 samapai jam 2 -->
<html lang="en">
<head>
  <base href="http://127.0.0.1/">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="static/jquery-ajax.js" type="text/javascript"></script>
  <link rel="stylesheet" href="/static/tailwind.css">
  <title>Admin Pamel</title>
</head>
<body class="bg-gray-300" >
    <form id='cari' method="GET" class="grid grid-cols-2 gap-10">
        judul     <input type="text" name="judul" >
        pengarang <input type="text" name="pengarang">
        penerbit  <input type="text" name="penerbit">
        tahun     <input type="text" name="tahunTerbit">
        <select name="limit">
            <option value="1">10</option>
            <option value="2">15</option>
            <option value="3" selected>20</option>
            <option value="4">30</option>
        </select>
        <input type="submit" class="bg-blue-300 px-6 py-1 rounded-full">
        <div id="result" class="flex flex-col space-4"></div>
    </form>
</body>
<script>
    var result;
    result = document.getElementById('result');
    $(document).ready(function() {
        $('#cari').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: 'admin/buku/cari_buku_engine_reduced.php',
                dataType: 'json',
                success: function(response) {
                    var jsonData = response;
                    console.log(jsonData);
                    var text = "";
                    for (i = 0; i < jsonData.hasil.length; i++){
                        text += "<div class='flex flex-col p-5'>";
                        text += "<ul>" + jsonData.hasil[i].bukuJudul    + "</ul>";
                        text += "<ul>" + jsonData.hasil[i].KodeBuku     + "</ul>";
                        text += "<ul>" + jsonData.hasil[i].bukuPenulis  + "</ul>";
                        text += "<ul>" + jsonData.hasil[i].bukuPenerbit + '</ul>';
                        text += "</div>"
                    }
                    document.getElementById('result').innerHTML = text;
                }
            });
        });
    });
</script>
</html>