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
             <div class="animated fadeIn">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong class="card-title">Pindai kartu pelajar</strong>
                             </div>
                            <div class="card-body">
                         Silakan pindai kartu pelajar atau ketik manual NIS.<br/><br/>
                            <form method="POST" class="col-sm-3">
                                <div class="form-griup">
                                    <input name="pindai" type="number" class="form-control"/>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button name="simpan" type="submit" class="btn btn-primary btn-sm">
                                  <i class="fa fa-sign-in"></i> Pindai
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
if(isset($_POST['simpan'])){
    $pindai = $_POST['pindai'];

    $cek    = $koneksi->query("SELECT * FROM tb_pelajar WHERE nis_pelajar = '$pindai'");
    $hasil  = $cek->fetch_assoc();
    $tujuan = $hasil['nis_pelajar'];

    if($cek){
        ?>
        <script type="text/javascript">
        window.location.href="?halaman=piket&aksi=pindai&nis=<?php echo $tujuan;?>";
        </script>
        <?php
    }
}
?>