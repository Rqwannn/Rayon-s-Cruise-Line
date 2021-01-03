<section class="transaksi-berhasil-dasbord">
    <div class="transaksi-berhasil-header">
        <h1><i class="fas fa-check-circle mr-2"></i>Transaksi Berhasil</h1>
    </div>
</section>
<section class="staff-dasbord-2">
    <div class="dasbord-2-header">
        <h1>Transaksi Berhasil</h1>
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
                    <td class="<?php echo ($result["confirmed"] == 1) ? "text-success" : "text-danger"; ?>"><?php echo ($result["confirmed"] == 1) ? "Lunas" : "Belum Lunas"; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>