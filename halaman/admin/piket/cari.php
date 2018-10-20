<?php
    include ('../../../konfigurasi/koneksi.php');
    $search = $_POST['search'];
    $sql     = $koneksi->query("SELECT nama_pelajar FROM tb_pelajar WHERE LOWER(nama_pelajar) LIKE '%$search%' ORDER BY nama_pelajar ASC");
    $cek     = $sql->num_rows;
    $daftarNama = array();
    $response = "<ul style='list-style-type: none;'>";

    if($cek >= 0){
        while($row = $sql->fetch_assoc()){
            $response .= "<li>".$row['nama_pelajar']."</li>";
        }
    }

    $response .= "</ul>";
    echo $response;
?>