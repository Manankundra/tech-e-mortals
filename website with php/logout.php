<?php
session_start();

session_unset();
session_destroy();

header("location: login.php");
exit;
?>
<html>
    <head>
        <body>
        <style>
    body{
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image:url('imgs.jpeg');
        background-size:cover;
        background-position:center;
    }
 </style>
        </body>
    </head>
</html>