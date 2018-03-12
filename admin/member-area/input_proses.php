<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form

$username_member	= $_GET['username_member'];
$tanggal 			= $_POST['tanggal'];
$isi_laporan		= $_POST['isi_laporan'];
  // Proses simpan ke Database
  $query = "INSERT INTO laporan VALUES(NULL,'".$tanggal."','".nl2br($isi_laporan)."','".$username_member."','baru')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
	header('Location: input.php?username_member='.$username_member);
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }
?>