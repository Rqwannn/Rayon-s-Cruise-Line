<?php 

    $sesion =  $_SESSION["username"];
    $VerifikasiAkun = $this->model("Data_model")->getAllUserBYSession($sesion);
    $active = $VerifikasiAkun["active"];
    if($active == 0){
        header("Location: " . BASEURL . "/home");
        exit;
    }

?>
<div class="pelayaran-section-1">
	<div class="container">
		<div class="carousel">
			<div class="slider">
			<section>
				<div class="pelayaran-info">
					<img src="<?php echo BASEURL ?>/img/pelayaran-jepang.jpg" style="width: 100%; height: 90vmin;">
					<div class="pelayaran-info-detail">
						<div class="pelayaran-info-detail-more">
							<h3>Jepang</h3>
							<h4>Temukan Tempat Favorite Anda</h4>
							<p>Berkunjung Ke Negeri Sakura Yang Indah Menggunakan Pelayaran Kapal Pesiar Yang Mewah</p>
							<button>More</button>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="pelayaran-info">
					<img src="<?php echo BASEURL ?>/img/pelayaran-amerika.jpg" style="width: 100%; height: 90vmin;">
					<div class="pelayaran-info-detail">
						<div class="pelayaran-info-detail-more">
						<h3>Amerika</h3>
						<h4>Temukan Tempat Favorite Anda</h4>
						<p>Berkunjung Ke Negeri Paman Sam Dengan Gedung Pencakar Langit Dengan Menggunakan Pelayaran Kapal Pesiar Yang Mewah</p>
						<button>More</button>
						</div>
					</div>
				</div>
			</section>
			<section><div class="pelayaran-info">
					<img src="<?php echo BASEURL ?>/img/header-2.jpg" style="width: 100%; height: 90vmin;">
					<div class="pelayaran-info-detail">
						<div class="pelayaran-info-detail-more">
							<h3>Australia</h3>
							<h4>Temukan Tempat Favorite Anda</h4>
							<p>Berkunjung Ke Negeri Kangguru Sambil Menikmati Teater Di Sydney Menggunakan Pelayaran Kapal Pesiar Yang Mewah</p>
							<button>More</button>
						</div>
					</div>
				</div>
			</section>
				<section>
				<section><div class="pelayaran-info">
					<img src="<?php echo BASEURL ?>/img/pelayaran-pulau.jpg" style="width: 100%; height: 90vmin;">
					<div class="pelayaran-info-detail">
						<div class="pelayaran-info-detail-more">
							<h3>Pulau</h3>
							<h4>Temukan Tempat Favorite Anda</h4>
							<p>Berkunjung Ke Berbagai Pulau Dengan Pantai Yang Indah Menggunakan Pelayaran Kapal Pesiar Yang Mewah</p>
							<button>More</button>
						</div>
					</div>
				</div>
			</section>
			</div>
			<div class="control">
			<span class="arrow left">
				<i class="fas fa-angle-left"></i>
			</span>
			<span class="arrow right">
				<i class="fas fa-angle-right"></i>
			</span>
			<ul>
				<li class="selected"></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			</div>
		</div>
	</div>
</div>
<section class="pelayaran-section-info">
	<h2>Tipe kamar seperti apa yang anda inginkan</h2>
	<p class="header-info-pelayaran">Kami mempunyai 5 tipe suite yang bisa anda nikmati dengan
	terdapat masing-masing kamar yang memiliki kelebihan atau view masing-masing dengan kenyamanan dan pelayanan yang sangat baik dari kru kami. Apakah anda ingin kamar 
	yang terletak menghadap ke laut sehingga anda bisa menikmati keindahan laut kapanpun selama anda berada disana.</p>
	<div class="line-info-pelayaran"></div>
	<div class="line-info-pelayaran2"></div>
	<div class="info-pelayaran-lebih">
		<i class="fas fa-user-tie"></i>
		<i class="far fa-compass"></i>
		<i class="fab fa-shopify"></i>
		<i class="fas fa-cloud-sun"></i>
	</div>
	<div class="info-pelayaran-lebih-text">
		<p>Presidential Suite</p>
		<p>Mewah, Aman Dan Menghadap Laut Lepas</p>
	</div>
	<div class="info-pelayaran-lebih-text2">
		<p>Antar Benua</p>
		<p>Utara, Barat, Timur, Selatan, Tenggara</p>
	</div>
	<div class="info-pelayaran-lebih-text3">
		<p>Brand Terkenal</p>
		<p>Gucci, Hermes, M&S, Beams, Zara</p>
	</div>
	<div class="info-pelayaran-lebih-text4">
		<p>Sunset</p>
		<p>Keindahan Matahari Di Laut Lepas</p>
	</div>
</section>  
<section class="pelayaran-section-2">
	<div class="pelayaran-header-2">
		<h2>Style Kamar</h2>
	</div>
	 <div class="pelayaran-content-flex">
		<div class="content-imgbx middle">
			<div class="content-imgbx-front">
				<img src="<?php echo BASEURL; ?>/img/kamar-kapal-1.jpg" alt="">
			</div>
			<div class="content-imgbx-back">
				<div class="back-content middle">
				<h2>Info Kamar</h2>
				<span>Royal Rayon</span>
				<div class="menu-content">
					<p>Jumlah Ruangan : 6</p>
					<p>Harga Kamar : IDR. 700 K/Berlayar</p>
					<p>Pelayanan Kamar : Bagus</p>
					<p>Kelas Kamar : Family</p>
				</div>
				</div>
			</div>
		</div>
		<div class="content-imgbx middle">
			<div class="content-imgbx-front">
				<img src="<?php echo BASEURL; ?>/img/kamar-kapal-2.jpg" alt="">
			</div>
			<div class="content-imgbx-back">
				<div class="back-content middle">
				<h2>Info Kamar</h2>
				<span>Royal Rayon</span>
				<div class="menu-content">
					<p>Jumlah Ruangan : 8</p>
					<p>Harga Kamar : IDR. 1.250 Jt/Berlayar</p>
					<p>Pelayanan Kamar : Sangat Bagus</p>
					<p>Kelas Kamar : VIP</p>
				</div>
				</div>
			</div>
		</div>
		<div class="content-imgbx middle">
			<div class="content-imgbx-front">
				<img src="<?php echo BASEURL; ?>/img/kamar-kapal-3.jpg" alt="">
			</div>
			<div class="content-imgbx-back">
				<div class="back-content middle">
				<h2>Info Kamar</h2>
				<span>Royal Rayon</span>
				<div class="menu-content">
					<p>Jumlah Ruangan : 8</p>
					<p>Harga Kamar : IDR. 1.700 Jt/Berlayar</p>
					<p>Pelayanan Kamar : Sangat Bagus</p>
					<p>Kelas Kamar : Luxury</p>
				</div>
				</div>
			</div>
		</div>
		<div class="content-imgbx middle">
			<div class="content-imgbx-front">
				<img src="<?php echo BASEURL; ?>/img/kamar-kapal-4.jpg" alt="">
			</div>
			<div class="content-imgbx-back">
				<div class="back-content middle">
				<h2>Info Kamar</h2>
				<span>Royal Rayon</span>
				<div class="menu-content">
					<p>Jumlah Ruangan : 4</p>
					<p>Harga Kamar : IDR. 550K/Berlayar</p>
					<p>Pelayanan Kamar : Bagus</p>
					<p>Kelas Kamar : Reguler</p>
				</div>
				</div>
			</div>
		</div>
    </div>
</section>
<section class="pelayaran-section-3">
	<div class="pelayaran-header-3">
		<h1>Lebih Detail</h1>
	</div>
	<div class="pelayaran-slide">
			<div class="pelayaran-slide-left">
				<i class="fas fa-angle-left btn-slide-left"  style="display: none;"></i>
			</div>
			<div class="pelayaran-slide-right">
				<i class="fas fa-angle-right btn-slide-right"></i>
			</div>
		</div>
	<div class="pelayaran-conten-3">
		<div class="pelayaran-conten-relative">
			<div class="pelayaran-conten-left">
				<div class="pelayaran-conten-header">
					<P>Presiden Suite</P>
				</div>
				<div class="box-line-pelayaran">
					<p>President Suite dihadirkan untuk memenuhi kebutuhan tamu yang menginginkan pengalaman menginap dengan kamar eksklusif yang tidak lupa dengan sentuhan desain atmosfer ruangan yang hangat dan nyaman didalamnya.
						Kamar President Suite dilengkapi dengan interior mewah seperti lantai marmer dan balkoni pribadi yang luas untuk bersantai menikmati keindahan laut lepas. 
						Terletak di lantai 6 dengan akses connecting room dan lengkap dengan fasilitas yang menghibur di dalamnya.</p>
					<p style="color: #1877f2;">Fasilitas suite Seven Seas Splendor</p>
					<div class="box-line-flex">
						<a href="https://akurat.co/gayahidup/id-516757-read-ini-fasilitas-dan-harga-wow-kamar-suite-termahal-di-kapal-pesiar">
							<button class="box-line-button">Telusuri</button>
						</a>
						<p>IDR.153 jt/Berlayar</p>						
					</div>
				</div>
			</div>
			<div class="pelayaran-conten-right">
				<img src="<?php echo BASEURL; ?>/img/Presiden-suite.jpeg" alt="">
			</div>
			<div class="pelayaran-conten-right-2" style="left: 150%;">
				<img src="<?php echo BASEURL; ?>/img/brand.jpg" alt="">
			</div>
			<div class="pelayaran-conten-left-2" style="right: 150%;">
				<div class="pelayaran-conten-header-2">
					<P>Brand Terkenal</P>
				</div>
				<div class="box-line-pelayaran-2">
					<p>Dengan adanya brand-brand terkenal dari penjuru dunia yang bisa anda beli saat pelayaran
						berlangsung dan barang limited edition yang hanya ada saat pelayaran. Anda bisa mengunjungi
						pusat perbelanjaan dan anda bisa menemukan berbagai brand seperti <a href="https://www.gucci.com/us/en/">Gucci</a>, 
						<a href="https://www.hermes.com/us/en/">Hermes</a>, <a href="https://www.calvinklein.us/en">Calvin Klein</a>, <a href="https://www.beams.co.jp/special/beams_japan/">Beams</a> dan <a href="https://www.zara.com/">Zara</a>.
						Dengan ciri khas masing-masing dari berbagai belahan dunia.
					</p>
					<p style="color: #1877f2;">Fasilitas All Suite At Cruise Ship</p>
					<div class="box-line-flex-2">
						<div class="pelayaran-rating-3">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						</div>					
						<a href="https://akurat.co/gayahidup/id-516757-read-ini-fasilitas-dan-harga-wow-kamar-suite-termahal-di-kapal-pesiar">
							<button class="box-line-button">Telusuri</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pelayaran-section-4">
	<div class="pelayaran-header-4">
		<h1>Hubungi Kami</h1>
	</div>
	<form action="#" action="POST" class="form-contact"> 
		<div class="pelayaran-input-4 pelayaran-edit-1">
			<input type="email" placeholder="Email Anda">
		</div>
		<div class="pelayaran-input-4 pelayaran-edit-2">
			<input type="text" placeholder="No HP" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
		</div>
		<div class="pelayaran-input-4 pelayaran-edit-3">
			<input type="text" placeholder="Subjek">
		</div>
		<div class="pelayaran-input-5 pelayaran-edit-4">
			<textarea type="text" name="pesan" id="pesan" Placeholder="Masukan Pesan"></textarea>
		</div>
		<button type="submit">Kirim</button>
	</form>
</section>
<section class="pelayaran-section-5">
	<div class="pelayaran-left-5">
		<img src="<?php echo BASEURL ?>/img/partner-company.jpg" alt="">
	</div>
	<div class="pelayaran-right-5">
		<div class="pelayaran-header-5">
			<h1>Mitra Kami</h1>
		</div>
		<div class="pelayaran-conten-5">
			<p>Royal Caribbean</p>
			<div class="pelayaran-icon-partner">
				<a href="https://www.facebook.com/RoyalCaribbeanAsia">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="https://www.instagram.com/royalcaribbean/">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="https://twitter.com/RoyalCaribbean?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
					<i class="fab fa-twitter"></i>
				</a>
			</div>
		</div>
		<div class="pelayaran-conten-5">
			<p>Norwegian Cruise</p>
			<div class="pelayaran-icon-partner">
				<a href="https://www.facebook.com/norwegiancruiselineinternational">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="https://www.instagram.com/norwegiancruiseline/">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="https://twitter.com/CruiseNorwegian?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
					<i class="fab fa-twitter"></i>
				</a>
			</div>
		</div>
		<div class="pelayaran-conten-5">
			<p>MSC Cruise</p>
			<div class="pelayaran-icon-partner">
				<a href="https://www.facebook.com/MSC.Cruises.International">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="https://www.instagram.com/msccruisesofficial/">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="https://twitter.com/MSCCruisesUSA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
					<i class="fab fa-twitter"></i>
				</a>
			</div>
		</div>
	</div>
</section>
		<div class="edit-card-circle">
			<i class="fas fa-angle-double-up"></i>
		</div>
	<div id="loader">
        <img src="<?php echo BASEURL; ?>/img/loader.gif">
	</div>
	