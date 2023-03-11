<?php 
    $hostname = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'damansi';

    $con = mysqli_connect($hostname,$user,$pass,$db);

    if(!$con){
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }
?>