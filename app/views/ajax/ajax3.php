<?php

$keyword = $_GET["key"];

$conn = mysqli_connect("localhost", "root", "", "rayon");
$product = mysqli_query($conn, "SELECT * FROM tiket_tersedia WHERE nama_partner LIKE '%$keyword%' OR Kapal LIKE 
                        '%$keyword%' OR berangkat LIKE '%$keyword%' OR tujuan LIKE '%$keyword%' OR tanggal LIKE '%$keyword%'
                        OR tanggal_pulang LIKE '%$keyword%' OR total_hari LIKE '%$keyword%' OR harga LIKE '%$keyword%'");

?>
<div class="card-pencarian-flex-2">
    <?php foreach ($product as $result) : ?>
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
                    <a href="http://localhost/MVC-KapalLaut/public/tiket/<?php echo $result["id"] ?>" style="color: #fff; text-decoration: none;"><button type="submit" name="submit" id="submit">Beli Tiket</button></a>
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