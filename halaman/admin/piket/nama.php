<?php
    $nama  = $_POST['namasiswa'];
    $sql     = $koneksi->query("SELECT * FROM tb_pelajar WHERE nis_pelajar = '$nama'");
    $hasil   = $sql->fetch_assoc();
    $tujuan  = $hasil['nis_pelajar'];
    $cek     = $sql->num_rows;
    if($cek){
        ?>
        <script type="text/javascript">
        window.location.href="?halaman=piket&aksi=pindai&nis=<?php echo $tujuan;?>";
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
        alert("Pelajar tidak ditemukan!");
        </script>
        <?php
    }
?>
