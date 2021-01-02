<?php require_once('../proofuser.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://127.0.0.1/">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/static/tailwind.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
                #imgBg{
                    background-image: url('static/HOME.jpeg');
                    background-size: cover;
                    height: 50vh;
                
                }
                *{
                  font-family: 'Open Sans', sans-serif;
                }
        </style>
        <title>Admin Panel</title>
    </head>
    <body class="max-w-7xl m-auto shadow-2xl">
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
                <a class="flex font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <span class="ml-3 text-xl" >Admin Panel</span>
                </a>
                <form action="/admin/home/logoff.php" method="POST">
                    <button type="submit" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"> Logout
                        <img src="/static/login-24px.svg" alt="Logout-icon">
                    </button>
                </form>
            </div>
        </header>
        <section class="text-gray-600 body-font">
            <div class=" mx-auto flex px-5 py-5 md:flex-row flex-col items-center">
              <div class="lg:flex-grow pl-0 pl-0 flex flex-col md:items-start md:text-left items-center text-center">
                <div id=imgBg class="w-full flex flex-row-reverse mx-auto mr-0">
                  <div class="my-auto flex flex-col space-y-5">
                    <p class="bg-white  sm:text-xl text-lg p-2 rounded-lg font-thin text-gray-900 ">Selamat Datang Di</p>  
                    <h1 class="bg-white m-auto mr-10 sm:text-4xl text-3xl p-5 rounded-lg font-medium text-gray-900 ">Perpustakaan Karangbangun</h1> 
                  </div>
                </div>
              </div>
            </div>
        </section>
        <div class="w-full h-0.5 bg-gray-200 "></div>
        <section class="text-gray-600">
          <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-2xl font-medium text-gray-900">Admin Menu</h1>
            </div>
            <div class="flex flex-wrap -m-4">
              <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                  <div class="flex justify-between">
                    <h2 class="text-gray-900 text-lg  font-medium">Anggota</h2>
                    <a href="admin/anggota/" class="mt-3 text-blue-500 inline-flex items-center">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    </div>
                  <div class="flex-grow">
                    <p class="text-base"> > Tambah Anggota</p>
                    <p class="text-base"> > Edit Keanggotaan</p>
                    <p class="text-base"> > Hapus Keanggotaan</p>
                    <p class="text-base"> > Reset Keanggoatan</p>
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                  <div class="flex justify-between">
                    <h2 class="text-gray-900 text-lg font-medium">Buku</h2>
                    <a href="admin/buku/" class="mt-3 text-blue-500 inline-flex items-center">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    </div>
                  <div class="flex-grow">
                    <p class="text-base"> > Tambah Buku</p>
                    <p class="text-base"> > Edit Informasi Buku</p>
                    <p class="text-base"> > Ubah Status ( Hilang / Rusak)</p>
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                  <div class="flex justify-between">
                    <h2 class="text-gray-900 text-lg font-medium">Peminjaman</h2>
                    <a href="admin/peminjaman/" class="mt-3 text-blue-500 inline-flex items-center">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    </div>
                  <div class="flex-grow">
                    <p class="text-base"> > Peminjaman Buku</p>
                    <p class="text-base"> > Pengembalian Buku</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="text-gray-600">
          <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
              © 2020 Web Dinamis tea
            </p>
            </span>
          </div>
        </footer>
    </body>
</html>