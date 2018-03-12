<?php session_start(); ?>
<?php if(isset($_SESSION['username_member'])){ ?>
<?php include "../koneksi.php"; ?>
<?php
		  if (isset($_GET['hello'])) {
			include '../koneksi.php';
			$sql = mysqli_query($connect,"UPDATE laporan set status='lama' WHERE status='baru';");
		  }
		?>
<html>
<head>
	<title>Member Area | AzindoRayap </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="http://azindopest.com/wp-content/uploads/2017/09/Azindo-Pest-300x100.png" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
	<script type="text/javascript" src="jquery.js"></script>
	  <?php echo'<script type="text/javascript">
	   function ambilKomentar(){
	   $.ajax({
		  type: "POST",
		  url: "cek.php?username_member='.$_SESSION['username_member'].'",
		  dataType:"json",
		  success: function(response){
		  if(response!="0"){
		   $("#jumlah").text(response);
			$(".buble").css("background" , "#e02424");
		  }else{
		  $(".buble").css("background" , "transparent	");
		 }
		 timer = setTimeout("ambilKomentar()",5000);
		 }});  
	  }
	  $(document).ready(function(){
	   ambilKomentar();
	  });
	  </script>';?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="../index.php"><img src="../assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><span><strong><?php echo $_SESSION['username_member']; ?></strong></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php?hello=true" class="active"><i class="lnr lnr-text-align-left"></i> Laporan<span class='buble' id="jumlah"></span></a></li>
						<li><a href="../ganti-password/" class=""><i class="lnr lnr-pencil"></i> <span>Ganti Password</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<?php  include "../koneksi.php";
					function tanggal_indo($tanggal, $cetak_hari = false)
					{
						$hari = array ( 1 =>    'Senin',
									'Selasa',
									'Rabu',
									'Kamis',
									'Jumat',
									'Sabtu',
									'Minggu'
								);
								
						$bulan = array (1 =>   'Januari',
									'Februari',
									'Maret',
									'April',
									'Mei',
									'Juni',
									'Juli',
									'Agustus',
									'September',
									'Oktober',
									'November',
									'Desember'
								);
						$split 	  = explode('-', $tanggal);
						$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
						
						if ($cetak_hari) {
							$num = date('N', strtotime($tanggal));
							return $hari[$num] . ', ' . $tgl_indo;
						}
						return $tgl_indo;
					}
					$username_member = $_SESSION['username_member'];
									$query2 = "SELECT nama_member FROM member WHERE username_member='".$username_member."'";
									$sql2 = mysqli_query($connect, $query2); 
									$nama="";
									 while($data = mysqli_fetch_array($sql2)){ 
										$nama=$data['nama_member'];
										}?>
					<h3 class="page-title">Selamat Datang, <?php echo $nama; ?></h3>
					<div class="panel panel-headline">
						<div class="panel-body">
						<?php
								  // Load file koneksi.php
								  include "../koneksi.php";
								  $nama_member = $_SESSION['username_member'];
								  $query = "SELECT * FROM laporan where username_member='$nama_member'"; // Query untuk menampilkan semua data siswa
								  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
								  
								  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
									$tanggal = date('Y-m-d', strtotime($data['tanggal']));
									echo "<p>". tanggal_indo($tanggal, true) ."</p>";
									echo "<p>".$data['isi_laporan']."</p>";
									echo "<hr>";
								  }
								  ?>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
</body>

</html>

<?php 
}else{
header("location:../login.php");
}
?>