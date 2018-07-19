<?php
    $rafi = $_GET['id'];
// Hapus id pelajarnya.
    $koneksi->query("DELETE FROM tb_pelajar WHERE id_pelajar = '$rafi'");
?>
         <script type="text/javascript">
            alert("Data berhasil dihapus!");
            window.location.href="?halaman=pelajar";
        </script>
        <?php
?>