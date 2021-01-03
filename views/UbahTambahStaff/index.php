<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo BASEURL;?>/UbahTambahStaff/Ubah" class="sign-in-form" method="POST">
          <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
            <h2 class="title">Ubah Data</h2>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="ubah_email" placeholder="Email" value="<?php echo $data["email"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="ubah_username" placeholder="Username"  value="<?php echo $data["username"]; ?>" autocomplete="off"> 
            </div>
        </div>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" name="ubah_nama_depan" placeholder="Nama Depan"  value="<?php echo $data["nama_depan"]; ?>" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" name="ubah_nama_belakang" placeholder="Nama Belakang"  value="<?php echo $data["nama_belakang"]; ?>" autocomplete="off">
            </div>
        </div>
            <div class="input-field">
              <i class="fas fa-unlock-alt"></i>
              <input type="password" name="ubah_password" placeholder="Password"  value="<?php echo $data["password"]; ?>" autocomplete="off">
            </div>
            <button type="submit" class="btn solid" name="ubah_dataStaff">Ubah</button>
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
          <form action="<?php echo BASEURL; ?>/UbahTambahStaff/Tambah" class="sign-up-form" method="POST">
            <h2 class="title">Tambah Data</h2>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Email" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" autocomplete="off">
            </div>
        </div>
        <div class="input-field-flex">
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" name="nama_depan" placeholder="Nama Depan" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" name="nama_belakang" placeholder="Nama Belakang" autocomplete="off">
            </div>
        </div>
            <div class="input-field">
              <i class="fas fa-unlock-alt"></i>
              <input type="password" name="password" placeholder="Password" autocomplete="off">
            </div>
            <button type="submit" class="btn" name="tambah_dataStaff">Tambah</button>
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
            <h3>Tambah Data Staff Sesuai Dengan Yang Di ajukan !</h3>
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