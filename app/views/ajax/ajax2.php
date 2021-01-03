<?php

$keyword = $_GET["key"];

$conn = mysqli_connect("localhost", "root", "", "rayon");
$product = mysqli_query($conn, "SELECT * FROM transaksi_berhasil WHERE no_pesanan LIKE '%$keyword%' OR nama_pemesan LIKE '%$keyword%' OR total LIKE '%$keyword%'");

?>
<div class="tabel-tiket-2">
        <table border="0" cellpadding="10" cellspacing="0">
            <tr>
                <td id="relative-editing">No <span id="absolute-editing"><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down" style="opacity: 0.5;"></i></span></td>
                <td id="relative-editing">No Pesanan <span id="absolute-editing"><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down" style="opacity: 0.5;"></i></span></td>
                <td id="relative-editing">Nama Pesanan <span id="absolute-editing"><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down" style="opacity: 0.5;"></i></span></td>
                <td id="relative-editing">Total <span id="absolute-editing"><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down" style="opacity: 0.5;"></i></span></td>
                <td id="relative-editing">Status <span id="absolute-editing"><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down" style="opacity: 0.5;"></i></span></td>
            </tr>
            <?php $i = 1; ?>
                <?php foreach( $product as $result) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result["no_pesanan"]; ?></td>
                        <td><?php echo $result["nama_pemesan"]; ?></td>
                        <td><?php echo $result["total"]; ?></td>
                        <td class="<?php echo ($result["confirmed_by"] == 1) ? "status-pembayaran-true" : "status-pembayaran-false"; ?>"><?php echo ($result["confirmed_by"] == 1) ? "Lunas" : "Belum Lunas"; ?></td>
                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>