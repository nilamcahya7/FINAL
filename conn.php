<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'pendaftaran';

    $con = mysqli_connect ($host, $user, $pass, $db);
    if (!$con) {
        echo "Gagal";
    }

?>