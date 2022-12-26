<?php
    $server   = "localhost";    
    $username = "root";         
    $password = "";   
    $database = "ukk_perpustakaan";          

    
    $connect_db = mysqli_connect($server, $username, $password, $database);
    if (! $connect_db)
    {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>