<footer div class="footer">
        <div class="container">
            <div class="left-side">
                <h3><i class="fab fa-shopware" id="fa-shopware-edit"></i>Rayon's</h3>
                <p>Cruise Line</p>
            </div>
            <div class="right-side">
                <h3>Follow Us</h3>
                <p style="transform: translateX(-40px);">Thanks For Your Visit</p>
            </div>
            <div class="wrapper">
                    <div class="button">
                        <div class="icon"><i class="fab fa-facebook-f"></i></div>
                        <label>Facebook</label>
                    </div>
                    <div class="button">
                        <div class="icon"><i class="fab fa-twitter"></i></div>
                        <label>Twitter</label>
                    </div>
                    <div class="button">
                        <div class="icon"><i class="fab fa-instagram"></i></div>
                        <label>Instagram</label>
                    </div>
                </div>
            <hr id="garis-footer">
        </div>
    </footer>
    <script src="<?php echo BASEURL; ?>/js/Kapal.js"></script>
    <script>
        const loading = document.getElementById('loader');

        window.addEventListener('load' , function(){
            setTimeout(function(){
                loading.style.display="none";
            }, 500)
        })
    </script>
</body>
</html>