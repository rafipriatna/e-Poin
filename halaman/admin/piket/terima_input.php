<pre>
            <?php var_dump($_POST); ?>
        </pre>
<?php
include ('konfigurasi/koneksi.php');
if($_POST["simpan"] == "mindai bre"){
    $pindai  = $_POST['pindai'];
    $sql     = $koneksi->query("SELECT * FROM tb_pelajar WHERE nis_pelajar = '$pindai'");
    $hasil   = $sql->fetch_assoc();
    $tujuan  = $hasil['nis_pelajar'];
    $cek     = $sql->num_rows;
    ?>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
<?php
    if($cek){
        ?>
        <pre>
            <?php var_dump($cek); ?>
        </pre>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
<script type="text/javascript">
    window.location.href = "?halaman=piket&aksi=pindai&nis=<?php echo $tujuan;?>";
</script>
<?php
    }else{
        ?>
<script type="text/javascript">
    window.location.href = "index.php?halaman=piket";
    alert("Pelajar tidak ditemukan!");
</script>
<?php
    }
} 
?>
<?php
if($_POST["namasiswa"] == "mindai bre"){
    $pindai  = $_POST['nama_pelajar'];
    $sql     = $koneksi->query("SELECT nis_pelajar FROM tb_pelajar WHERE nama_pelajar = '$pindai'");
    $hasil   = $sql->fetch_assoc();
    $tujuan  = $hasil['nis_pelajar'];
    $cek     = $sql->num_rows;
    ?>
        <pre>
            <?php var_dump($_GET); ?>
        </pre>
	<pre>
		<?php var_dump($pindai); ?>
	</pre>
<?php
    if($cek){
        ?>
        <pre>
            <?php var_dump($cek); ?>
        </pre>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
<script type="text/javascript">
    window.location.href = "?halaman=piket&aksi=pindai&nis=<?php echo $tujuan;?>";
</script>
<?php
    }else{
        ?>
<script type="text/javascript">
    window.location.href = "index.php?halaman=piket";
    alert("Pelajar tidak ditemukan!");
</script>
<?php
    }
} 
?>
