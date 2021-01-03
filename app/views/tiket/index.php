<?php 
session_start();
function waktu($hour, $date){
    return " $hour $date";
}
?>
<section class="tiket-section-1">
<img src="<?php echo BASEURL;?>/img/header-2.jpg" class="tiket-img">
<div class="tiket-edit"></div>
     <div class="tiket-container-left">
     <hr style="width: 80px; height: 2px; background: #fff; border: none; transform: translate(145px, 10px);">
        <p><?php echo waktu(date("H:i", time()+60*60*5),date("M d, Y")); ?><span style="margin-left: 100px;">Pelayaran Anda</span></p>
        <h1>Explore Your Cruise Ship.</h1>
        <button>Show More</button>
        <div class="tiket-slide">
        <i class="fas fa-long-arrow-alt-left"><i class="fas fa-long-arrow-alt-right" style="margin-left: 80px;"></i></i>
        <p><span>1</span>/4</p>
        <h5>Prev<span style="margin-left: 65px; font-size: 15px;">Next</span></h5>
        </div>
    </div>
    <div class="tiket-container-right">
        <img src="<?php echo BASEURL; ?>/img/inside-ship2.jpg">
    </div>
<section>
<section class="tiket-section-2">
    <div class="tiket-header-2">
        <hr class="tiket-hr-1">
        <h3>Jelajahi Acara Terkini Dengan Kami</h3>
        <h1>Acara Terkini</h1>
        <hr class="tiket-hr-2">
    </div>
    <div class="tiket-edit-center">
        <img src="<?php echo BASEURL; ?>/img/oasis-teater.jpg" alt="" class="tiket-edit-center-img">
        <div class="tiket-edit-card">
            <p>Teater</p>
            <p style="margin-top: 35px;">Check</p>
            <hr>
            <h5 style="margin-bottom: 20px;">1</h5>
            <h5>Hari</h5>
        </div>
    </div>
    <div class="tiket-edit-center-2">
        <img src="<?php echo BASEURL; ?>/img/oasis-dinner.png" alt="">
        <div class="tiket-edit-card-2">
            <p>Dinner</p>
            <p style="margin-top: 35px;">Check</p>
            <hr>
            <h5 style="margin-bottom: 5px;">3</h5>
            <h5>Hari</h5>
        </div>
    </div>
    <div class="tiket-card-center">
        <img src="<?php echo BASEURL;?>/img/maroon-5.jpg" alt="">
        <div class="card">
            <div class="tiket-detail">
                <p>Maroon 5</p>
                <h4>Konser Malam Yang Tidak Terlupakan</h4>
                <p>Ingin kencan malam dengan pasangan Anda? Pesan segelas anggur favorit Anda di
                    Trellis Bar sebelum salsa melangkah sepanjang malam untuk menampilkan band Maroon 5.</p>
                <i class="far fa-clock" style="color: #22242a; margin-bottom: 10px;"><span style="margin-left: 7px; font-family: 'Sniglet', cursive; color: #22242a;">19.00 - 20.25 P.M</span></i>
                <br>
                <i class="far fa-calendar-alt" style="color: #22242a; margin-bottom: 20px;"><span style="margin-left: 7px; font-family: 'Sniglet', cursive; color: #22242a;">Hari Ke 2 Pelayaran</span></i>
                <button>Show More</button>
            </div>
        </div>
    </div>
</section>
<section class ="tiket-section-5">
    <div class="tiket-d-flex">
        <div class="tiket-left-5">
            <img src="<?php echo BASEURL; ?>/img/tiket-info-5.jpg" alt="">
        </div>
        <div class="tiket-right-5">
            <h1>Pelayaran Anda</h1>
            <h3>Selamat datang pelanggan kami yang terhormat telah memesan tiket di situs kami. Di sini
                anda memesan tiket dengan tujuan ke <?php echo $data["tujuan"]; ?> dan berangkat dari <?php echo $data["berangkat"] ?>
                Pada tanggal <?php echo $data["tanggal"] ?> Selama <?php echo $data["total_hari"] ?>. Anda akan menaiki Kapal <?php echo $data["kapal"] ?>
                yang mewah dengan total harga IDR.<?php echo $data["harga"] ?>. Kami harap anda puas dan nyaman dengan pelayanan yang kami berikan.
            </h3>
        </div>
    </div>
</section>
<section class="tiket-section-4">
        <div class="container">
            <div class="user singupbox">               
                <div class="formbox">
                    <form method="POST">
                        <h2>Konfirmasi Pemesanan</h2>
                        <p id="text-regis" class="inner" style="transform: translateY(-20px);"></p>
                        <input type="hidden" name="user" id="user" value="<?php echo $_SESSION["username"]; ?>">
                        <input type="hidden" id="id_pemesanan" name="id_pemesanan" value="<?php echo $data['id'] ?>">
                    <div class="input-edit">
                        <input type="text" name="nama" placeholder="Nama Anda" id="nama">
                        <input type="email" name="email" placeholder="Email Anda" id="email">
                    </div>
                    <div class="input-edit">
                        <input type="password" name="nik_visa" placeholder="NIK/VISA" id="rekening-2">
                        <input type="password" name="nik_visa2" placeholder="Confirm NIK/VISA" id="rekening-3">
                    </div>
                    <div class="input-edit">
                        <input type="text" name="tiket" id="tiket" placeholder="Jumlah Tiket" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        <select id="gender" style="width: 55%;">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="input-edit">
                        <input type="text" name="dewasa" placeholder="Jml Dewasa" id="dewasa" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        <input type="text" name="anak" placeholder="Jml Anak-Anak" id="anak" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                    </div>
                    <div class="edit">
                        <button type="submit" value="Register" onclick="return Register(event)">Create</button>
                        <button type="reset" value="reset" id="reset" class="reset">Reset</button>
                    </div>
                    </form>
                </div>
                <div class="imgbox"><img src="<?php echo BASEURL; ?>/img/inside-ship.jpeg"></div>
            </div>
        </div>
    </section>
    <section class="section-info-tiket-2" id="section-info-tiket-2" style="display: none;">
    <div class="card-info-flex-2">
            <div class="card-info-2">
            <h5 class="bukti">Bukti Pemesanan</h5>
                <div class="text-flex">
                    <div class="card-info-detail">
                        <p style="width: 150%;">No Pemesan</p>
                        <p style="width: 150%;">Nama Anda</p>
                        <p style="width: 150%;">Email Anda</p>
                        <p style="width: 150%;">Dewasa</p>
                        <p style="width: 150%;">Anak-Anak</p>
                        <p style="width: 150%;">NIK/VISA</p>
                        <p style="width: 150%;">Jml Tiket</p>
                        <p style="width: 150%;">Kapal</p>
                        <p style="width: 150%;">Berangkat</p>
                        <p style="width: 150%;">Tujuan</p>
                        <p style="width: 150%;">Tanggal</p>
                        <p style="width: 150%;">Total</p>
                    </div>
                    <hr class="bukti-diPesanan">
                    <img src="<?php echo BASEURL; ?>/img/rayon.png">
                    <svg id="barcode"></svg>
                    <h4 style="font-family: 'Sniglet', cursive; font-weight: 400; margin-top: 20px">Note : Harap Selesaikan Pembayaran !</h4>
            </div>
        </div>
    </div>
</section>
    <div id="loader-2">
        <img src="<?php echo BASEURL; ?>/img/loader.gif">
    </div>