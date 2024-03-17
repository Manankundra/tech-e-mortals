<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "user40";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
  //   echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
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