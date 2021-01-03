<?php 

    $sesion =  $_SESSION["username"];
    $VerifikasiAkun = $this->model("Data_model")->getAllUserBYSession($sesion);
    $active = $VerifikasiAkun["active"];
    if($active == 0){
        header("Location: " . BASEURL . "/home");
        exit;
    }

?>
<section class="pesanan-section-1">
	<div class="pesanan-header-1"></div>
</section>
<section class="pesanan-section-2">
	<div class="pesanan-header">
		<h1>Pesanan Anda</h1>
	</div>
	<div class="pesanan-container">
		<div class="pesanan-container-flex">
			<?php foreach( $data["data"] as $result) : ?>
				<?php if( $_SESSION["username"] == $result["id_user"]) : ?>
					<div class="pesanan-card">
						<div class="pesanan-more-detail">
						<div class="pesanan-card-detail">
							<p style="width: 110%;">No Pesanan</p>
							<p>Berangkat</p>
							<p>Tujuan</p>
							<p>Tanggal</p>
							<p>Total</p>
							<p>Status</p>
						</div>
						<div class="pesanan-card-detail" style="margin-left: 100px; text-align: right;">
							<p><?php echo $result["no_pemesanan"]; ?></p>
							<p><?php echo $result["berangkat"]; ?></p>
							<p><?php echo $result["tujuan"]; ?></p>
							<p><?php echo $result["tanggal"]; ?></p>
							<p><?php echo $result["total"]; ?></p>
							<?php
							$color = "status-pembayaran-true";
							$status = "Lunas";
							if ($result['confirmed'] == 0) {
								$color = "status-pembayaran-false";
								$status = "Belum Lunas";
								if (strtotime(date("Y-m-d")) >= strtotime($result['tanggal'])) {
									$status = "Gagal";
									$color = "status-pembayaran-false";
								}
							}
							?>
							<p class="<?php echo $color; ?>" id="ambil-value"><?php echo $status; ?></p>
						</div>
					</div>
					<div class="pesanan-button">
							<button type="submit" class="detail-pemesanan" id="<?php echo $result["id"]; ?>">Detail</button>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="section-info-tiket-3" id="section-info-tiket-3">
    <div class="card-info-flex-3">
            <div class="card-info-3">
				<label id="expant-pesanan">
						<img src="<?php echo BASEURL; ?>/img/close.png">
			    </label>
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