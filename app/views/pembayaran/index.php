<?php

session_start();

?>
<div class="info-kamar-detail">
    <section class="pelayaran-section-2">
        <div class="close-detail-kamar">
            <img src="<?php echo BASEURL; ?>/img/close.png">
        </div>
        <div class="pelayaran-content-flex">
            <div class="content-imgbx middle">
                <div class="content-imgbx-front">
                    <img src="<?php echo BASEURL; ?>/img/kamar-kapal-1.jpg" alt="">
                </div>
                <div class="content-imgbx-back">
                    <div class="back-content middle">
                        <h2>Info Kamar</h2>
                        <span>Royal Rayon</span>
                        <div class="menu-content">
                            <p>Jumlah Ruangan : 6</p>
                            <p>Harga Kamar : IDR. 700 K/Berlayar</p>
                            <p>Pelayanan Kamar : Bagus</p>
                            <p>Kelas Kamar : Family</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-imgbx middle">
                <div class="content-imgbx-front">
                    <img src="<?php echo BASEURL; ?>/img/kamar-kapal-2.jpg" alt="">
                </div>
                <div class="content-imgbx-back">
                    <div class="back-content middle">
                        <h2>Info Kamar</h2>
                        <span>Royal Rayon</span>
                        <div class="menu-content">
                            <p>Jumlah Ruangan : 8</p>
                            <p>Harga Kamar : IDR. 1.250 Jt/Berlayar</p>
                            <p>Pelayanan Kamar : Sangat Bagus</p>
                            <p>Kelas Kamar : VIP</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-imgbx middle">
                <div class="content-imgbx-front">
                    <img src="<?php echo BASEURL; ?>/img/kamar-kapal-3.jpg" alt="">
                </div>
                <div class="content-imgbx-back">
                    <div class="back-content middle">
                        <h2>Info Kamar</h2>
                        <span>Royal Rayon</span>
                        <div class="menu-content">
                            <p>Jumlah Ruangan : 8</p>
                            <p>Harga Kamar : IDR. 1.700 Jt/Berlayar</p>
                            <p>Pelayanan Kamar : Sangat Bagus</p>
                            <p>Kelas Kamar : Luxury</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-imgbx middle">
                <div class="content-imgbx-front">
                    <img src="<?php echo BASEURL; ?>/img/kamar-kapal-4.jpg" alt="">
                </div>
                <div class="content-imgbx-back">
                    <div class="back-content middle">
                        <h2>Info Kamar</h2>
                        <span>Royal Rayon</span>
                        <div class="menu-content">
                            <p>Jumlah Ruangan : 4</p>
                            <p>Harga Kamar : IDR. 550K/Berlayar</p>
                            <p>Pelayanan Kamar : Bagus</p>
                            <p>Kelas Kamar : Reguler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="pembayaran-section-1">
    <div class="pembayaran-header">
        <h3>Pembayaran</h3>
    </div>
    <div class="card-pembayaran-grid">
        <div class="card-pembayaran-1">
            <div class="card-pembayaran-left">
                <div class="pembayaran-left-header">
                    <h3>Rayon'sPay</h3>
                </div>
                <div class="pembayaran-left-list">
                    <ul>
                        <li class="button-set-1">Kartu Kredit/Debit</li>
                        <li class="button-set-2">Bank Transfer</li>
                        <li class="button-set-3">ATM</li>
                        <li class="button-set-4">Alfamart</li>
                        <li class="button-set-5">Indomart</li>
                        <li class="button-set-6">CIMB Clicks</li>
                        <li class="button-set-7">BCA ClickPay</li>
                        <li class="button-set-8">LinkAja</li>
                    </ul>
                </div>
            </div>
            <div class="card-pembayaran-right">
                <div class="card-pembayaran-time">
                    <h4 class="batas-waktu"></h4>
                </div>
                <div class="waktu-habis">
                    <h1>Oooppssss...Waktu Yang Ditentukan Telah Habis</h1>
                </div>

                <!-- KARTU KREDIT / DEBIT -->

                <div class="display-for-none">
                    <form action="<?php echo BASEURL; ?>/pembayaran/ubah" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header">
                                <h3>Kartu Kredit/Debit</h3>
                                <img src="<?php echo BASEURL; ?>/img/security-guarantee.png" alt="">
                                <img src="<?php echo BASEURL; ?>/img/visa.png" alt="">
                                <img src="<?php echo BASEURL; ?>/img/master-card.png" alt="">
                                <img src="<?php echo BASEURL; ?>/img/american-express.png" alt="">
                            </div>
                            <div class="content-pembayaran-form">
                                <div class="form-pembayaran">
                                    <div class="form-pembayaran-39">
                                        <label for="nomorKartu">Nomor Kartu</label>
                                        <label class="nomor-kartu-valid" style="color: red; font-style: italic;"></label>
                                    </div>
                                    <input type="text" name="nomor-kartu" id="nomorKartu" placeholder="Card Number">
                                </div>
                                <div class="form-pembayaran">
                                    <div class="form-pembayaran-7139">
                                        <div class="form-pembayaran-73">
                                            <label for="berlakuHingga">Berlaku Hingga</label>
                                            <label class="nomor-kartu-valid-4" style="color: red; font-style: italic;"></label>
                                            <input type="text" name="berlaku-hingga" id="berlakuHingga" placeholder="MM/YY" maxlength="5">
                                        </div>
                                        <div class="info-cvv">
                                            <div class="info-cvv-relative">
                                                <h5>CVV adalah bagian 3 digit terakhir di bagian belakang kartu kredit Anda, atau 4 digit di bagian depan kartu EMEX Anda.</h5>
                                            </div>
                                        </div>
                                        <div class="form-pembayaran-73">
                                            <div class="form-pembayaran-39">
                                                <label for="cvv">CVV</label>
                                                <label class="nomor-kartu-valid-3" style="color: red; font-style: italic; transform: translateX(-45px)"></label>
                                                <i class="fas fa-question-circle" id="hover-effect"></i>
                                            </div>
                                            <input type="password" name="cvv" id="cvv" placeholder="CVV" maxlength="3" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                        </div>
                                    </div>
                                    <div class="form-pembayaran">
                                        <div class="form-pembayaran-39">
                                            <label for="nomorDiKartu">Nama Di Kartu</label>
                                            <label class="nomor-kartu-valid-2" style="color: red; font-style: italic;"></label>
                                        </div>
                                        <input type="text" name="nomor-di-kartu" id="nomorDiKartu" placeholder="Name In Card">
                                        <label class="contohDebit"></label>
                                    </div>
                                </div>
                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga"></h5>
                                        <input type="hidden" name="id_harga" value="<?php echo $data["id"] ?>">
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas" onclick="return validasiDebit(e)">Bayar Dengan Kartu Kredit/Debit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- BANK TRANSFER -->

                <div class="display-for-none-2" style="display: none;">
                    <form action="#" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header">
                                <h3>Bank Transfer</h3>
                            </div>
                            <div class="content-pembayaran-form">
                                <div class="info-transfer">
                                    <div class="flexsibilitas">
                                        <i class="fas fa-info-circle"></i>
                                    </div>
                                    <div class="flexsibilitas">
                                        <h5>Anda bisa transfer dari layanan perbankan apapun(m-banking, SMS bangking atau ATM).</h5>
                                    </div>
                                </div>
                                <div class="rekening-tujuan">
                                    <h4>Pilih Rekening Tujuan</h4>
                                    <div class="card-pilih-rekening">
                                        <div class="card-pilih-flex">
                                            <div class="second-pilih-flex">
                                                <input type="radio" name="bank">
                                                <h3>Transfer BCA</h3>
                                            </div>
                                            <img src="<?php echo BASEURL; ?>/img/bca.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-pilih-rekening">
                                        <div class="card-pilih-flex">
                                            <div class="second-pilih-flex">
                                                <input type="radio" name="bank">
                                                <h3>Transfer Mandiri</h3>
                                            </div>
                                            <img src="<?php echo BASEURL; ?>/img/mandiri.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-pilih-rekening">
                                        <div class="card-pilih-flex">
                                            <div class="second-pilih-flex">
                                                <input type="radio" name="bank">
                                                <h3>Transfer BRI</h3>
                                            </div>
                                            <img src="<?php echo BASEURL; ?>/img/bri.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-pilih-rekening">
                                        <div class="card-pilih-flex">
                                            <div class="second-pilih-flex">
                                                <input type="radio" name="bank">
                                                <h3>Transfer BNI</h3>
                                            </div>
                                            <img src="<?php echo BASEURL; ?>/img/bni.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga-2"></h5>
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas">Bayar Dengan Bank Transfer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- ATM -->

                <div class="display-for-none-3" style="display: none;">
                    <form action="#" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header-2">
                                <h3>ATM</h3>
                                <div class="content-atm-header">
                                    <img src="<?php echo BASEURL; ?>/img/atm-bersama.png" alt="">
                                    <img src="<?php echo BASEURL; ?>/img/prima.png" alt="">
                                    <img src="<?php echo BASEURL; ?>/img/alto.png" alt="">
                                </div>
                            </div>
                            <div class="content-pembayaran-form">
                                <h4>Baca Sebelum Membayar</h4>
                                <div class="card-pembayaran-atm">
                                    <ul>
                                        <li>Anda bisa transfer dari layanan perbankan apapun (m-banking, SMS banking atau ATM).</li>
                                        <li>Terdapat biaya transaksi dari bank sebesar Rp6.500-Rp7.500.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga-7"></h5>
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas">Bayar Dengan ATM</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Alfamart -->

                <div class="display-for-none-4" style="display: none;">
                    <form action="#" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header-3">
                                <h3>Alfamart</h3>
                                <div class="content-indomart-header">
                                    <img src="<?php echo BASEURL; ?>/img/alfamart.png" alt="">
                                    <img src="<?php echo BASEURL; ?>/img/alfamidi.png" alt="">
                                </div>
                            </div>
                            <div class="content-pembayaran-form">
                                <h4>Baca Sebelum Membayar</h4>
                                <div class="card-pembayaran-atm">
                                    <ul>
                                        <li>Terdapat biaya tambahan dari Alfamart atau alfamidi Rp2.500 / transaksi.</li>
                                        <li>Biaya tersebut dapat berubah sewaktu-waktu tanpa pemberitahuan.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga-3"></h5>
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas">Bayar Dengan Alfamart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Indomart -->

                <div class="display-for-none-5" style="display: none;">
                    <form action="#" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header-3">
                                <h3>Indomart</h3>
                                <div class="content-indomart-header">
                                    <img src="<?php echo BASEURL; ?>/img/indomart.png" alt="">
                                </div>
                            </div>
                            <div class="content-pembayaran-form">
                                <h4>Baca Sebelum Membayar</h4>
                                <div class="card-pembayaran-atm">
                                    <ul>
                                        <li>Terdapat biaya tambahan dari Indomart Rp5.000 / transaksi.</li>
                                        <li>Biaya tersebut dapat berubah sewaktu-waktu tanpa pemberitahuan.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga-4"></h5>
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas">Bayar Dengan Indomart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- CIMB Click -->

                <div class="display-for-none-6" style="display: none;">
                    <form action="#" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header-3">
                                <h3>CIMB Clicks</h3>
                                <div class="content-indomart-header">
                                    <img src="<?php echo BASEURL; ?>/img/cimb.png" alt="">
                                </div>
                            </div>
                            <div class="content-pembayaran-form">
                                <h4>Baca Sebelum Membayar</h4>
                                <div class="card-pembayaran-atm">
                                    <ul>
                                        <li>Hanya berlaku untuk akun CIMB Clicks.</li>
                                        <li>Transaksi akan dilakukan langsung di situs CIMB Clicks.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga-5"></h5>
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas">Bayar Dengan CIMB Clicks</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- BCA ClickPay -->

                <div class="display-for-none-7" style="display: none;">
                    <form action="#" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header-3">
                                <h3>BCA Klikpay</h3>
                                <div class="content-indomart-header">
                                    <img src="<?php echo BASEURL; ?>/img/bca-clikpay.png" alt="">
                                </div>
                            </div>
                            <div class="content-pembayaran-form">
                                <h4>Baca Sebelum Membayar</h4>
                                <div class="card-pembayaran-atm">
                                    <ul>
                                        <li>Hanya berlaku untuk akun BCA Klikpay.</li>
                                        <li>Transaksi akan dilakukan langsung di situs BCA Klikpay.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga-6"></h5>
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas">Bayar Dengan BCA Klikpay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- LINK AJA -->

                <div class="display-for-none-8" style="display: none;">
                    <form action="#" method="POST">
                        <div class="content-pembayaran">
                            <div class="content-pembayaran-header-3">
                                <h3>LinkAja</h3>
                                <div class="content-indomart-header">
                                    <img src="<?php echo BASEURL; ?>/img/link-aja.png" alt="">
                                </div>
                            </div>
                            <div class="content-pembayaran-form">

                            </div>
                            <hr style="background: grey;">
                            <div class="hasil-pembayaran">
                                <div class="hasil-cupon">
                                    <h4>Tambahkan Kupon</h4>
                                </div>
                                <div class="hasil-keseluruhan">
                                    <div class="hasil-keseluruhan-header">
                                        <h4>Rincian Harga</h4>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Jumlah Tiket x <?php echo $data["tiket"]; ?></h5>
                                        <h5>IDR. <span class="total-tiket"><?php echo $data["total"]; ?></span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Layanan</h5>
                                        <h5>IDR. <span class="total-layanan">11000</span></h5>
                                    </div>
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Biaya Kamar</h5>
                                        <h5>IDR. <span class="total-kamar">0</span></h5>
                                    </div>
                                    <hr style="width: 90%; margin-left: 5%; margin-bottom: 5%; background: grey;">
                                    <div class="hasil-keseluruhan-list">
                                        <h5>Harga Total</h5>
                                        <h5 class="edit-total-harga">IDR. <input type="text" class="total-harga" name="total-harga-8"></h5>
                                    </div>
                                    <div class="pembayaran-submited">
                                        <h5>Dengan mengeklik tombol berikut, Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Rayon's.</h5>
                                        <button type="submit" name="pembayaran-lunas">Bayar Dengan LinkAja</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="card-pembayaran-2">
            <h1>No. Pesanan</h1>
            <h2 style="margin-top: -2%;"><?php echo $data["no_pemesanan"]; ?></h2>
            <hr style="background: grey;">
            <div class="pembayaran-flex-text">
                <h1>Perjalanan Anda</h1>
                <button type="submit" class="detail-pemesanan" id="<?php echo $data["id"]; ?>">Detail</button>
            </div>
            <h1 class="pembayaran-pelayaran">Pelayaran</h1>
            <h2 style="margin-top: 2%; color: grey"><?php echo $data["tanggal"]; ?></h2>
            <li class="pembayaran-pelayaran-2"><?php echo $data["berangkat"]; ?><i class="fas fa-long-arrow-alt-right"></i><?php echo $data["tujuan"]; ?></li>
            <hr style="background: grey;">
            <h1>Daftar Penumpang</h1>
            <div class="pembayaran-flex-text pembayaran-text-edit">
                <h1 class="pembayaran-pelayaran-3"><?php echo $data["nama_pemesan"] ?></h1>
                <h2>Dewasa</h2>
            </div>
        </div>
        <div class="card-pembayaran-3">
            <h1>Nama Kapal</h1>
            <h2><?php echo $data["nama_kapal"]; ?></h2>
            <hr style="background: grey;">
            <div class="pembayaran-flex-text">
                <h1>Tipe Kamar</h1>
                <h1 class="btn-detail-kamar">Detail</h1>
            </div>
            <div class="pembayaran-flex-text">
                <h1 class="btn-kamar-family" style="color: #000; cursor: pointer;">Family</h1>
                <h1 style="color: #000;"><i class="fas fa-check-circle ceklis-kaloBener" style="margin-right: 10px; display: none;"></i>IDR. <span class="kamar-family-harga">700000</span></h1>
            </div>
            <div class="pembayaran-flex-text">
                <h1 class="btn-kamar-vip" style="color: #000; cursor: pointer;">VIP</h1>
                <h1 style="color: #000;"><i class="fas fa-check-circle ceklis-kaloBener-2" style="margin-right: 10px; display: none;"></i>IDR. <span class="kamar-vip-harga">1250000</span></h1>
            </div>
            <div class="pembayaran-flex-text">
                <h1 class="btn-kamar-luxury" style="color: #000; cursor: pointer;">Luxury</h1>
                <h1 style="color: #000;"><i class="fas fa-check-circle ceklis-kaloBener-3" style="margin-right: 10px; display: none;"></i>IDR. <span class="kamar-luxury-harga">1700000</span></h1>
            </div>
            <div class="pembayaran-flex-text">
                <h1 class="btn-kamar-reguler" style="color: #000; cursor: pointer;">Reguler</h1>
                <h1 style="color: #000;"><i class="fas fa-check-circle ceklis-kaloBener-4" style="margin-right: 10px; display: none;"></i>IDR. <span class="kamar-reguler-harga">550000</span></h1>
            </div>
            <div class="pembayaran-flex-text">
                <h1 class="btn-kamar-presidential" style="color: #000; cursor: pointer;">Presidential</h1>
                <h1 style="color: #000;"><i class="fas fa-check-circle ceklis-kaloBener-5" style="margin-right: 10px; display: none;"></i>IDR. <span class="kamar-presidential-harga">153000000</span></h1>
            </div>
        </div>
    </div>
</section>
<section class="section-info-tiket-3" id="section-info-tiket-3">
    <div class="card-info-flex-3">
        <div class="card-info-3">
            <label id="expant-pesanan">
                <img src="<?php echo BASEURL; ?>/img/close.png">
            </label>
            <h5 class="bukti">Bukti Pemesanan</h5>
            <div class="text-flex">
                <div class="card-info-detail">
                    <p style="width: 150%;">No Pemesan</p>
                    <p style="width: 150%;">Nama Anda</p>
                    <p style="width: 150%;">Email Anda</p>
                    <p style="width: 150%;">Dewasa</p>
                    <p style="width: 150%;">Anak-Anak</p>
                    <p style="width: 150%;">NIK/VISA</p>
                    <p style="width: 150%;">Jml Tiket</p>
                    <p style="width: 150%;">Kapal</p>
                    <p style="width: 150%;">Berangkat</p>
                    <p style="width: 150%;">Tujuan</p>
                    <p style="width: 150%;">Tanggal</p>
                    <p style="width: 150%;">Total</p>
                </div>
                <hr class="bukti-diPesanan">
                <img src="<?php echo BASEURL; ?>/img/rayon.png">
                <svg id="barcode"></svg>
                <h4 style="font-family: 'Sniglet', cursive; font-weight: 400; margin-top: 20px">Note : Harap Selesaikan Pembayaran !</h4>
            </div>
        </div>
    </div>
</section>
<div id="loader">
    <img src="<?php echo BASEURL; ?>/img/loader.gif">
</div>