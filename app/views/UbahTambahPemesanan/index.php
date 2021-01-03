<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo BASEURL;?>/UbahTambahPemesanan/Ubah" class="sign-in-form" method="POST">
          <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
          <input type="hidden" name="ubah_no_pemesanan" value="<?php echo $data["no_pemesanan"]; ?>">
          <input type="hidden" name="ubah_dewasa" value="<?php echo $data["dewasa"]; ?>">
          <input type="hidden" name="ubah_anak_anak" value="<?php echo $data["anak_anak"]; ?>">
          <input type="hidden" name="ubah_total" value="<?php echo $data["total"]; ?>">
          <input type="hidden" name="ubah_id_user" value="<?php echo $data["id_user"]; ?>">
          <input type="hidden" name="ubah_id_tiket" value="<?php echo $data["id_tiket"]; ?>">
          <input type="hidden" name="ubah_confirmed" value="<?php echo $data["confirmed"]; ?>">
            <h2 class="title">Ubah Data</h2>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="ubah_email_pemesan" placeholder="Email Pemesan" value="<?php echo $data["email_pemesan"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="ubah_nama_pemesan" placeholder="Nama Pemesan"  value="<?php echo $data["nama_pemesan"]; ?>" autocomplete="off"> 
            </div>
        </div>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-anchor"></i>
              <input type="text" name="ubah_berangkat" placeholder="Berangkat"  value="<?php echo $data["berangkat"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-anchor"></i>
              <input type="text" name="ubah_tujuan" placeholder="Tujuan"  value="<?php echo $data["tujuan"]; ?>" autocomplete="off">
            </div>
        </div>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-ship"></i>
              <input type="text" name="ubah_nama_kapal" placeholder="Nama Kapal"  value="<?php echo $data["nama_kapal"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fab fa-cc-visa"></i>
              <input type="text" name="ubah_nik_visa" placeholder="NIK / VISA"  value="<?php echo $data["nik_visa"]; ?>" autocomplete="off">
            </div>
        </div>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-calendar-alt"></i>
              <input type="text" name="ubah_tanggal" placeholder="Tanggal"  value="<?php echo $data["tanggal"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-ticket-alt"></i>
              <input type="number" name="ubah_tiket" placeholder="Tiket"  value="<?php echo $data["tiket"]; ?>" autocomplete="off">
            </div>
        </div>
            <button type="submit" class="btn solid" name="ubah_dataPemesanan">Ubah</button>
            <p class="social-text">Partner kami</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-ebay"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-uber"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-amazon"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-paypal"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Pastikan Data Yang Di Ubah Benar !</h3>
            <p>
              Semangat Bekerja Untuk Para Admin Yang Menggurus Data Dari Pt. Rayon Dengan Jujur Dan Adil.
            </p>
          </div>
          <img src="<?php echo BASEURL; ?>/img/log.svg" class="image" alt="" />
        </div>
    </div>