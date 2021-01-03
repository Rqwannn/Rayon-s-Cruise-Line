<div class="container">
         <div class="box">
             <div class="box-side">
                 <div class="header-box">
                 <i class="fas fa-info-circle"></i>
                 <i class="far fa-envelope"></i>
                    </div>
         <div class="left">
             <img src="<?php echo BASEURL; ?>/img/login.svg">
             <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f" id="facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></i></a></li>
                </ul> 
             </div>
         </div>
         <p class="paragraf-center">-- OR --</p>
             <div class="right">
             <h4>Register</h4>
        <form action="<?php echo BASEURL ;?>/register" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="images">
        <input type="hidden" name="nama_depan" value="user">
        <input type="hidden" name="nama_belakang" value="rayon">
        <div class="inputbox"> 
             <input type="email" name="email" id="email" required autocomplete="off">
             <label for="email">Email : </label>
            </div>
            <div class="inputbox"> 
             <input type="text" name="username" id="username" required autocomplete="off">
             <label for="username">Username : </label>
            </div>
            <div class="inputbox">
             <input type="password" name="password" id="password" required>
             <label for="password">Password : </label>
            </div>
            <div class="inputbox">
             <input type="password" name="password2" id="password2" required>
             <label for="password2">Confirm Password : </label>
            </div>
            <button type="submit" name="submit">Register</button>
        <form>
            <a href="<?php echo BASEURL;?>/login" id="Login"><h3>Sudah Punya Akun</h3></a>
              </div>
           </div>
        </div>
    </div>