<?php 
session_start();
?>
<div class="flex-chat">

    <div class="left-chat">
        <div class="left-header-chat">
            <div class="left-header-content">
                <img src="<?php echo BASEURL; ?>/img/profile.webp">
            </div>
            <div class="left-header-icon">
                <i class="fas fa-sync-alt"></i>
                <i class="fas fa-comment-alt"></i>
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="left-search-chat">
            <div class="left-line-top"></div>
            <div class="left-search">
                <div class="left-search-position">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search" name="input-keyword">
                </div>
            </div>
            <div class="left-line-bottom"></div>
        </div>
    
        <div class="left-content-chat">
            <?php foreach($data["email"] as $result) : ?>
                <?php if($_SESSION["username"] == $result["id_user"] ) : ?>
                    <div class="left-card-content">
                        <div class="left-card-img">
                            <img src="<?php echo BASEURL; ?>/img/profile.webp">
                        </div>
                        <div class="rigth-card-status">
                            <div class="right-card-position">
                                <h4><?php echo $result["id_staff"] ?></h4>
                                <h5></h5>
                            </div>
                            <div class="right-card-position-2">
                                <h5><?php echo $result["waktu"] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php foreach($data["email"] as $result) : ?>
                <?php if($_SESSION["username"] == $result["id_staff"] ) : ?>
                    <div class="left-card-content">
                        <div class="left-card-img">
                            <img src="<?php echo BASEURL; ?>/img/profile.webp">
                        </div>
                        <div class="rigth-card-status">
                            <div class="right-card-position">
                                <h4><?php echo $result["id_user"] ?></h4>
                                <h5></h5>
                            </div>
                            <div class="right-card-position-2">
                                <h5><?php echo $result["waktu"] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    
    </div>

    <div class="right-chat">
        <div class="right-header-chat">
            <div class="right-position-img">
                <img src="<?php echo BASEURL; ?>/img/profile.webp">
                    <div class="right-position-text">
                        <h4>Rahul</h4>
                        <h5>Online</h5>
                    </div>
                </div>
                <div class="right-header-icon">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </div>
            </div>
            <div class="right-content-chat">
                <div class="right-otherPeople-chat">
                    <h4>Sekitar 1 jam di proses ya pak tempat istirahatnya</h4>
                    <h5>09.37</h5>
                </div>
                <div class="right-own-chat">
                    <h4>Terima Kasih Atas Infonya Pak</h4>
                    <h5>09.38</h5>
                </div>
            </div>
            <div class="right-input-chat">
                <i class="far fa-grin"></i>
                <i class="fas fa-paperclip"></i>
                <form>
                    <input type="text" id="input-pesan" name="pesan" placeholder="Ketikan Pesan">
                    <button type="submit" name="submit" id="btn-pesan">
                        <i class="far fa-paper-plane"></i>
                    </button>
                </form>
        </div>
    </div>
</div>