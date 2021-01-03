<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo BASEURL;?>/UbahTambahPelabuhan/Ubah" class="sign-in-form" method="POST">
          <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
            <h2 class="title">Ubah Data</h2>
          <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-anchor"></i>
              <input type="text" name="ubah_pelabuhan_awal" placeholder="Pelabuhan Awal" value="<?php echo $data["pelabuhan_awal"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-anchor"></i>
              <input type="text" name="ubah_pelabuhan_akhir" placeholder="Pelabuhan Akhir"  value="<?php echo $data["pelabuhan_akhir"]; ?>" autocomplete="off">
            </div>
          </div>
            <div class="input-field">
              <i class="fas fa-calendar-alt"></i>
              <input type="text" name="ubah_jml_hari" placeholder="Jumlah Hari"  value="<?php echo $data["jml_hari"]; ?>" autocomplete="off">
            </div>
            <button type="submit" class="btn solid" name="ubah_dataPelabuhan">Ubah</button>
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
          <form action="<?php echo BASEURL; ?>/UbahTambahPelabuhan/Tambah" class="sign-up-form" method="POST">
            <h2 class="title">Tambah Data</h2>
          <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-anchor"></i>
              <input type="text" name="pelabuhan_awal" placeholder="Pelabuhan Awal" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-anchor"></i>
              <input type="text" name="pelabuhan_akhir" placeholder="Pelabuhan Akhir" autocomplete="off">
            </div>
          </div>
            <div class="input-field">
              <i class="fas fa-calendar-alt"></i>
              <input type="text" name="jumlah_hari" placeholder="Jumlah Hari" autocomplete="off">
            </div>
            <button type="submit" class="btn" name="tambah_dataPelabuhan">Tambah</button>
            <p class="social-text">Partner Kami</p>
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
            <button class="btn transparent" id="sign-up-btn">
              Tambah Data
            </button>
          </div>
          <img src="<?php echo BASEURL; ?>/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Tambah Data Kapal Sesuai Dengan Yang Di ajukan !</h3>
            <p>
                Hati-Hati Dalam Menambahkan Data Yang Di Berikan Kepada Manager Dan Jangan Bersikap Ceroboh.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Ubah Data
            </button>
          </div>
          <img src="<?php echo BASEURL; ?>/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>