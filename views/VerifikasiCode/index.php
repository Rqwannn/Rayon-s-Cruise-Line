<div class="container">
         <div class="box">
             <div class="box-side">
                 <div class="header-box">
                 <i class="fas fa-info-circle"></i>
                 <i class="far fa-envelope"></i>
                    </div>
        <div class="right">
             <h4>Verifikasi Akun Anda</h4>
             <?php if(isset($_POST["submit"])) : ?>
                <p class="status-code"><?php echo $data["Status"]; ?></p>
             <?php endif; ?>
                <form action="<?php echo BASEURL; ?>/verifikasicode/verifikasi" method="POST">
                    <div class="inputbox"> 
                        <input type="text" name="code" id="code" required="required" autocomplete="off" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        <label for="code">Code Verifikasi : </label>
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