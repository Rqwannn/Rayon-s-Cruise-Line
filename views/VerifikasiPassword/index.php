<div class="container">
         <div class="box">
             <div class="box-side">
                 <div class="header-box">
                 <i class="fas fa-info-circle"></i>
                 <i class="far fa-envelope"></i>
                    </div>
        <div class="right">
             <h4>Ubah Password Anda</h4>
             <?php if(isset($_POST["submit"])) : ?>
                <p class="status-code"><?php echo $data["Status"]; ?></p>
             <?php endif; ?>
                <form action="<?php echo BASEURL; ?>/verifikasipassword/Verifikasi" method="POST">
                    <div class="inputbox"> 
                        <input type="password" name="password" id="password" required="required" autocomplete="off">
                        <label for="password">Password Baru : </label>
                    </div>
                    <div class="inputbox"> 
                        <input type="password" name="password2" id="password2" required="required" autocomplete="off">
                        <label for="password">Konfirmasi Password : </label>
                    </div>
                    <div class="inputbox"> 
                        <input type="hidden" value="<?php echo $data["email"] ?>" name="email" id="email" required="required" autocomplete="off">
                    </div>
                    <button type="submit" id="submit" name="submit">Submit</button>
                <form>
                <a href="<?php echo BASEURL; ?>/verifikasiemail" id="Register"><p>Kembali</p></a>
            </div>
        </div>
    </div>
</div>