<?php
	include ('koneksi.php');
	// Proses masuk.
	// Ribet banget ini codenya wkwk.
	if(isset($_POST['masuk'])){
		$username 		= mysqli_real_escape_string($koneksi, trim($_POST['username']));
		$password 		= mysqli_real_escape_string($koneksi, trim($_POST['katasandi']));
		// Cek username dari database.
		$cek 			= $koneksi->query("SELECT * FROM tb_pengguna WHERE (username_pengguna = '".$username."' OR surel_pengguna = '".$username."')");
		$data 			= $cek->num_rows;

		if($data  == 1){
			$row = $cek->fetch_assoc();
			// Meriksa password dari database.
			if(password_verify($password, $row['pass_pengguna'])){
				$id_pelogin				= $row['id_pengguna'];
				$level_pelogin			= $row['level_pengguna'];
				session_start();
				$_SESSION['id']			= $id_pelogin;
				$_SESSION['level'] 		= $level_pelogin;
				// Mengambil waktu last login.
				$setting    			= new DateTime('NOW', new DateTimeZone('Asia/Jakarta'));
				$waktu					= $setting->format('Y-m-d g:i:s');
				$_SESSION['masuk']		= $waktu;
				// Diberi waktu 30 x 60 detik. ( 30 Menit ).
				$_SESSION['habis'] 		= 30 * 60;
			// Jika password cocok dengan yang di database.
			// Cek level.
			if($level_pelogin == 'Admin'){
					header('location:../index.php');
				}elseif($level_pelogin == 'Guru'){
					header('location:../index.php');
					}
				}else{
            // Jika password dan username tidak cocok dengan yang di database.
				echo "<script type='text/javascript'>alert('Username atau password salah!'); window.location.href='../masuk.php';</script>";
				}
			// Jika username dan password tidak cocok dengan $data
			}
			}else{
            // Jika password dan username tidak cocok dengan yang di database.
                echo "<script type='text/javascript'>alert('Username atau password salah!'); window.location.href='../masuk.php';</script>";
        }
	
?>