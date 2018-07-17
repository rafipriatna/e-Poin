<?php
include ('../konfigurasi/koneksi.php');
session_start();
$sql = $koneksi->query("SELECT * FROM tb_pelajar WHERE id_pelajar = '$_SESSION[id]'");
$x   = $sql->fetch_assoc();
if (!isset($_SESSION['id'])) {
    header("location: ../masuk.php");
}else {
    ?>
Halo <?php echo $x['nama_pelajar'];?>
<a href="keluar.php">Keluar</a>
<?php }
 ?>