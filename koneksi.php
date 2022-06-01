<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010121";
$db = "klinik_312010121";
$conn = mysqli_connect ($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die ();
} #else echo "Koneksi berhasil";
?> 