<?php 
session_start();
$nama = $_SESSION['username'];
$jam =  $_SESSION['jam'];
echo "Hai $nama anda login pada pukul $jam";
?>