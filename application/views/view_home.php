<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Toko Online ~ Distributor Resmi Produk PT. Berkat Merdeka Indonesia</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/main-style.css")?>">
	<!-- Slider -->
        <link href="<?php echo base_url() ?>assets/css/quake.slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/quake.skin.css" rel="stylesheet" type="text/css" /> 
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/quake.slider-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/slider.js" type="text/javascript"></script> 
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="pembatas">
		<div class="header">
			<img src="<?php echo base_url();?>/assets/images/header.png">
		</div>
		<!--  -->
		<div class="tengah">
				<div class="sidebar">
					<img src="<?php echo base_url();?>/assets/images/menu-hubungikami.gif">
					<p>
						<strong><?php echo $namasponsor;?></strong><br>
						Hp/Telp. <?php echo $telp;?><br>
					</p>
					<hr>
					<a href="<?php echo base_url("c_page/index/cara-bergabung");?>"><img src="<?php echo base_url();?>/assets/images/cara-bergabung.jpg"></a>
					<center>Mau jadi Distributor/Member? <br>Klik Disini Untuk Cara JOIN!</center>
					<hr>
					<center><strong>HALAMAN</strong></center><hr>
						<img src="<?php echo base_url("assets/img/orange_bullet.png");?>"> <a href="<?php echo base_url(); ?>">Halaman Utama</a><br>
						<?php foreach ($sidebar as $dtsidebar) { ?>
							<img src="<?php echo base_url("assets/img/orange_bullet.png");?>"> <a href="<?php echo base_url("c_page/index"); ?>/<?php echo $dtsidebar['permalink']."/".$username; ?>"><?php echo $dtsidebar['judul_halaman']; ?></a><br>
						<?php } ?>
					<hr>
					<?php foreach ($banner as $dtbanner) { ?>
						<a href="<?php echo $dtbanner['link']; ?>"><img src="http://bmi-eksekutif.com/assets/images/banner/<?php echo $dtbanner['file']; ?>" width="200px"></a>
					<?php } ?>
				</div>
				<div class="konten">
					<img src="<?php echo base_url();?>/assets/images/selamatdatang.jpg" width="600px">
					<input id="tab1" type="radio" name="tabs" checked>
					    <label for="tab1">James B Dinar</label>
					<input id="tab2" type="radio" name="tabs">
					    <label for="tab2">Top Tan</label>
					<input id="tab3" type="radio" name="tabs">
					    <label for="tab3">Bio Nain</label>
					<input id="tab4" type="radio" name="tabs">
					    <label for="tab4">Asuransi</label>


					<section id="content1">
					    <?php echo $peluang;?>
					</section>
					<section id="content2">
					    <?php echo $mengapakami;?>
					</section>
					<section id="content3">
					    <?php echo $presentasibisnis;?>
					</section>
					<section id="content4">
					    <?php echo $carakerja;?>
					</section>

					<hr>
					<center>
						<a href="<?php echo base_url("c_page/index/cara-bergabung")."/".$username;?>"><img src="<?php echo base_url();?>/assets/images/hubungi-mitrabisnis.gif"></a><br>
						Butuh Bantuan?<br>
						Hubungi Saya Sebagai Tim Bisnis Anda<br>
						<?php echo $namasponsor;?><br>
						<?php echo $kota;?><br>
						Hp/Telp. <?php echo $telp;?><br>
						
						Web Bisnis : <a href="http://bmi-eksekutif.com/site/<?php echo $username;?>" target="_blank">www.bmi-eksekutif.com/site/<?php echo $username;?></a><br>
						Toko Online : <a href="http://produkbmi.com/site/<?php echo $username;?>" target="_blank">www.produkbmi.com/site/<?php echo $username;?></a><br>
					</center>
				</div>
		</div>
		<div class="footer">
			<img src="<?php echo base_url();?>/assets/images/footer.png">
			<center>Website ini bukan milik perusahaan BMI, melainkan milik member BMI <br>sebagai web support 
			untuk tim yang bergabung di grup BMI TIGER<br>
			Website ini SUDAH DI VERIFIKASI (no register : <?php echo $this->session->userdata('id_referal');?>) <br>oleh PT BMI sebagai web support resmi</center>
		</div>
	</div>
</body>
</html>