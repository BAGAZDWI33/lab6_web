<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_web";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "Koneksi berhasil";
