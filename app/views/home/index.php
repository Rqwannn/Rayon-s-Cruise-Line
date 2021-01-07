<?php

$sesion =  $_SESSION["username"];
$VerifikasiAkun = $this->model("Data_model")->getAllUserBYSession($sesion);
$active = $VerifikasiAkun["active"];
$email = $VerifikasiAkun["email"];

?>
<?php if ($active == 0) : ?>
    <div class="verifikasi-ulang">
        <div class="verifikasi-ulang-card-2">
            <form method="POST" action="<?php echo BASEURL ?>/home/homeToken">
                <div class="verifikasi-ulang-header-2">
                    <h5>Silahkan Verifikasi Email Anda</h5>
                    <button type="submit"><?php echo $email ?><input type="hidden" name="email" value="<?php echo $email ?>"></button>
                </div>
                <div class="verifikasi-ulang-content">
                    <div class="verifikasi-ulang-position-2">
                        <h5>sebelum melanjutkan. silakan periksa email Anda untuk tautan verifikasi. jika Anda tidak menerima email tersebut.</h5>
                        <button type="submit" name="submit">klik di sini untuk meminta yang lain.</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php if ($active == 1) : ?>
    <div class="header-img">
        <h2 id="text-penawaran"></h2>
        <div class="detail-penawaran">
            <p>Hari</p>
            <p>Jam</p>
            <p>Menit</p>
            <p>Detik</p>
        </div>
        <form method="POST">
            <div class="edit-card">
                <div class="card">
                    <div class="inputbx">
                        <div class="header-info" id="home-header-info">
                            <h3 id="header-color">Kelas Reguler</h3>
                        </div>
                        <div class="header-info-2" id="home-header-info-2">
                            <h3 class="color" id="header-color2">Kelas VIP</h3>
                        </div>
                    </div>
                    <p id="text-js"></p>
                    <div class="inputbx">
                        <label for="tiket" id="tiket-label">Jumlah Tiket :</label>
                        <input type="text" name="tiket" id="tiket" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                    </div>
                    <input type="hidden" name="feri" id="header-feri">
                    <input type="hidden" name="pesiar" id="header-pesiar" style="display: none;">
                    <div class="inputbx">
                        <label for="berangkat">Berangkat Dari :</label>
                        <input type="text" name="berangkat" id="berangkat">
                    </div>
                    <div class="inputbx">
                        <label for="tujuan">Tujuan :</label>
                        <input type="text" name="tujuan" id="tujuan">
                    </div>
                    <div class="inputbx">
                        <label for="tanggal">Tanggal Berangkat :</label>
                        <input type="date" name="tanggal" id="tanggal">
                    </div>
                    <button type="submit" id="submit">Cari Tiket</button>
                </div>
            </div>
        </form>
        <div class="tujuan">
            <div class="card">
                <img src="<?php echo BASEURL; ?>/img/asia.jpg">
                <p>Asia <i class="fas fa-angle-up btn-1" style="transform: translate(25px, 1px) rotate(180deg);"></i></p>
            </div>
            <div class="card">
                <img src="<?php echo BASEURL; ?>/img/eropa.jpg">
                <p>Eropa <i class="fas fa-angle-up btn-2"></i></p>
            </div>
            <div class="card">
                <img src="<?php echo BASEURL; ?>/img/amerika.jpg">
                <p>Amerika <i class="fas fa-angle-up btn-3"></i></p>
            </div>
        </div>
    </div>
    <div class="menu-tujuan-first">
        <div class="benua asia">
            <h4>Asia & Pasific</h4>
            <div class="col-1">
                <h5>Singapore, Singapore</h5>
                <h5>Brisbane, Australia</h5>
                <h5>Hong Kong, China</h5>
                <h5>Perth (Fremantle), Australia</h5>
                <h5>Shanghai (Baoshan), China</h5>
            </div>
            <div class="col-2" style="margin-left: 50px;">
                <h5>Beljing (Tianjian), China</h5>
                <h5>Sydney, Australia</h5>
                <h5>Tokyo (Yokohama), Jepang</h5>
                <h5>Tokyo, Jepang</h5>
                <h5>Jakarta, Indonesia</h5>
            </div>
        </div>
    </div>
    <div class="menu-tujuan-second">
        <div class="benua eropa">
            <h4>Eropa</h4>
            <div class="col-1">
                <h5>Amsterdam, Belanda</h5>
                <h5>Southampton, Inggris</h5>
                <h5>Copenhagen, Denmark</h5>
                <h5>Stockholm, Swedia</h5>
                <h5>Barcelona, Spanyol</h5>
            </div>
            <div class="col-2" style="margin-left: 20px;">
                <h5>Tarragona, Spanyol</h5>
                <h5>Lisbon, Portugal</h5>
            </div>
        </div>
    </div>
    <div class="menu-tujuan-third">
        <div class="benua amerika">
            <h4>Amerika</h4>
            <div class="col-1">
                <h5>San Juan, Puerto Rico</h5>
                <h5>Anchorage, Alaska</h5>
                <h5>Baltimore, Maryland</h5>
                <h5>Fairbanks, Alaska</h5>
                <h5>Galveston, Texas</h5>
            </div>
            <div class="col-2">
                <h5>Seattle, Washington</h5>
                <h5>Vancouver, British Columbia</h5>
                <h5>Miami, Florida</h5>
                <h5>Montreal, Quebec</h5>
                <h5>Oahu (Honolulu), Hawaii</h5>
            </div>
            <div class="col-3">
                <h5>Fort Lauderdale, Florida</h5>
                <h5>Orlando, Florida</h5>
                <h5>Seward, Alaska</h5>
                <h5>New Orleans, Louisiana</h5>
                <h5>Tampa, Florida</h5>
            </div>
        </div>
    </div>
    <section class="section-info-tiket">
        <div class="scroll-info-tiket">
            <div class="info-tiket-header">
                <h1>Tiket Tersedia</h1>
                <img src="<?php echo BASEURL; ?>/img/close.png" id="close-info">
                <form action="<?php echo BASEURL; ?>/home/Pencarian" method="POST">
                    <div class="input-header">
                        <input type="text" name="keyword" class="input-keyword" placeholder="Search" id="keyword" autocomplete="off">
                        <button type="submit" name="cari" class="button-submit"><i class="fas fa-search" id="cari"></i></button>
                    </div>
                </form>
            </div>
            <!-- <div id="card-table">
            
        </div> -->
            <div class="id_tiket">
                <div class="card-pencarian-flex">
                    <?php foreach ($data["data"] as $result) : ?>
                        <?php if ($result["tiket"] != 0 && strtotime(date("Y-m-d")) < strtotime($result['tanggal'])) : ?>
                            <div class="card-info">
                                <div class="logo-img">
                                    <h4><?php echo $result["nama_partner"] ?></h4>
                                </div>
                                <?php if (isset($_SESSION["submit"])) : ?>
                                    <input type="hidden" value="<?php echo $_SESSION["username"]; ?>" name="user">
                                <?php endif; ?>
                                <div class="card-info-center">
                                    <div class="card-info-time">
                                        <h4><?php echo $result["tanggal"] ?></h4>
                                        <h4><?php echo $result["berangkat"] ?></h4>
                                    </div>
                                    <div class="card-arrow">
                                        <h4><i class="fas fa-arrows-alt-h" style="color: grey;"></i></h4>
                                    </div>
                                    <div class="card-info-place">
                                        <h4><?php echo $result["tanggal_pulang"] ?></h4>
                                        <h4><?php echo $result["tujuan"] ?></h4>
                                    </div>
                                    <div class="card-info-tanggal">
                                        <h4><?php echo $result["total_hari"] ?></h4>
                                        <h4>Langsung</h4>
                                    </div>
                                </div>
                                <div class="card-info-kamar">
                                    <i class="fas fa-hotel"></i>
                                </div>
                                <div class="card-info-harga">
                                    <h3>IDR. <?php echo $result["harga"] ?><span>/org</span></h3>
                                    <a href="<?php echo BASEURL; ?>/tiket/<?php echo $result["id"] ?>" style="color: #fff; text-decoration: none;"><button type="submit" name="submit" id="submit">Beli Tiket</button></a>
                                </div>
                                <div class="card-info-under">
                                    <h4>Detail Pelayaran</h4>
                                    <h4>Info Harga</h4>
                                </div>
                                <div class="card-info-under2">
                                    <h4><i class="fas fa-ship"></i><?php echo $result["Kapal"] ?></h4>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="logo-header">
            <h2>Pelayaran Yang Menyenangkan</h2>
            <h5>Selama masa-masa yang luar biasa ini, Royal Rayon's berkomitmen untuk ketenangan pikiran para tamu kami.
                Program Cruise with Confidence kami memastikan Anda memiliki fleksibilitas untuk membatalkan pelayaran Anda yang dekat dengan keberangkatan,
                sambil mengetahui bahwa Anda akan berlayar dengan harga terbaik di luar sana.
            </h5>
        </div>
        <div class="logo-center">
            <div class="logo">
                <img src="<?php echo BASEURL; ?>/img/logo-section1.png" alt="" class="nth-child-1">
                <div class="detail-2">
                    <h4>Pembatalan Gratis</h4>
                    <h5>
                        Batalkan hingga 48 jam sebelum tanggal berlayar Anda dan dapatkan kredit pelayaran masa depan yang baik untuk 12 bulan atau lebih.
                        Berlaku untuk pemesanan yang ada dan yang baru dilakukan pada 30 September 2020.
                    </h5>
                    <a href="#" style="color: #1877f2;">
                        <h5>Batalkan Pelayaran Anda</h5>
                    </a>
                </div>
            </div>
            <div class="logo">
                <img src="<?php echo BASEURL; ?>/img/logo-section2.png" alt="" class="nth-child-2">
                <div class="detail-2">
                    <h4>Tebus Kredit Pelayaran Anda</h4>
                    <h5>
                        Jika Anda membatalkan, kami akan memberi Anda kredit yang perlu digunakan pada pelayaran yang dipesan dan berangkat pada atau
                        sebelum 31 Desember 2021 atau 12 bulan sejak pembatalan (mana yang lebih lama).
                    </h5>
                    <a href="#" style="color: #1877f2;">
                        <h5>Tebus Kredit Pelayaran Anda</h5>
                    </a>
                </div>
            </div>
            <div class="logo">
                <img src="<?php echo BASEURL; ?>/img/logo-section3.png" alt="" class="nth-child-3">
                <div class="detail-2">
                    <h4>Jaminan Harga Terbaik</h4>
                    <h5>
                        Manfaatkan harga yang lebih baik hingga 48 jam sebelum tanggal berlayar Anda - hubungi kami.
                        Anda akan menerima perbedaan sebagai kredit dalam pesawat yang tidak dapat dikembalikan dalam pembayaran akhir atau penyesuaian tarif di luar pembayaran akhir.

                    </h5>
                    <a href="#" style="color: #1877f2;">
                        <h5>Temukan pelayaran Anda berikutnya</h5>
                    </a>
                </div>
            </div>
            <hr style="background: #000; width: 80%; height: 1px; position: absolute; left: 11%; top: 700px; border: none;">
        </div>
    </section>
    <section class="section-1">
        <div class="title-jadwal">
            <i class="fas fa-ship"></i>
            <h2>Perjalanan Dengan Kapal Pesiar Yang Mewah.</h2>
        </div>
        <div class="slide-img">
            <ul>
                <li class="active-color"><a href="#">Dengan Kapal Pesiar</li></a>
                <li><a href="#">Terlaris 2020</li></a>
                <li><a href="#">2021 Sailings</li></a>
            </ul>
        </div>
        <div class="content-1">
            <div class="card">
                <img src="<?php echo BASEURL; ?>/img/jadwal.jpg">
                <div class="detail">
                    <h4>5 Malam pelayaran barat mediteria</h4>
                    <p>Berangkat Dari Barcelona, Spanyol Dengan Harmony Of The Seas</p>
                    <p>Dari Harga</p>
                    <p>IDR. 7.320.000</p>
                    <hr style="margin-left: 15px;">
                    <h4 style="color: #1877f2;">View More</h4>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo BASEURL; ?>/img/jadwal2.jpg">
                <div class="detail">
                    <h4>3 Malam singkat pelayaran barat mediteria</h4>
                    <p>Berangkat Dari Rome (Civitavecchia), Italia Dengan Allure Of The Seas</p>
                    <p>Dari Harga</p>
                    <p>IDR. 9.620.000</p>
                    <hr style="margin-left: 15px;">
                    <h4 style="color: #1877f2;">View More</h4>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo BASEURL; ?>/img/jadwal3.jpg">
                <div class="detail">
                    <h4>12 Malam pelayaran spanyol-samudra atlantic</h4>
                    <p>Berangkat Dari Orlando (Pelabuhan Canaveral), Florida Dengan Oasis Of The Seas</p>
                    <p>Dari Harga</p>
                    <p>IDR. 10.525.000</p>
                    <hr style="margin-left: 15px;">
                    <h4 style="color: #1877f2;">View More</h4>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo BASEURL; ?>/img/jadwal4.jpg">
                <div class="detail">
                    <h4>7 Malam karibia barat & Perfect day</h4>
                    <p>Berangkat Dari Orlando (Pelabuhan Canaveral), Florida Dengan Allure Of The Seas</p>
                    <p>Dari Harga</p>
                    <p>IDR. 11.220.000</p>
                    <hr style="margin-left: 15px;">
                    <h4 style="color: #1877f2;">View More</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="text-title">
            <h1>Temukan tempat hiburan yang indah dengan keluarga anda</h1>
        </div>
        <div class="content">
            <div class="box-right">
                <p>Be Fun</p>
            </div>
            <div class="card img-1">
                <div class="img-border"></div>
                <img src="<?php echo BASEURL; ?>/img/kota1.jpg">
                <p>London</p>
            </div>
            <div class="card img-2">
                <div class="img-border"></div>
                <img src="<?php echo BASEURL; ?>/img/kota2.jpg">
                <p>Amsterdam</p>
            </div>
            <div class="card img-3">
                <div class="img-border" style="border-top: 4px solid #fff;
                    border-left: 4px  solid #fff;"></div>
                <img src="<?php echo BASEURL; ?>/img/kota3.jpg">
                <p style="color: #fff;" class="dot">New York</p>
            </div>
        </div>
    </section>
    <section class="section-center">
        <div class="left-side-card">
            <h5>Destination</h5>
            <h2>Pilih Kapal Pesiar Yang Anda Inginkan</h2>
            <p>Anda bisa memilih kapal pesiar yang ingin anda naikin, kami Rayon's telah bekerja sama
                dengan Royal Caribbean Dan MSC Cruise agar anda bisa menikmati kapal yang sangat mewah sambil melihat
                pemandangan laut yang indah dengan pelayanan yang terbaik dan jaminan harga terbaik.
            </p>
            <a href="<?php echo BASEURL; ?>/kapal">
                <h4>View Our Ship</h4>
            </a>
            <h2 style="margin-top: 40px;">Atau kalian bisa click gambar di bawah</h2>
            <p style="margin-bottom: -85px;">Anda bisa memilih kapal pesiar yang anda inginkan sebagai berikut : MSC Meragvilia, allure of the seas, MSC Bellissima, dan oasis of the seas.</p>
            <div class="card-slide">
                <li><img src="<?php echo BASEURL; ?>/img/kapal-pesiar-1.jpg" class="small-img" alt=""></li>
                <li><img src="<?php echo BASEURL; ?>/img/kapal-pesiar-2.jpg" class="small-img" alt=""></li>
                <li><img src="<?php echo BASEURL; ?>/img/kapal-pesiar-3.jpg" class="small-img" alt=""></li>
                <li><img src="<?php echo BASEURL; ?>/img/kapal-pesiar-4.jpg" class="small-img" alt=""></li>
            </div>
            <div class="under-left">
                <h2>Top Destination</h2>
                <div class="card-under-left">
                    <div class="detail-under-left">
                        <ul>
                            <li>Pelayaran Alaska</li>
                            <li>Pelayaran Caribia</li>
                            <li>Pelayaran Hawaii</li>
                        </ul>
                        <ul style="margin-left: 150px;">
                            <li>Pelayaran Bahamas</li>
                            <li>Pelayaran Eropa</li>
                            <li>Pelayaran Riviera Meksiko</li>
                        </ul>
                        <ul style="margin-left: 100px;">
                            <li>Pelayaran Kanal Panama</li>
                            <li>Pelayaran Journy Luar Biasa</li>
                            <li>Pelayaran Sydney</li>
                        </ul>
                    </div>
                    <a href="#">
                        <h4 style="margin-left: 60px; margin-top: 80px;">Telusuri Kemana Kami berlayar</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-right-slide">
            <img src="<?php echo BASEURL; ?>/img/kapal-pesiar-1.jpg" alt="" id="slides">
            <div class="detail-pesiar">
                <a href="#"><i class="fas fa-ship" style="transform: translate(32px, 35px); font-size: 18px;"></i>
                    <h5>The Best Ship You Can Ride</h5>
                </a>
                <p>Rasakan tujuan anda dengan menaikin kapal yang super mewah.</p>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="top-title">
            <h1>Jelajahi Liburan Anda Dengan Berlayar Ke Penjuru Dunia</h1>
        </div>
        <div class="holiday">
            <div class="card-holiday" style="margin-right: -40px; transform: translateX(-20px);">
                <img src="<?php echo BASEURL; ?>/img/safety.jpg" alt="">
                <div class="detail-holiday">
                    <h3>Tindakan Keselamatan Yang Ditingkatkan</h3>
                    <p> Ketenangan Pikiran yang membuat pelayaran serasa nyaman dengan Tindakan Keselamatan
                        yang Ditingkatkan dengan protokol keselamatan yang ditingkatkan dan fleksibilitas pemesanan.</p>
                    <a href="#">
                        <h4>Learn More</h4>
                    </a>
                </div>
            </div>
            <div class="card-holiday" style="margin-right: -40px; transform: translateX(-10px);">
                <img src="<?php echo BASEURL; ?>/img/island.jpg" alt="">
                <div class="detail-holiday">
                    <h3>Telusuri Pulau Hawaii Yang Indah</h3>
                    <p>Hanya rayon yang mengunjungi 5 pulau dalam 7 hari dengan bermalam di maui dan kaui, dan berlayar selama 7 malam di lautan dengan menikmati hidangan dan pemandangan yang eksotik.</p>
                    <a href="#">
                        <h4>Explore Hawaii</h4>
                    </a>
                </div>
            </div>
            <div class="cards-holiday">
                <h3>Lihat pelayaran 2021 & 2022 Terbaru</h3>
                <p>dari islandia yang bergaya modern ke mediteria yang klasik,
                    Musim pelayaran baru Rayon telah tiba</p>
                <a href="#">
                    <h4 style="margin-left: 40px;">Explore</h4>
                </a>
            </div>
            <div class="cards-holiday" style="position: absolute; width: 380px; right: 1px; top: 700px;">
                <h3>Anak-Anak Bebas Berlayar</h3>
                <p>program pemuda dan kapal gratis kami membuat panggilan dengan anak-anak
                    dari segala usia menjadi singkat dan Menyenangkan.</p>
                <a href="#">
                    <h4 style="margin-left: 40px;">Learn More</h4>
                </a>
            </div>
        </div>
        <div class="img-slide"></div>
        <div class="img-slide-2">
            <div class="img-slide-3"></div>
        </div>
        <div class="img-right">
            <h2>Royal Rayon's Defference</h2>
            <div class="ditail-right">
                <h4>Fell Free</h4>
                <p>Tidak ada ketentuan. Hanya hiburan pemenang penghargaan
                    dan pilihan makan beragam dari satu-satunya jalur pelayaran yang dibangun untuk liburan serbaguna,
                    Dengan pemandangan yang indah dan eksotik yang membuat kita betah berlayar kemanapun.</p>
            </div>
            <div class="ditail-right">
                <h4>Get More with Free At Sea</h4>
                <p>Perkaya liburan pesiar Anda dengan hingga 5 Penawaran Gratis dengan promosi Rayon's di Laut Gratis.
                    Pilih dari Open Bar Gratis, Makanan Khusus Gratis, Wisata Pantai Gratis, WiFi gratis, dan Layanan Anak-Anak Gratis.</p>
            </div>
            <div class="ditail-right">
                <h4>Holiday Your Way</h4>
                <p>
                    Kapal pemenang penghargaan kami dirancang untuk Anda nikmati seperti yang Anda pilih saat berlayar ke destinasi indah di seluruh dunia.
                    Tambahkan berbagai pilihan tempat makan yang luar biasa dan hiburan spektakuler dan Anda akan mengalami liburan terbaik Anda.</p>
            </div>
        </div>
        </div>
    </section>
    <section class="section-4">
        <div class="title-header">
            <h1>Pilih Petualangan Anda Sendiri</h1>
            <p>Makan malam, menari, tertawa, dan bersantai dengan aktivitas di Kapal,
                hiburan utama, dan wisata pantai yang tak terlupakan.</p>
            <hr style="width: 50px; height: 2px; background: #000; border-radius: 5px; transform: translate(-50%, 80px) rotate(90deg); border: none;
                position: absolute; left: 50%;">
        </div>
        <div class="content-last">
            <img src="<?php echo BASEURL; ?>/img/food2.jpg" alt="">
            <div class="last-card">
                <div class="detail-last-card">
                    <p class="hd">Makan di atas kapal</p>
                    <h2>Makanan Untuk Semua Selera. Kapan saja.</h2>
                    <p>
                        Nikmati hidangan empat macam dan sebotol anggur yang enak. Atau ambil burger panas dari panggangan.
                        Tanpa waktu makan yang tetap atau tempat duduk yang ditentukan sebelumnya,
                        Anda dapat mengikuti suasana hati Anda, bukan jadwal.
                    </p>
                    <a href="#">
                        <h5>Explore Menu Makan</h5>
                    </a>
                </div>
            </div>
            <div class="row-row">
                <div class="row-card">
                    <img src="<?php echo BASEURL; ?>/img/band.jpg" alt="">
                    <h3 class="edit">One Direction Is Coming</h3>
                    <p>Jangan lewatkan penampilan dari One Direction Yang Spectacular.</p>
                    <h3><a href="#">Explore Entertain</a></h3>
                </div>
                <div class="row-card" style="transform: translate(330px, -725px);">
                    <img src="<?php echo BASEURL; ?>/img/drink.webp" alt="">
                    <h3 class="edit">Bersulang di atas kapal</h3>
                    <p>Anda bisa bersantai dengan keluarga anda atau teman anda dengan bersantai di bar.</p>
                    <h3><a href="#">Explore Bar And Lounges</a></h3>
                </div>
                <div class="row-card" style="transform: translate(330px, -350px);">
                    <img src="<?php echo BASEURL; ?>/img/limb.jpg" alt="">
                    <h3 class="edit">Pergi mengambil risiko</h3>
                    <p>Apakah anda berani untuk menantang nyali anda atau tidak.</p>
                    <h3><a href="#">Explore Aktifitas Kapal</a></h3>
                </div>
                <div class="row-card" style="transform: translate(0, -350px);">
                    <img src="<?php echo BASEURL; ?>/img/treasure.webp" alt="">
                    <h3 class="edit">Temukan Harta Karun</h3>
                    <p>Temukan benda berharga di dasar laut dan nikmati pantai yang indah.</p>
                    <h3><a href="#">Explore Pantai</a></h3>
                </div>
            </div>
        </div>
        <p style="position: absolute; left: 80px; font-family: 'Sniglet', cursive; font-size: 11px; border: none;
                letter-spacing: 1px;">Gratuities, Beverage, Specialty Service Charges & other restrictions may apply.
        </p>
    </section>
    <div class="section-5">
        <div class="edit-card-circle">
            <i class="fas fa-angle-double-up"></i>
        </div>
    </div>
    <div id="loader">
        <img src="<?php echo BASEURL; ?>/img/loader.gif">
    </div>
<?php endif; ?>