<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "website1";

$mysqli = new mysqli($host, $user, $pass, $db);
    
if($mysqli->connect_error) {
    die("connection failed: ".$mysqli->connect_error);
}

date_default_timezone_set('Asia/Jakarta');

$nama_hari = array ("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hari = date("w");
$hari_ini = $nama_hari[$hari];

$tgl_sekarang = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("y");

$tanggal = date('ymd');
$jam = date("H:i:s");

?>