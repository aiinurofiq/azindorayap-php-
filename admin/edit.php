<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ ?>
<html>
<head>
	<title>Admin | AzindoRayap </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<script>
	
	function tandaPemisahTitik(b){
	var _minus = false;
	if (b<0) _minus = true;
	b = b.toString();
	b=b.replace(".","");
	b=b.replace("-","");
	c = "";
	panjang = b.length;
	j = 0;
	for (i = panjang; i > 0; i--){
	j = j + 1;
	if (((j % 3) == 1) && (j != 1)){
	c = b.substr(i-1,1) + "." + c;
	} else {
	c = b.substr(i-1,1) + c;
	}
	}
	if (_minus) c = "-" + c ;
	return c;
	}

	function numbersonly(ini, e){
	if (e.keyCode>=49){
	if(e.keyCode<=57){
	a = ini.value.toString().replace(".","");
	b = a.replace(/[^\d]/g,"");
	b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
	ini.value = tandaPemisahTitik(b);
	return false;
	}
	else if(e.keyCode<=105){
	if(e.keyCode>=96){
	//e.keycode = e.keycode - 47;
	a = ini.value.toString().replace(".","");
	b = a.replace(/[^\d]/g,"");
	b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
	ini.value = tandaPemisahTitik(b);
	//alert(e.keycode);
	return false;
	}
	else {return false;}
	}
	else {
	return false; }
	}else if (e.keyCode==48){
	a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
	b = a.replace(/[^\d]/g,"");
	if (parseFloat(b)!=0){
	ini.value = tandaPemisahTitik(b);
	return false;
	} else {
	return false;
	}
	}else if (e.keyCode==95){
	a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
	b = a.replace(/[^\d]/g,"");
	if (parseFloat(b)!=0){
	ini.value = tandaPemisahTitik(b);
	return false;
	} else {
	return false;
	}
	}else if (e.keyCode==8 || e.keycode==46){
	a = ini.value.replace(".","");
	b = a.replace(/[^\d]/g,"");
	b = b.substr(0,b.length -1);
	if (tandaPemisahTitik(b)!=""){
	ini.value = tandaPemisahTitik(b);
	} else {
	ini.value = "";
	}

	return false;
	} else if (e.keyCode==9){
	return true;
	} else if (e.keyCode==17){
	return true;
	} else {
	//alert (e.keyCode);
	return false;
	}

	}

	</script>
</head>

<body>
		<?php
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		?>
		<?php
		// Load file koneksi.php
		include "koneksi.php";
		// Ambil data id yang dikirim oleh index.php melalui URL
		$id_post = $_GET['id_post'];
		// Ambil Data yang Dikirim dari Form
		
		$query = "SELECT * FROM post WHERE id_post='".$id_post."'";
			$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
			$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
		 
		?>

	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><span><strong><?php echo $_SESSION['username']; ?></strong></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="ganti.php"><i class="lnr lnr-cog"></i> <span>Ganti Password</span></a></li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
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
						<li><a href="index.php" class="active"><i class="lnr lnr-text-align-left"></i> <span>Post</span></a></li>
						<li><a href="pelanggan/index.php?hello=true" class=""><i class="lnr lnr-envelope"></i>Pelanggan  <span class='buble' id="jumlah"></span></a></li>
						<li><a href="harga-pra/" class=""><i class="lnr lnr-tag"></i> <span>Harga Pra</span></a></li>
						<li><a href="harga-pasca/" class=""><i class="lnr lnr-tag"></i> <span>Harga Pasca</span></a></li>
						<li><a href="member-area/" class=""><i class="lnr lnr-users"></i> <span>Member Area</span></a></li>
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
					<h3 class="page-title">Harga Pasca Kontruksi</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
							<form method="POST" action="proses_edit.php?id_post=<?php echo $id_post; ?>" name="form1" enctype="multipart/form-data">
							<table class="table">
                            <tr>
                            	<td width="20%">Judul</td>
                                <td width="20%"> <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" placeholder="Masukkan Judul"></td>
                            </tr>
                            <tr>
                            	<td>Gambar</td>
                                <td> <input type="checkbox" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah gambar<br> 
								<input type="file" name="gambar"></td>
                            </tr>
                            <tr>
                            	<td>Isi</td>
                                <td><textarea id="id_post" rows="6" cols="100" class="form-control" name="isi_post"><?php
                                $breaks = array("<br />","<br>","<br/>");  
			$data['isi_post'] = str_ireplace($breaks, "", $data['isi_post']);
                                echo $data['isi_post']; ?></textarea></td>
								
                            </tr>
                            <tr>
                            	<td colspan="3"><button type="submit">Update</button></td>
                            </tr>
                            </table>
                          </form>
						  <hr>
							<a href="index.php">Kembali</a>
							
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
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>

<?php 
}else{
header("location:login.php");
}
?>