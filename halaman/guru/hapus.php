<?php
$id_pengguna    = (int) $_GET['id'];
$hapus          = $koneksi->query("DELETE * FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'");
if($hapus){
    ?>
    <script type="text/javascript">
    alert ("Pengguna berhasil dihapus!");
    window.location.href = "?halaman=guru";
    </script>
    <?php
}
?>