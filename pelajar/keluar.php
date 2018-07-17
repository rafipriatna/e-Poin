<?php
session_start();
include ('../konfigurasi/koneksi.php');
$id_pelajar     = $_SESSION['id'];
$last           = $_SESSION['masuk'];
$koneksi->query("UPDATE tb_pelajar SET terakhir_masuk= '$last' WHERE id_pelajar='$id_pelajar'");
session_destroy();
header( "location:../masuk.php" );
?>