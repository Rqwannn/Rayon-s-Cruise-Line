<?php 

    $sesion =  $_SESSION["username"];
    $VerifikasiAkun = $this->model("Data_model")->getAllUserBYSession($sesion);
    $active = $VerifikasiAkun["active"];
    if($active == 0){
        header("Location: " . BASEURL . "/home");
        exit;
    }

?>
<section class="kapal-section-1">
    <img src="<?php echo BASEURL;?>/img/header-3.jpg" class="tiket-img">
    <h2>Petualangan Seperti Bajak Laut</h2>
    <h1>Kapal Pesiar Telah Tiba</h1>
</section>
<div class="kapal-section-2">
    <div class="kapal-info-header">
        <p>     
            Anda akan menemukan sensasi tak berujung untuk setiap jenis petualang di salah satu kapal pesiar yang kami sediakan. 
            Dari pemberani hingga dengan para kuliner, 
            dan keluarga yang suka bersenang-senang hingga pasangan dalam liburan romantis.
        </p>
    </div>
</div>
    <div class="kapal-header">
        <h2>Info Kapal</h2>
    </div>
    <div class="info-kapalWrap">
        <?php foreach($data["data"] as $result) : ?>
            <div class="card-kapal">
                <div class="header-card-kapal">
                    <img src="<?php echo $result["gambar"] ?>" alt="">
                    <div class="hover-teks-kapal">
                        <p><?php echo $result["nama_kapal"] ?></p>
                    </div>
                </div>
                <div class="center-card-kapal">
                    <h4>Spesifikasi Kapal : </h4>
                    <p><?php echo $result["spesifikasi"] ?></p>
                </div>
                <div class="splash-heigth">

                </div>
                <div class="more-kapal">
                
                </div>
                <div class="bottom-card-kapal">
                    <div class="left-info-kapal">
                        <i class="fas fa-crown"></i>
                        <p><?php echo $result["kelas_pelayaran"] ?></p>
                    </div>
                    <div class="right-info-kapal">
                        <button type="submit" class="jelajahi-kapal">Jelajahi Kapal</button>
                        <button type="submit" class="lihat-kapal">Lihat Kapal</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="kapal-section-3">
        <div class="edit-card-circle">
            <i class="fas fa-angle-double-up"></i>
        </div>
    </div>
    <div id="loader">
        <img src="<?php echo BASEURL; ?>/img/loader.gif">
    </div>