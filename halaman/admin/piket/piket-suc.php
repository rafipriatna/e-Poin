
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Piket</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Piket</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
                 <div class="row">
			<div class="col-md-6">
                         <div class="card">
                             <div class="card-header">
                                 <strong class="card-title">Cari Manual</strong>
                             </div>
                            <div class="card-body">Cari berdasarkan nama siswa<br><br>
                            <form method="POST" class="col-sm-12">
                                <div class="form-group">
                                    <input name="nama_siswa" type="text" class="form-control" required="" autofocus="">
                                </div>
                            </form></div>
                            <div class="card-footer">
                                <button name="simpan" type="submit" class="btn btn-primary btn-sm">
                                  <i class="fa fa-sign-in"></i> Pindai
                                </button>
                            </div>
                        
                        </div>
                     <div class="col-md-6">
                         <div class="card">
                             <div class="card-header">
                                 <strong class="card-title">Pindai kartu pelajar</strong>
                             </div>
                            <div class="card-body">
                         Silakan pindai kartu pelajar atau ketik manual NIS.<br/><br/>
                            <form method="POST" class="col-sm-3">
                                <div class="form-group">
                                    <input name="pindai" type="number" class="form-control" required autofocus/>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button name="simpan_nama" type="submit" class="btn btn-primary btn-sm">
                                  <i class="fa fa-sign-in"></i> Pindai
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        
<?php
if(isset($_POST['simpan'])){
    $pindai  = $_POST['pindai'];

    $sql     = $koneksi->query("SELECT * FROM tb_pelajar WHERE nis_pelajar = '$pindai'");
    $hasil   = $sql->fetch_assoc();
    $tujuan  = $hasil['nis_pelajar'];
    $cek     = $sql->num_rows;

    if($cek){
        ?>
        <script type="text/javascript">
         window.location.href="?halaman=piket&aksi=pindai&nis=<?php echo $tujuan;?>";
        </script>
        <?php
    }
	else{
        ?>
        <script type="text/javascript">
        alert("Pelajar tidak ditemukan!");
        </script>
        <?php
    }
} 
if(!empty($_POST['simpan_nama'])){
    $nama_siswa = $_POST['nama_siswa'];
	?>
<?php echo $nama_siswa;?>
<?php
    $sql     = $koneksi->query("SELECT * FROM tb_pelajar WHERE nama_pelajar LIKE '%$nama_siswa%'");
    $hasil   = $sql->fetch_assoc();
    $tujuan  = $hasil['nis_pelajar'];
    $cek     = $sql->num_rows;

    if(0){
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
}

?>
