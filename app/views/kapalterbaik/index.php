<section class="transaksi-berhasil-dasbord">
    <div class="transaksi-berhasil-header">
        <h1><i class="far fa-chart-bar mr-2"></i><span>Kapal Terbaik</h1>
    </div>
</section>
<section class="staff-dasbord-2">
    <div class="dasbord-2-header">
        <h1>Kapal Terbaik</h1>
    </div>
    <hr class="line-dasbord-2">
    <!-- <div class="upper-left-dasbord">
        <h4>Tampilkan</h4>
        <input type="number" maxlength="2" value="10">
        <h4>Antrian</h4>
    </div>
    <div class="upper-right-dasbord">
        <h4>Search :</h4>
        <input type="text" name="input-keyword-2" class="input-keyword-2">
    </div> -->
    <table id="myTable" class="table table-bordered table-hover">
        <thead class="">
            <tr>
                <th>No</th>
                <th>Nama Kapal</th>
                <th>Kelas Pelayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data["data"] as $result) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $result["nama_kapal"]; ?></td>
                    <td><?php echo $result["kelas_pelayaran"]; ?></td>
                    <td>
                        <a href="<?php echo BASEURL; ?>/UbahTambahKapal/<?php echo $result["id"] ?>" class="ubahData">
                            <button type="submit" name="ubahData">Ubah</button>
                        </a>
                        <a href="<?php echo BASEURL; ?>/kapalterbaik/hapus/<?php echo $result["id"]; ?>" class="hapusData">
                            <button type="submit" name="hapusData" onclick="return confirm('Yakin!')">Hapus</button>
                        </a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>