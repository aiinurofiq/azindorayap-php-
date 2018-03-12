<?php
// Load file koneksi.php
include "koneksi.php";

$id_post = $_GET['id_post'];
// Ambil Data yang Dikirim dari Form
$judul = $_POST['judul'];
$isi_post = $_POST['isi_post'];

	if(isset($_POST['ubah_gambar'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	  // Ambil data gambar yang dipilih dari form
	  $gambar = $_FILES['gambar']['name'];
	  $tmp = $_FILES['gambar']['tmp_name'];
	  
	  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
	  $gambarbaru = date('dmYHis').$gambar;
	  
	  // Set path folder tempat menyimpan fotonya
	  $path = "gambar/".$gambarbaru;
	  // Proses upload
	  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data berdasarkan id yang dikirim
		$query = "SELECT * FROM post WHERE id_post='".$id_post."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
		// Cek apakah file gambar sebelumnya ada di folder gambar
		if(is_file("gambar/".$data['gambar'])) // Jika gambar ada
		  unlink("gambar/".$data['gambar']); // Hapus file gambar sebelumnya yang ada di folder gambar



	  // Proses ubah data ke Database
	  $query = "UPDATE post SET judul='".$judul."', image='".$gambarbaru."', isi_post='".nl2br($isi_post)."' WHERE id_post='".$id_post."'";
	  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
	  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	  }else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='edit.php'>Kembali Ke Form</a>";
	  }
		}else{
			// Jika gambar gagal diupload, Lakukan :
			echo "Maaf, Gambar gagal untuk diupload.";
			echo "<br><a href='edit.php'>Kembali Ke Form</a>";
		  }
	}else{
		$query = "UPDATE post SET judul='".$judul."', isi_post='".nl2br($isi_post)."' WHERE id_post='".$id_post."'";
	  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
	  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	  }else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='edit.php'>Kembali Ke Form</a>";
	  }
	}
?>