    <?php
	include '../koneksi.php';
    //file cek.php untuk cek data
	$username_member = $_GET['username_member'];
    $sql = mysqli_query($connect,"SELECT * FROM laporan WHERE username_member='".$username_member."' and status='baru'");
   $array = mysqli_num_rows($sql);
   echo json_encode($array);
    
	?>