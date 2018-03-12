<?php $htmlString= 'testing';
include "admin/koneksi.php";
$query = "SELECT * FROM harga"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query 
$query2 = "SELECT * FROM harga_pra"; // Query untuk menampilkan semua data siswa
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query 
$luas=array();
$harga=array();
$luas_pra=array();
$harga_pra=array();
								  while($data = mysqli_fetch_array($sql)){
								  $luas[]=$data['luas'];
								  $harga[]=$data['hrg_5thn'];
								  $harga3[]=$data['hrg_3thn'];
							  }
							  while($data2 = mysqli_fetch_array($sql2)){
								  $luas_pra[]=$data2['luas_pra'];
								  $harga_pra[]=$data2['harga_pra'];
							  }
							 
								  
								  ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AZINDORAYAP | Home page</title>
        <meta name="description" content="Termite Control Surabaya">
        <meta name="author" content="Azindo">
        <meta name="keyword" content="rayap, pembasmi rayap, pest control, termite control, pembasmi rayap surabaya, azindo rayap">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="http://azindopest.com/wp-content/uploads/2017/09/LOGO-PT-AZINDO-GUNUNG-KLECO.png" type="image/x-icon">
        <link rel="icon" href="http://azindopest.com/wp-content/uploads/2017/09/LOGO-PT-AZINDO-GUNUNG-KLECO.png" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
		
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
	<div class="navbarfixed">
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call" style="margin-top:10px;">
                            <p>
                                <span><i class="pe-7s-call"></i> 031 - 7402728</span>
                                <span><i class="pe-7s-mail"></i> azindopest@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="member-area/" target="_blank"><i class="fa fa-users"></i> Member Area</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/azindorayap.png" alt="" style="margin-top:-10px;"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button id="myBtn" class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.48s">Ingin Kami Hubungi ?</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="dropdown ymm-sw " data-wow-delay="0.5s">
                            <a href="index.php" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home </a>
                        </li>
						<li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Solusi <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="pengendalian-rayap/">Pengendalian Rayap</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="serangan/">Tanda - tanda Keberadaan Rayap</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="monitoring-rayap/">Tips Monitoring Rayap</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="jenis-rayap/">Jenis Rayap</a>
                                </li>

                            </ul>
                        </li>
                        
                        <li class="wow fadeInDown" data-wow-delay="0.5s">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" onclick="harga()">Cek harga </a>
                        </li>
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Bisnis Anda<b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav" >
                                <li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Restoran</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Gudang Kertas</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Hotel dan Penginapan</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Kantor</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Rumah Hunian</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Sekolah dan Institusi</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Rumah Sakit dan Klinik</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Pabrik Retail</a>
                                </li>
                            </ul>
                        </li>
						<li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="tentang/" class="dropdown-toggle" data-hover="dropdown" data-delay="200">Tentang Kami</a>
                            <ul class="dropdown-menu navbar-nav" >
                                <li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="artikel/">Artikel</a>
                                </li>
                               
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
	</div>
        <!-- End of nav bar -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="assets/img/slide1/a1.jpg"></div>
                    <div class="item"><img src="assets/img/slide1/a2.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="assets/img/slide1/a3.jpg" alt="GTA V"></div>

                </div>
            </div>
            
        </div>
		
		
		
        <!-- deskripsi -->
					<div class="container">
						<div class="single-property-wrapper">
							<div class="section">
                                <h4 class="s-property-title">Rayap</h4>
                                <div class="s-property-content">
                                    <p>Dalam alam bebas, rayap (juga dikenal sebagai "semut putih") sebenarnya sangat berguna dalam sistem ekologi karena mereka membantu mengurai 
									nutrisi dari pohon-pohon dan tanaman yang sudah mati. Namun, rayap dapat menjadi ancaman serius ketika mereka memasuki tempat tinggal kita. 
									Menurut sebuah penelitian tahun 2015 di Jakarta, rayap diperkirakan menyebabkan kerugian sekitar 8,68 milyar akibat kerusakan konstruksi 
									bangunan setiap tahunnya. </p>
									<p>Di Indonesia, kerusakan yang disebabkan oleh rayap lebih sering ditemukan dibanding dengan kebakaran dan banjir 
									karena lingkungan tropis dan kelembaban yang tinggi mendorong pertumbuhan populasi rayap. 
									Mereka mampu makan kayu selama 24 jam sehari tanpa istirahat, akibatnya infetasi rayap dapat merusak 
									struktur bangunan dan akhirnya biaya yang mahal untuk perbaikan.</p>
                                </div>
								<h4 class="s-property-title">Termite Control</h4>
                                <div class="s-property-content">
                                    <p>Salah satu masalah yang sering melanda furnitur kayu adalah rayap furnitur. Kayu rentan rayap, akan mempercepat kerusakan pada furnitur tersebut. 
									Rayap yang hidup berkelompok di dalam furnitur mampu mengikis perabotan sehingga furnitur menjadi keropos, begitu juga rayap pada dinding-dinding bangunan. </p>
									<p>Untuk menanggulangi dan mengurangi tingkat kerugian akibat serangan hama rayap pada gedung-gedung publik, maka berdasarkan UNDANG-UNDANG NO. 28/2002 tentang BANGUNAN GEDUNG Pasal 18 Ayat 1 : 
									"Bahwa setiap bangunan yang harus tahan terhadap kerusakan yang diakibatkan oleh gangguan alam, seperti gempa bumi, longsor, dan hama perusak."</p>
									<p>Hama rayap dapat dicegah dengan dua cara. Yang pertama yaitu pra kontruksi, sebelum mendirikan bangunan, tanah yang akan dibangun dilakukan treatment spray agar hama yang saat ini hidup dimusnahkan. 
									Yang kedua yaitu pasca kontruksi, setelah gedung dibangun, lantai dapat diinjeksi termitsida.</p>
                                </div>
                            </div>
						</div>
					</div>

        <!--Welcome area -->
        <div class="Welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 Welcome-entry  col-sm-12">
                        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                        <!-- /.feature title -->
                                        <h2>RAYAP </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-xs-6 m-padding">
										<div class="welcome-estate" onclick="window.location='hidup-berkoloni/';">
                                                <i class="pe-7s-attention pe-4x"></i>
												<h3>Rayap Hidup Berkoloni</h3>
												<p>Rayap yang berkoloni memiliki kedudukan masing-masing dalam suatu kelompok</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate" onclick="window.location='sarang-kompleks/';">
                                                <i class="pe-7s-home pe-4x"></i>
												<h3>Pembuatan Sarang yang Kompleks	</h3>
												<p>Rayap akan membuat sarang dengan menggunakan kombinasi </p>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 text-center">
                                        <i class="welcome-circle"></i>
                                    </div>

                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate" onclick="window.location='gotong-royong/';">
                                                <i class="pe-7s-graph2 pe-4x"></i>
												<h3>Bergotong Royong kumpulkan Makanan</h3>
												<p>Rayap bekerja sama mengumpulkan makanan setiap harinya</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate" onclick="window.location='siklus-hidup/';">
                                                <i class="pe-7s-science pe-4x"></i>
												<h3>Siklus hidup rayap</h3>
												<p>Rayap memiliki siklus hidup yang luar biasa, mulai dari telur, larva hingga menjadi koloni</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--TESTIMONIALS -->
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Susunan Koloni Rayap</h2> 
                    </div>
                </div>

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text" >          
										<h4><strong>Raja dan Ratu Rayap</strong></h4>
                                        <p>Fungsi utama Ratu dan Raja dalam koloni rayap adalah bereproduksi. Mengawali hidupnya sebagai laron, mereka meninggalkan koloni induk mereka, 
										jatuh ke tanah dan melepaskan sayapnya untuk mencari lingkungan untuk bersarang. Mereka merawat anak-anak mereka sampai mampu mengambil alih tugas di koloni.</p>
										<div class="client-face">
											<img src="assets/img/rayap1.png" alt="">
										</div>
                                    </div>
                                    
                                </div>
                                <div class="item">
                                    <div class="client-text" >          
										<h4><strong>Rayap Pekerja</strong></h4>
                                        <p>Rayap pekerja merupakan jenis rayap dengan jumlah terbesar dalam suatu koloni. Mereka melakukan semua pekerjaan (kecuali mempertahankan koloni dan bereproduksi): 
										memberi makan, merawat koloni, menggali sarang dan membuat terowongan. Ketika melakukan pekerjaan merekai menyebabkan kerusakan pada banyak rumah.</p>
										<div class="client-face">
											<img src="assets/img/rayap2.png" alt="">
										</div>
                                    </div>
                                    
                                </div>
                                <div class="item">
                                    <div class="client-text" >          
										<h4><strong>Rayap Prajurit</strong></h4>
                                        <p>Rayap prajurit mempertahankan koloni dari serangan musuh seperti semut, dilengkapi dengan rahang besar, 
										cairan lengket atau semprotan kimia dalam melakukan pekerjaan mereka.</p>
										<div class="client-face">
											<img src="assets/img/rayap3.png" alt="">
										</div>
                                    </div>
                                    
                                </div>
                                <div class="item">
                                    <div class="client-text" >          
										<h4><strong>Alate/Laron</strong></h4>
                                        <p>Laron/alate adalah jenis rayap reproduktif bersayap yang keluar dari sarang dan mendirikan koloni baru. 
										Laron jantan dan betina biasanya berpasangan dan mencari lingkungan yang sesuai untuk kawin. Laron ini sering disalahartikan dengan semut jenis swarmer.</p>
										<div class="client-face">
											<img src="assets/img/rayap4.png" alt="">
										</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		
		
		
        
		
		
		
		<!--aa-->
		<div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-users"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h5>Hama ditangani oleh tenaga ahli yang terdidik dan berlisensi</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-home"></span>
                                    </div>
                                    <div class="chart" data-percent="12000">
                                        <h5>Sejak tahun 2009 melindungi properti di Surabaya dan sekitarnya dari serangan hama</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-copy-file"></span>
                                    </div>
                                    <div class="chart" data-percent="120">
                                        <h5>Bersertifikat resmi ASPPHAMI (Asosiasi Perusahaan Pengendalian Hama Indonesia).</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-graph2"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h5>Pelangggan yang semakin meningkat dengan memberikan pelayanan yang memuaskan</h5>
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Lokasi Kami</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-adress">
                                    <li><a class="wow fadeInUp animated" target="_blank" href="https://www.google.co.id/maps/place/Jalan+Bumi+Sari+Praja+VII,+Lontar,+Sambikerep,+Kota+SBY,+Jawa+Timur+60216/@-7.2668211,112.6716011,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7fe815fb10533:0x7113510b7b4dc009!8m2!3d-7.2668264!4d112.6737898?hl=en">
									<i class="pe-7s-map-marker strong"> </i> Jalan Bumi Sari Praja 7 / 37 Sambikerep, Surabaya</a></li>
                                    <li><i class="pe-7s-mail strong"> </i> azindo@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Hubungi Kami</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li>031 720 2728 (office 8 am s/d 5 pm)</li> 
                                    <li>0813 3207 1765 (mobile 24/7)</li> 
                                    <li>0812 3442 8118 (WA 24/7)</li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Tips</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="pengendalian-rayap/">Pengendalian Rayap</a>  </li> 
                                    <li><a href="serangan/">Tanda-tanda Keberadaan Rayap</a>  </li> 
                                    <li><a href="monitoring-rayap/">Tips Monitoring Rayap</a></li> 
                                    <li><a href="jenis-rayap/">Jenis Rayap</a></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Sosial Media</h4>
                                <div class="footer-title-line"></div>

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/azindopest"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/azindopest" data-wow-delay="0.2s"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="http://www.KimaroTec.com">KimaroTheme</a> , All rights reserved 2016  </span> 
                        </div> 
                    </div>
                </div>
            </div>

        </div>
		
		<!----------------------------------------------------- The Modal ----------------------------------------------------->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close" >&times;</span>
			  <h2>Hubungi Saya</h2>
			</div>
			<div class="modal-body">
				<table width="65%" border="0" align="center">
				<form action="pelanggan_proses.php" name="form1" method="post" onSubmit="return cekInputan();">
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Nama</b>
                        </div></td>
                        <td><div class="box2">
                            <input type="text" id="nama" name="nama" class="form-control">
                            </div></td><td><p id="namamiss" style="color:red; margin-top:5px; margin-bottom:-15px;font-size:150%; visibility:hidden;"><b><strong><i class="pe-7s-close-circle strong"></i></strong></b></p></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Email</b>
                        </div></td>
                        <td><div class="box2">
                            <input type="email" id="email" name="email" class="form-control">
                            </div></td><td><p id="emailmiss" style="color:red; margin-top:5px; margin-bottom:-15px;font-size:150%; visibility:hidden;"><b><strong><i class="pe-7s-close-circle strong"></i></strong></b></p></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2" >
                        <b>No. Handphone</b>
                    </div></td>
                    <td><div class="box2">
                        <input type="text" id="nohp" name="nohp" class="form-control" onkeypress="return hanyaAngka(event)">
                        </div></td><td><p id="nohpmiss" style="color:red; margin-top:5px;; margin-bottom:-15px;font-size:150%; visibility:hidden;"><b><strong><i class="pe-7s-close-circle strong"></i></strong></b></p></td>
                    </tr>
                    <tr>
                        <td ><div class="box2"><button class="navbar-btn nav-button wow" formaction="pelanggan_proses2.php" >Email Saya</button></div></td>   
                        <td ><div class="box2"><button type="submit" class="navbar-btn nav-button wow" >Telepon Saya</button></div></td>
                    </tr>
				</form>
                </table>
			</div>
			
			<div class="modal-footer">
			  <h5></h5>
			</div>
		  </div>

		</div>
        <div id="myModal2" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close2" >&times;</span>
			  <h2>Cek Harga</h2>
			</div>
			<div class="modal-body">
				<table width="70%" align="center">
                    <tr>
                        <td id="but"><div class="box2"><button class="navbar-btn nav-button2 wow" onclick="balik()">Pra Kontruksi</button></div></td>   
                        <td id="but2"><div class="box2"><button class="navbar-btn nav-button wow" onclick="ubah()">Pasca Kontruksi</button></div></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Kota</b>
                        </div></td>
                        <td><div class="box2">
                            <select id="kota" onchange="cek()">
                                        <option selected disabled value="">Pilih</option>
                                        <option>Bangkalan</option>
                                        <option>Banyuwangi</option>
                                        <option>Batu</option>
                                        <option>Blitar</option>
                                        <option>Bojonegoro</option>
                                        <option>Bondowoso</option>
                                        <option>Gresik</option>
                                        <option>Jember</option>
                                        <option>Jombang</option>
                                        <option>Kediri</option>
                                        <option>Lamongan</option>
                                        <option>Lumajang</option>
                                        <option>Madiun</option>
                                        <option>Magetan</option>
                                        <option>Malang</option>
                                        <option>Mojokerto</option>
                                        <option>Nganjuk</option>
                                        <option>Ngawi</option>
                                        <option>Pacitan</option>
                                        <option>Pamekasan</option>
                                        <option>Pasuruan</option>
                                        <option>Ponorogo</option>
                                        <option>Probolinggo</option>
                                        <option>Sampang</option>
                                        <option>Sidoarjo</option>
                                        <option>Situbondo</option>
                                        <option>Sumenep</option>
                                        <option>Surabaya</option>
                                        <option>Trenggalek</option>
                                        <option>Tuban</option>
                                        <option>Tulungagung</option>
                                    </select>
                            </div></td>
                    </tr>
                        <tr>
                            <td align="right"><div class="box2">
                                <b>Garansi</b>
                            </div></td>
                            <td id="tahun">
                                <div class='box2'> 
                                    <b>5 Tahun</b>         
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td id="tahun2"</td> 
                        </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b align="right">Luas</b>
                        </div></td>
                        <td id="cec"><div class="box2">
                            <select id='luas' onchange="cek()">
                                    <option selected disabled value="">Pilih</option>
									<?php for($i=0;$i<count($luas_pra);$i++){ echo"
                                    <option value='$luas_pra[$i]' >$luas_pra[$i]</option>";}?>
                                </select>
                            </div></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Harga</b>
                        </div></td>
                        <td><div class="box2">
                            <input type="text" id="harga"  disabled>
                            </div></td>
                    </tr>
                    <tr>
                        <td colspan="2">*Harga Tidak Mengikat & menyesuaikan hasil survey</td>
                    </tr>
                </table>
			</div>
			
			<div class="modal-footer">
                Apakah Anda Ingin Kami Hubungi ?
                <button class="navbar-btn nav-button wow" onclick="btn.click()">Hub Saya</button>
			</div>
		  </div>

		</div>
		
		
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
 
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>
		<?php
		$kata="";for($i=0;$i<count($luas);$i++){ $kata.="<option value='$luas[$i]' >$luas[$i]</option>";}
		$kata2="";for($i=0;$i<count($luas_pra);$i++){ $kata2.="<option value='$luas_pra[$i]' >$luas_pra[$i]</option>";}
		echo '<script type="text/javascript">var kondisi=false;
		function cek(){
		if(document.getElementById("kota").value!="" && kondisi){
			if(document.getElementById("a5").checked==true){';
		for ($i=0;$i<count($luas);$i++){
			echo 'if(document.getElementById("luas").value=="'.$luas[$i].'"){
					document.getElementById("harga").value = "'.$harga[$i].'";}';
		}
		echo '}if(document.getElementById("a3").checked==true){';
		for ($i=0;$i<count($luas);$i++){
			echo 'if(document.getElementById("luas").value=="'.$luas[$i].'"){
					document.getElementById("harga").value = "'.$harga3[$i].'";}';
		}
		echo '}}else{ cek2()}}</script>';
		?>
		<script type="text/javascript">
function ubah(){
	var htmlString="<?php echo $kata; ?>";
    kondisi=true;
    document.getElementById("tahun").innerHTML="                                  <input type='radio' name='garansi'  id='a5' onclick='cek()'>                      <b id='texta3'>        5 Tahun  </b>                           ";
    document.getElementById("tahun2").innerHTML="<input type='radio' name='garansi'   id='a3' onclick='cek()'> <b id='texta5'>3 Tahun    </b>                        ";
    document.getElementById("but").innerHTML="<div class='box2'><button class='navbar-btn nav-button wow' onclick='balik()'>Pra Kontruksi</button></div>";
    document.getElementById("but2").innerHTML="<div class='box2'><button class='navbar-btn nav-button2 wow' onclick='ubah()'>Pasca Kontruksi</button></div>";
    document.getElementById("kota").value="";
    document.getElementById("harga").value="";
    document.getElementById("luas").value="";
	document.getElementById("luas").innerHTML="<option selected disabled value=''>Pilih</option>"+htmlString;
}
function balik(){
	var htmlString2="<?php echo $kata2; ?>";
    kondisi=false;
    document.getElementById("tahun").innerHTML="<div class='box2'> <b>                                                              5 Tahun   </b>                             </div>";
    document.getElementById("tahun2").innerHTML="";
    document.getElementById("but").innerHTML="<div class='box2'><button class='navbar-btn nav-button2 wow' onclick='balik()'>Pra Kontruksi</button></div>";
    document.getElementById("but2").innerHTML="<div class='box2'><button class='navbar-btn nav-button wow' onclick='ubah()'>Pasca Kontruksi</button></div>";
    document.getElementById("kota").value="";
    document.getElementById("harga").value="";
    document.getElementById("luas").value="";
	document.getElementById("luas").innerHTML="<option selected disabled value=''>Pilih</option>"+htmlString2;
} 
function cekInputan(){
	var kondisi= true;
		if(document.form1.nama.value == ""){
			document.getElementById("namamiss").style.visibility = "visible";
			kondisi = false;
		}else{
			document.getElementById("namamiss").style.visibility = "hidden";
			}

		if(document.form1.email.value == ""){
        document.getElementById("emailmiss").style.visibility = "visible";
		kondisi = false;
		}else{
        document.getElementById("emailmiss").style.visibility = "hidden";
		}
		
		if(document.form1.nohp.value == ""){
        document.getElementById("nohpmiss").style.visibility = "visible";
		kondisi = false;
		}else{
        document.getElementById("nohpmiss").style.visibility = "hidden";
		}
		
	return kondisi;
	}
	
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
 
    return false;
    return true;
}
</script>
<?php

echo '<script type="text/javascript">function cek2(){if(document.getElementById("kota").value!=""){
        ';
for ($i=0;$i<count($luas_pra);$i++){
	echo 'if(document.getElementById("luas").value=="'.$luas_pra[$i].'"){
            document.getElementById("harga").value = "'.$harga_pra[$i].'";}';
}
echo'    }}</script>';
?>
    </body>
</html>