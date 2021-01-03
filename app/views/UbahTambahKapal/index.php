<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo BASEURL;?>/UbahTambahKapal/Ubah" class="sign-in-form" method="POST">
          <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
            <h2 class="title">Ubah Data</h2>
            <div class="input-field">
              <i class="fas fa-ship"></i>
              <input type="text" name="ubah_nama_kapal" placeholder="Nama Kapal" value="<?php echo $data["kapal"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fab fa-gg"></i>
              <input type="text" name="ubah_kelas_pelayaran" placeholder="Kelas Pelayaran"  value="<?php echo $data["kelas"]; ?>" autocomplete="off">
            </div>
            <button type="submit" class="btn solid" name="ubah_dataKapal">Ubah</button>
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
          <form action="<?php echo BASEURL; ?>/UbahTambahKapal/Tambah" class="sign-up-form" method="POST">
            <h2 class="title">Tambah Data</h2>
            <div class="input-field">
              <i class="fas fa-ship"></i>
              <input type="text" name="nama_kapal" placeholder="Nama Kapal" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fab fa-gg"></i>
              <input type="text" name="kelas_pelayaran" placeholder="Kelas Pelayaran" autocomplete="off">
            </div>
            <button type="submit" class="btn" name="tambah_dataKapal">Tambah</button>
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