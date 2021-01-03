<section class="tambahStaff-section-1">
    <div class="tambahStaff-header">
        <h1><i class="fas fa-user-friends mr-2"></i><span>Tambah Staff</h1>
    </div>
    <div class="container">
        <form action="<?php echo BASEURL; ?>/tambahstaff/tambah" method="POST" enctype="multipart/form-data">
            <div class="img-login">
                <img src="<?php echo BASEURL; ?>/img/profile.webp" alt="">
                <label for="file">Ganti Profile</label>
                <input type="file" name="gambar" id="file" style="display: none;">
            </div>
            <div class="form-login">
                <p id="staff-js"></p>
                <div class="form-flex">
                    <input type="text" name="username" placeholder="Username" id="username">
                    <input type="email" name="email" placeholder="Email" id="email">
                </div>
                <div class="form-flex">
                    <input type="text" name="nama_depan" placeholder="Nama Depan" id="nama_depan">
                    <input type="text" name="nama_belakang" placeholder="Nama Belakang" id="nama_belakang">
                </div>
                <div class="form-flex">
                    <input type="password" name="password" placeholder="Password" id="password">
                    <input type="password" name="password2" placeholder="Konfirmasi Password" id="password2">
                </div>
                <button type="submit" name="submit" onclick="return TambahStaff()">Tambah Staff</submit>
            </div>
        </form>
    </div>
</section>