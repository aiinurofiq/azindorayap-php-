<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$judul 				= $_POST['judul'];

$fileName = $_FILES['gambar']['name'];
$isi_post 			= $_POST['isi_post'];
  
  // Proses simpan ke Database
  $query = "INSERT INTO post VALUES(NULL, NOW(),'".$judul."','".$fileName."','".nl2br($isi_post)."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
	header('Location: index.php');
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
?>