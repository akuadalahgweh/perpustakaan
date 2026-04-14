<?php
$server = "localhost";
$pengguna ="root";
$password = "";
$database = "perpustakaan";

$koneksi = mysqli_connect($server,$pengguna,$password,$database);
if(!$koneksi){
    die ("koneksi error : ".mysqli_connect_error());
}