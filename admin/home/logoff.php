<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <base href="http://127.0.0.1/"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>
<?php
function logoff(){
    session_start();
    session_destroy();
    echo "<script>window.location.replace('../../admin/login/');</script>";
}
logoff()
?>