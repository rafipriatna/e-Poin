<?php
$host   = "localhost";
$user   = "epoin";
$pass   = "bismillah";
$db     = "epoin";

$koneksi = new mysqli("$host", "$user", "$pass", "$db");
if (mysqli_connect_error())
  {
  echo "Waduh error gan :( </br> " . mysqli_connect_error();
  }
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$ambil = $_GET['term'];
$dari  = $koneksi->query ("SELECT * FROM tb_pelajar WHERE nama_pelajar LIKE '%".$ambil."%'");

while ($row = $dari->fetch_assoc()) {
    $data[] = $row['nama_pelajar'];
}
echo json_encode($data);
?>

