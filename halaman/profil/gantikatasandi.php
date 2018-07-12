<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ganti kata sandi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Profil</li>
                            <li class="active">Ganti kata sandi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
            <div class="content mt-3">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ganti kata sandi</strong>
                            </div>
                            <div class="card-body card-block">
                                <form method="POST">
                                            <div class="form-group">
                                                <label class=" form-control-label">Kata sandi lama</label>
                                                <input name="lama" type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Kata sandi baru</label>
                                                <input name="baru" type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Konfirmasi kata sandi baru</label>
                                                <input name="konfirm" type="password" class="form-control">
                                            </div>
                                        </div>
                                    <div class="card-footer">
                                            <button name="simpan" type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-dot-circle-o"></i> Simpan
                                            </button>
                                          </div>
                                    </div>
                                </form>
<?php
    // Jika tombol simpan di klik.
        if (isset($_POST['simpan'])) {
            $pass_lama    = $_POST['lama'];
            $pass_baru    = $_POST['baru'];
            $konfirmpass  = $_POST['konfirm'];
            // Buat hash buat password yang baru
            $passfix        = password_hash($pass_baru, PASSWORD_DEFAULT);

            $cek 			= $koneksi->query("SELECT * FROM tb_pengguna WHERE id_pengguna = '$_SESSION[id]'");
            $data 			= mysqli_num_rows($cek);
            
            if($data  == 1){
            // Ngambil kecocokan dari database.
                $row = $cek->fetch_assoc();
            // Cek panjang password
                if(strlen($pass_baru) <= 6){
                echo "<script type='text/javascript'>alert('Panjang password minimal 6 karakter!');</script>";
                }else{
            // Jika pass baru sama konfirmasi nya cocok.
                if($pass_baru == $konfirmpass){
            // Jika pass lama cocok sama yang di database.
                if(password_verify($pass_lama, $row['pass_pengguna'])){
                $update 		= $koneksi->query("UPDATE tb_pengguna SET pass_pengguna='$passfix' WHERE id_pengguna='$_SESSION[id]'");
                echo "<script type='text/javascript'>alert('Berhasil ganti password!'); window.location.href='index.php';</script>";
            // Jika pass lama tidak cocok sama yang di database.
                }else{
                    echo "<script type='text/javascript'>alert('Password lama tidak cocok!');</script>";
                }
            // Jika konfirmasi pass tidak cocok sama pass yang baru.
                }else{
                echo "<script type='text/javascript'>alert('Password konfirmasi tidak cocok!');</script>";
                }
            }
        }
    }
    ?>