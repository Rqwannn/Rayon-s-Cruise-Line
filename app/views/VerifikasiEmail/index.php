<div class="container">
         <div class="box">
             <div class="box-side">
                 <div class="header-box">
                 <i class="fas fa-info-circle"></i>
                 <i class="far fa-envelope"></i>
                    </div>
        <div class="right">
             <h4>Temukan Akun Anda</h4>
             <?php if(isset($_POST["submit"])) : ?>
                <p class="status-code"><?php echo $data["Status"]; ?></p>
             <?php endif; ?>
                <form action="<?php echo BASEURL; ?>/verifikasiemail" method="POST">
                    <div class="inputbox"> 
                        <input type="email" name="email" id="email" required="required" autocomplete="off">
                        <label for="email">Email : </label>
                    </div>
                    <button type="submit" id="submit" name="submit">Submit</button>
                <form>
                <a href="<?php echo BASEURL; ?>/login" id="Register"><p>Kembali</p></a>
            </div>
        </div>
    </div>
</div>