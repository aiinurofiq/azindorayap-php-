<?php
// Load file koneksi.php
include "../koneksi.php";

$username_member = $_GET['username_member'];
// Ambil Data yang Dikirim dari Form
$password = $_POST['passbaru'];
  // Proses ubah data ke Database
  $query = "UPDATE member SET password_member='".$password."' WHERE username_member='".$username_member."'";
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