<?php
// Load file koneksi.php
include "../koneksi.php";

$id_user = $_GET['id_user'];
// Ambil Data yang Dikirim dari Form
$password = $_POST['passbaru'];
  // Proses ubah data ke Database
  $query = "UPDATE admin SET password='".$password."' WHERE id_user='".$id_user."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit.php'>Kembali Ke Form</a>";
  }

?>