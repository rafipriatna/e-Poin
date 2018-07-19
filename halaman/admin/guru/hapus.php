<?php
    $rafi = $_GET['id'];
// Hapus id pelajarnya.
    $koneksi->query("DELETE FROM tb_pengguna WHERE id_pengguna = '$rafi'");
?>
         <script type="text/javascript">
            alert("Data berhasil dihapus!");
            window.location.href="?halaman=guru";
        </script>
