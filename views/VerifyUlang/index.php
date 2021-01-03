<div class="verifikasi-ulang">
    <div class="verifikasi-ulang-card">
        <form method="POST" action="<?php echo BASEURL ?>/VerifyUlang/verifikasiToken">
            <div class="verifikasi-ulang-header">
                <h5>Silahkan Verifikasi Email Anda</h5>
                <button type="submit" name="email2"><?php echo $data["email"] ?><input type="hidden" name="email" value="<?php echo $data["email"] ?>"></button>
            </div>
            <div class="verifikasi-ulang-content">
                <div class="verifikasi-ulang-position">
                    <div class="left-verifikasi-ulang">
                        <h5>sebelum melanjutkan. silakan periksa email Anda untuk tautan verifikasi. jika Anda tidak menerima email tersebut.</h5>
                        <button type="submit" name="submit">klik di sini untuk meminta yang lain.</button>
                    </div>
                    <div class="right-verifikasi-ulang">
                        <a href="<?php echo BASEURL ?>/login">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>