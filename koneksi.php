<?php
    // membuat koneksi database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db ='tb';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'eror : '.mysqli_connect_eror($conn);
    }

 ?>   