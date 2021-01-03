<section class="staff-dasbord">
    <div class="staff-header">
        <h1><i class="fas fa-tachometer-alt mr-2"></i>Dashbord</h1>
    </div>
    <div class="card-wrap">
        <div class="card-content">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                  <h2><?php echo count($data["pelabuhan"]); ?></h2>
                  <h3>Pelabuhan</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="fas fa-ship margin-card-1" style="color: #1666cf;"></i>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/pelabuhan">
                    <div class="under-card-content" style="background: #1666cf;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-content color-card-2">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                  <h2><?php echo count($data["pemesanan"]); ?></h2>
                  <h3>Pemesanan Tiket</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="fas fa-ticket-alt margin-card-2" style="color: #d33b1c;"></i>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/pemesanan">
                    <div class="under-card-content" style=" background: #d33b1c;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-content color-card-3">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                  <h2><?php echo count($data["staff"]); ?></h2>
                  <h3>Staff</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="fas fa-user-alt margin-card-3" style="color: #17ac04;"></i><span>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/staf">
                    <div class="under-card-content" style="background: #17ac04;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-content color-card-4">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                   <h2><?php echo count($data["kapal"]); ?></h2>
                   <h3>Kapal Terbaik</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="far fa-chart-bar margin-card-4" style="color: #ad0300;"></i><span>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/kapalterbaik">
                    <div class="under-card-content" style="background: #ad0300;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-content color-card-5">
            <div class="card-dasbord">
                <div class="left-card-dasbord">
                   <h2>1</h2>
                   <h3>Tambah Staff</h3>
                </div>
                <div class="right-card-dasbord">
                    <i class="fas fa-user-friends margin-card-5" style="color: #ff9501;"></i><span>
                </div>
            </div>
            <div class="under-card">
                <a href="<?php echo BASEURL; ?>/tambahstaff">
                    <div class="under-card-content" style="background: #ff9501;">
                        <h5>More Info <i class="fas fa-arrow-circle-right"></i></h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="staff-dasbord-2">
    <div class="dasbord-2-header">
        <h1>Staff</h1>
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
                <th>Email</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data["data"] as $result) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $result["email"]; ?></td>
                    <td><?php echo $result["nama_depan"]; ?> <?php echo $result["nama_belakang"]; ?></td>
                    <td style="color: <?php echo($result["status"] == 1) ? "green" : "red" ?>;"><?php echo($result["status"] == 1) ? "Online" : "Offline" ?></td>
                    <td>
                        <a href="<?php echo BASEURL; ?>/admin/Logout/<?php echo $result["id"]; ?>" class="hapusData">
                            <button type="submit" name="hapusData" onclick="return confirm('Yakin!')">Logout</button>
                        </a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>