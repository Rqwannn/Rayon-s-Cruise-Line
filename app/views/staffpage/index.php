<section class="staff-dasbord">
    <div class="staff-header">
        <h1><i class="fas fa-tachometer-alt mr-2"></i><span class="Dasbord">Dashbord Staff</span></h1>
    </div>
    <div class="card-wrap">
        <div class="card-content">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                    <h2 class="PesanTiket"><?php echo count($data["data"]); ?></h2>
                    <h3>Pesan Tiket</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="fas fa-ship margin-card-1" style="color: #1666cf;"></i>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/staffpage">
                    <div class="under-card-content" style="background: #1666cf;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-content color-card-2">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                    <h2 class="TransaksiBerhasil"><?php echo count($data["berhasil"]); ?></h2>
                    <h3 style="width: 150%;">Transaksi Berhasil</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="fas fa-check-circle margin-card-2" style="color: #d33b1c;"></i>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/transaksiberhasil">
                    <div class="under-card-content" style=" background: #d33b1c;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-content color-card-3">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                    <h2 class="TransaksiMenunggu"><?php echo count($data["menunggu"]); ?></h2>
                    <h3 style="width: 150%;">Transaksi Menunggu</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="fas fa-cut margin-card-3" style="color: #17ac04;"></i><span>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/transaksimenunggu">
                    <div class="under-card-content" style="background: #17ac04;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-content color-card-4">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                    <h2 class="TransaksiGagal"><?php echo count($data["gagal"]); ?></h2>
                    <h3 style="width: 150%;">Transaksi Gagal</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="far fa-times-circle margin-card-4" style="color: #ad0300;"></i><span>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/transaksigagal">
                    <div class="under-card-content" style="background: #ad0300;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="staff-diagram">
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="canvas"></canvas>
        </div>
    </div>
</section>
<section class="staff-dasbord-2">
    <div class="dasbord-2-header">
        <h1>Pemesanan Tiket</h1>
    </div>
    <hr class="line-dasbord-2">
    <!-- <div class="upper-left-dasbord">
        <h4>Tampilkan</h4>
        <input type="number" maxlength="2" value="4">
        <h4>Antrian</h4>
    </div>
    <div class="upper-right-dasbord">
        <h4>Search :</h4>
        <input type="text" name="input-keyword" class="input-keyword">
    </div> -->
    <table id="myTable" class="table table-bordered table-hover">
        <thead class="">
            <tr>
                <th>No</th>
                <th>No Pemesanan</th>
                <th>Nama Pemesan</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data["data"] as $result) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $result["no_pemesanan"]; ?></td>
                    <td><?php echo $result["nama_pemesan"]; ?></td>
                    <td><?php echo $result["total"]; ?></td>
                    <?php
                    $color = "text-success";
                    $status = "Lunas";
                    if ($result['confirmed'] == 0) {
                        $color = "text-danger";
                        $status = "Belum Lunas";
                        if (strtotime(date("Y-m-d")) >= strtotime($result['tanggal'])) {
                            $status = "Gagal";
                        }
                    }
                    ?>
                    <td class="<?php echo $color ?>">
                        <?php echo $status; ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="dasbord-2-header mt-5">
        <h1>User</h1>
    </div>
    <hr class="line-dasbord-2">
    <!-- <div class="upper-left-dasbord">
        <h4>Tampilkan</h4>
        <input type="number" maxlength="2" value="4">
        <h4>Antrian</h4>
    </div>
    <div class="upper-right-dasbord">
        <h4>Search :</h4>
        <input type="text" name="input-keyword" class="input-keyword">
    </div> -->
    <table id="myTable2" class="table table-bordered table-hover">
        <thead class="">
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Username</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <input type="hidden" class="TotalAkun" value="<?php echo count($data["user"]) ?>">
            <?php $i = 1; ?>
            <?php foreach ($data["user"] as $result) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $result["email"]; ?></td>
                    <td><?php echo $result["username"]; ?></td>
                    <td style="color: <?php echo ($result["status"] == 1) ? "green" : "red" ?>;"><?php echo ($result["status"] == 1) ? "Online" : "Offline" ?></td>
                    <td>
                        <a href="<?php echo BASEURL; ?>/staffpage/Logout/<?php echo $result["id"]; ?>" class="hapusData">
                            <button type="submit" name="hapusData" onclick="return confirm('Yakin!')">Logout</button>
                        </a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>