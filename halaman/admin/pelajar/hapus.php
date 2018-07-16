<?php
$id_pelajar = (int) $_GET['id'];
$koneksi->query("DELETE * FROM tb_pelajar WHERE id_pelajar = '$id_pelajar'");
?>
    <script type="text/javascript">
    alert ("Pelajar berhasil dihapus!");
    window.location.href = "?halaman=pelajar";
    </script>
<?php
?>