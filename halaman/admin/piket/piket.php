<link rel="stylesheet" type="text/css" href="jquery.ajaxcomplete.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

   <!-- Including our scripting file. -->

<script type="text/javascript" src="halaman/admin/piket/script.js"></script>
<script>
	function Result1() {
	document.getElementById("namapelajar").value = $("#1").text();
	$('#display').html('');
	}
	function Result2() {
 	document.getElementById("namapelajar").value = $("#2").text();
	$('#display').html('');
	}
	function Result3() {
 	document.getElementById("namapelajar").value = $("#3").text();
	$('#display').html('');
	}
	function Result4() {
	document.getElementById("namapelajar").value = $("#4").text();
	$('#display').html('');
	}
	function Result5() {
	document.getElementById("namapelajar").value = $("#5").text();
	$('#display').html('');
	}
</script>
<div class="content mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Pindai kartu pelajar</strong>
                </div>
                <div class="card-body">
                    Silakan pindai kartu pelajar atau ketik manual NIS.<br /><br />
                    <form method="POST" action="index.php?halaman=piket&aksi=terimainput" class="col-sm-3">
                        <div class="form-group">
                            <input name="pindai" type="number" class="form-control" required autofocus />
                        </div>
                </div>
                <div class="card-footer">
                    <button value="mindai bre" name="simpan" type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-sign-in"></i> Pindai
                    </button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Cari nama Siswa</strong>
                </div>
                <div class="card-body">
                    Cari siswa berdasarkan Nama<br /><br />
                    <form method="POST" action="index.php?halaman=piket&aksi=terimainput" class="col-sm-6">
                        <div class="form-group">
                            <input name="nama_pelajar" id="namapelajar" class="form-control" placeholder="Cari nama" autocomplete="off" />
                        </div>
			<div id="display"></div>
                </div>
                <div class="card-footer">
                    <button value="mindai bre" name="namasiswa" type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-sign-in"></i> Pindai
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

