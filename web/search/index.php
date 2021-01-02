<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <base href="http://127.0.0.1"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../static/tailwind.css">
        <script src="../../static/jquery-ajax.js" type="text/javascript"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
          #imgBg {
              background-image: url('../../static/HOME.jpeg');
              background-size: cover;
              height: 50vh;
          }
          *{font-family: 'Open Sans', sans-serif;}
        </style>
        <title>Document</title>
    </head>
    <body class="max-w-7xl m-auto shadow-2xl">
      <header class="text-gray-600 body-font sticky top-0 bg-white z-10 shadow-lg">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
          <a class="flex font-medium items-center text-gray-900 mb-4 md:mb-0">
              <span class="ml-3 text-xl" >Perpustakaan Karangbangun</span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900">Home</a>
            <a class="mr-5 hover:text-gray-900">Pencarian</a>
            <a class="mr-5 hover:text-gray-900">About</a>
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"> Logout
            <img src="../../static/login-24px.svg" alt="Logout-icon">
          </button>
        </div>
      </header>
      <section class="text-gray-600 body-font">
          <div class=" mx-auto flex px-5 py-5 md:flex-row flex-col items-center">
            <div class="lg:flex-grow pl-0 pl-0 flex flex-col md:items-start md:text-left items-center text-center">
              <div id=imgBg class="w-full flex flex-row-reverse mx-auto mr-0">
                <div class="my-auto flex flex-col space-y-5">
                  <p class="bg-white  sm:text-xl text-lg p-2 rounded-lg font-thin text-gray-900 ">Perpustakaan Karangbangun</p>  
                  <h1 class="bg-white m-auto mr-10 sm:text-4xl text-3xl p-5 rounded-lg font-medium text-gray-900 ">Pencarian Buku</h1> 
                </div>
              </div>
            </div>
          </div>
      </section>
      <div class="w-full h-0.5"></div>
      <section class="text-gray-600 w-full">
        <form method="GET" id="cari" class="flex w-full justify-center items-end py-14">
          <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
            <label for="bukuJudul" class="leading-7 text-sm text-gray-600">Search</label>
            <input type="text" id="bukuJudul" name="judul" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>  
          <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
        </form>
        <div id="result" class="px-20 py-10 bg-gray-200 mt-8 flex flex-col space-6 hidden">
        </div>
      </section>
      <footer class="text-gray-600">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
            © 2020 Web Dinamis Kelompok
          </p>
          </span>
        </div>
      </footer>
    </body>
    <script>
      var result;
      result = document.getElementById('result');
      $(document).ready(function() {
        $('#cari').submit(function(e) {
          e.preventDefault();
          $.ajax({
            type:     "GET",
            url:      '../../admin/buku/cari_buku_engine.php',
            dataType: 'json',
            success:  function(response) {
              document.getElementById("result").classList.remove("hidden");
              var jsonData = response;
              console.log(jsonData);
              var text = "";
              for (i = 0; i < jsonData.hasil.length; i++){
                text += "<div class='flex flex-col p-5 bg-gray-50 rounded-lg my-4'>" ;
                text += "<ul> Judul : "     + jsonData.hasil[i].bukuJudul    + "</ul>";
                text += "<ul> Kode buku : " + jsonData.hasil[i].KodeBuku     + "</ul>";
                text += "<ul> Pengarang : " + jsonData.hasil[i].bukuPenulis  + "</ul>";
                text += "<ul> Penerbit : "  + jsonData.hasil[i].bukuPenerbit + '</ul>';
                text += "</div>"
              }
              document.getElementById('result').innerHTML = text;
            }
          });
        });
      });
  </script>
</html>