<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Guru</li>
                            <li class="active">Ubah Guru</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $id_pengguna    = (int) $_GET['id'];
            $sql            = $koneksi->query("SELECT * FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'");
            $pengguna       = $sql->fetch_assoc();
        ?>
            <div class="content mt-3">
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profil saya</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" style="width:85px; height:85px;" src="gambar/profil/guru/<?php echo $pengguna['foto_pengguna']?>" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $pengguna['nama_pengguna']?></h5>
                                    <div class="location text-sm-center"><i class="fa fa-lightbulb-o"></i> <?php echo $pengguna['level_pengguna']?></div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>