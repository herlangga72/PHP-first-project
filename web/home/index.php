<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <base href="http://127.0.0.1"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/static/css/tailwind.css">
        <script src="/static/js/jquery-ajax.js" type="text/javascript"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
          #imgBg {
              background-image: url('../../static/HOME.jpeg');
              background-size: cover;
              height: 50vh;
              }
          *{
            font-family: 'Open Sans', sans-serif;
          }
        </style>
        <title>Document</title>
    </head>
    <body class="max-w-7xl m-auto shadow-2xl">
        <header class="text-gray-600 body-font">
          <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
            <a class="flex font-medium items-center text-gray-900 mb-4 md:mb-0">
                <span class="ml-3 text-xl" >Perpustakaan Karangbangun</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
              <a class="mr-5 hover:text-gray-900">Home</a>
              <a class="mr-5 hover:text-gray-900">Pencarian</a>
              <a class="mr-5 hover:text-gray-900">About</a>
            </nav>
          </div>
        </header>
        <section class="text-gray-600 bg-gray-200 ">
        <div class="container px-5 py-24 mx-auto">
          <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">About US</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500">Ini Produknya, Kami Membuat ini dalam 3 minggu, melewati tahun baru dalam ngoding. Jadi apa yg kami dapat adalah suatu cara untuk membuat web ? komponen disini sedikit. </p>
            <div class="flex mt-6 justify-center">
              <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
            </div>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6" id="id">
          <script>
            index=[['Herlangga Yusuf Syailendra','Backend Dev','Seseorang yang memiliki obsesi terhadap sesuatu yg jarang dipakai / mendalami dokumentasi yang di sediakan dari developer lain L200180186','https://github.com/herlangga72'],
            ['Damping Wisnu Adji','Frontend Dev','Bukan siapa-siapa, Hanya lewat','https://github.com/Damping-adji'],
            ['Anita Lusi Romadhon','Design UI','Seorang mahasiswi dari universitas Muhammadiyah Surakarta','https://github.com/L200180153']];
            text=''
            for (i = 0; i < index.length; i++){
              text+=''+
                '<div class="p-4 md:w-1/3 flex flex-col text-center items-center">'+
                //'<div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0"></div>'+
                '<div class="flex-grow">'+
                '<h2 class="text-gray-900 text-lg title-font font-medium mb-3">'+index[i][0]+'</h2>'+
                '<h3 class="text-gray-900 text-base title-font font-medium mb-3">'+index[i][1]+'<h3>'+
                '<p class="leading-relaxed text-base">'+index[i][2]+'</p>'+
                '<a target="_blank" href="'+index[i][3]+'" class="mt-3 text-indigo-500 inline-flex items-center">Github'+
                '  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">'+
                '    <path d="M5 12h14M12 5l7 7-7 7"></path>'+
                '  </svg>'+
              '</a>'+
              '</div>'+
              '</div>';
            }
            document.getElementById('id').innerHTML=text
          </script>
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
</html>