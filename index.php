<?php
session_start();
include ('konfigurasi/koneksi.php');
$judul  = "Beranda";
if (!isset($_SESSION['id'])) {
    header("location: masuk.php");
}else {
    
    if(isset($_SESSION['waktu']) && (time() - $_SESSION['waktu'] > $_SESSION['habis'] )) {
        echo 'Kamu diem aja selama 30 Menit, silahkan <a href="masuk.php">masuk</a> lagi.';
        session_destroy();
    }else {
// Tiap masuk ke halaman, akan selalu di refresh waktu nya.
// Jik pengguna diem aja sampai waktu habis, maka akan di matikan session nya.
$_SESSION['waktu'] = time();
include ('tata_letak/atas.php');
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
</body>
<?php
include ('tata_letak/bawah.php')
?>
</html>
<?php
    }
}
?>