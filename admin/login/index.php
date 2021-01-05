<?php
  session_start();
  if (isset($_SESSION['isLogin'])){
    echo "<script>window.location.replace('/admin/home/');</script>" ;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="http://127.0.0.1/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/static/js/jquery-ajax.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/static/tailwind.css">
    <title>Document</title>
  </head>
  <body class="flex justify-items-center h-screen w-screen">
      <div class="bg-gray-300 m-auto w-96 h-auto opacity-100 text-center p-10 flex rounded-3xl">
        <form id="loginform" method='POST' class="flex flex-col space-y-3 m-auto">
          <p class="text-xl">Admin Panel</p>
          <p id="result" class="text-sm"></p>
          <input type="text" name="username" id="username" placeholder="username" class="py-1.5 px-3 text-sm rounded-md" required>
          <input type="password" name="password" id="password" placeholder="password" class="py-1.5 px-3 text-sm rounded-md" required>
          <input type="submit" class="bg-blue-300 px-6 py-1 rounded-full" value="Login">
        </form>
    </div>
  </body>
  <script src="/static/js/login_interface.js" type="text/javascript"></script>
</html>