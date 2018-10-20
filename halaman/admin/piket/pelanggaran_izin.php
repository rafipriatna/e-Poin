<?php
    if($_POST['tambah-pelanggaran'] == "tambah"){
        $id_pelanggaran = $_POST['jenis-pelanggaran'];
        $id_guru        = $_SESSION['id'];
        $setting        = new DateTime('NOW', new DateTimeZone('Asia/Jakarta'));
        $tanggal        = $setting->format('Y-m-d H:i:s');
        // Cek poin.
        $lihat          = $koneksi->query("SELECT * FROM tb_pelanggaran
        WHERE id_pelanggaran = '$id_pelanggaran'");
        $data           = $lihat->fetch_assoc();
        $poin           = $data['poin_pelanggaran'];
        // Data dimasukan ke table data pelanggar.
        $koneksi->query("INSERT INTO tb_datapelanggar (id_pelajar, id_pelanggaran, poin_pelanggaran,
        id_guru, tanggal_pelanggaran) VALUES ('$id', '$id_pelanggaran', '$poin', '$id_guru', '$tanggal')");
        // Tambah poin di table pelajar.
        $koneksi->query("UPDATE tb_pelajar SET poin_pelajar=(poin_pelajar + $poin) WHERE id_pelajar='$id'");
        ?>
         <script type="text/javascript">
         alert("Data berhasil disimpan!");
         window.location.href="?halaman=piket&aksi=pindai&nis=<?php echo $pindai;?>";
         </script>
         <?php
    }
    if(isset($_POST['tambah-izin'])){
        $nama           = $_POST['nama_dispen'];
        $desk           = $_POST['deskripsi_dispen'];
        $darikapan      = $_POST['dari_kapan'];
        $sampaikapan    = $_POST['sampai_kapan'];
        $id_guru        = $_SESSION['id'];
        $setting        = new DateTime('NOW', new DateTimeZone('Asia/Jakarta'));
        $tanggal        = $setting->format('Y-m-d H:i:s');
        // Data dimasukan ke table data dispensasi.
        $koneksi->query("INSERT INTO tb_datadispen (id_pelajar, nama_dispen, deskripsi_dispen,
        id_guru, dari_kapan, sampai_kapan, tgl_dibuat)
        VALUES ('$id', '$nama', '$desk', '$id_guru', '$darikapan', '$sampaikapan', '$tanggal')");
        $id_dispen = $koneksi->insert_id;
        ?>
         <script type="text/javascript">
         window.location.href="?halaman=piket&aksi=pindai&nis=<?php echo $pindai;?>";
         window.open('halaman/admin/piket/cetak.php?id=<?php echo $id_dispen; ?>
         &guru=<?php echo $id_guru;?>', 'mywindow', 'toolbar=0,scrollbars=1,statusbar=0,menubar=0,resizable=0,height=500,width=420');
         </script>
         <?php
    }
?>