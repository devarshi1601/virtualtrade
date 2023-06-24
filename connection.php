<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practise2trade";

$conn = mysqli_connect($servername,$username,$password,$dbname );

if($conn)
{
   // echo"connected successfully";
}else{
    echo "connection failed" .mysqli_connect_error();
}
?>