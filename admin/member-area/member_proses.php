<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$nama_member 		= $_POST['nama_member'];
$username_member 		= $_POST['username_member'];
$password				= $_POST['password'];
  
  // Proses simpan ke Database
  $query = "INSERT INTO member VALUES('".$nama_member."','".$username_member."','".$password."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
	header('Location: index.php');
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }
?>