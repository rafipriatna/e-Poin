<?php
    $pindai = $_GET['nis'];
?>
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
                            <li><a href="?halaman=piket">Piket</a></li>
                            <li class="active">Pelajar</li>
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
                                 <strong class="card-title">Data pelajar</strong>
                             </div>
                            <div class="card-body">
                                Hello <?php echo $pindai;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>