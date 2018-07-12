<?php
session_start();
include ('konfigurasi/koneksi.php');
$id_pelogin     = $_SESSION['id'];
$last           = $_SESSION['masuk'];
$sql = $koneksi->query("UPDATE tb_pengguna SET terakhir_masuk = '$last' WHERE id_pengguna='$id_pelogin'");
session_destroy();
header( "location:masuk.php" );
?>