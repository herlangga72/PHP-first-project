<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <base href="http://127.0.0.1"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../static/tailwind.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
                #imgBg{
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
        <header class="text-gray-600 body">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
                <a class="flex font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <span class="ml-3 text-xl" >Admin Panel</span>
                </a>
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
                    <p class="bg-white  sm:text-xl text-lg p-2 rounded-lg font-thin text-gray-900 ">Selamat Datang Di</p>  
                    <h1 class="bg-white m-auto mr-10 sm:text-4xl text-3xl p-5 rounded-lg font-medium text-gray-900 ">Perpustakaan Karangbangun</h1> 
                  </div>
                </div>
              </div>
            </div>
        </section>
        <div class="w-full h-0.5 bg-gray-200 "></div>