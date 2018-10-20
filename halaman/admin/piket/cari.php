<?php
    include ('../../../konfigurasi/koneksi.php');
    $search = $_POST['search'];
    $sql     = $koneksi->query("SELECT nama_pelajar FROM tb_pelajar WHERE LOWER(nama_pelajar) LIKE '%$search%' ORDER BY nama_pelajar ASC");
    $cek     = $sql->num_rows;
    $daftarNama = array();
    $response = "<ul style='list-style-type: none;'>";
    $i = 1;
    if($cek >= 0){
        while($row = $sql->fetch_assoc()){
            $response .= "<li><a href='javascript:Result{$i}()');' id=\"$i\">".$row['nama_pelajar']."</a></li>";
	    $i++;
        }
    }

    $response .= "</ul>";
    echo $response;
?>
