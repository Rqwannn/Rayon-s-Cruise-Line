<?php 

session_start();

?><div class="container">
         <div class="box">
             <div class="box-side">
                 <div class="header-box">
                 <i class="fas fa-info-circle"></i>
                 <i class="far fa-envelope"></i>
                    </div>
         <div class="left">
             <img src="<?php echo BASEURL; ?>/img/hey.svg">
             <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f" id="facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></i></a></li>
                </ul> 
             </div>
         </div>
         <p class="paragraf-center">-- ATAU --</p>
             <div class="right">
             <h4>Login</h4>
        <form action="<?php echo BASEURL; ?>/login" method="POST">
            <div class="inputbox"> 
             <input type="text" name="username" id="username" required="required" autocomplete="off">
             <label for="username">Username : </label>
            </div>
            <div class="inputbox">
             <input type="password" name="password" id="password" required="required">
             <label for="password">Password : </label>
            </div>
            <div class="input-remember">
             <input type="checkbox" name="remember" id="remember">
             <label for="remember">Remember me </label>
            </div>
            <button type="submit" name="submit">Login</button>
        <form>
        <a href="<?php echo BASEURL; ?>/register" id="Register"><p>Bikin Akun Anda</p></a>
        <a href="<?php echo BASEURL; ?>/verifikasiemail" id="Register"><p style="margin-top: 40px;">Lupa Password ?</p></a>
            </div>
        </div>
    </div>
</div>