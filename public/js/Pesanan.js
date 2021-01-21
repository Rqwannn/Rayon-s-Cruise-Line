$(document).ready(function () {
  $(".detail-pemesanan").on("click", function () {
    var id = $(this).attr("id");

    $.ajax({
      url:
        "http://localhost/MVC-KapalLaut/public/js/json3.php?id_pemesanan=" + id,
      dataType: "JSON",
      success: function (result) {
        let tiket = result.tiket;
        let nama = result.nama_pemesan;
        let email = result.email_pemesan;
        let nik_visa = result.nik_visa;
        let no_pesanan = result.no_pesanan;
        let kapal = result.kapal;
        let berangkat = result.berangkat;
        let tujuan = result.tujuan;
        let tanggal = result.tanggal;
        let harga = result.harga;
        let dewasa = result.dewasa;
        let anak = result.anak;
        let total = result.harga;
        let id = result.id;
        let data =
          result.confirmed == "0"
            ? "Note: Harap Selesaikan Pembayaran !"
            : "Terima Kasih Telash Menyelesaikan Pembayaran";
        console.log(result);
        $(".section-info-tiket-3").show();
        $(".card-info-3").append(
          `
                <h4 class="note-diPesanan-2">${data}</h4>
                <div class="text-flex">
                <form action="" method="POST">
                <div class="card-info-detail card-info-detail-edit">
                        <p><input style=' text-align: right;' type="text" name="no_pesananan" value="` +
            no_pesanan +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="nama" value="` +
            nama +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="email" value="` +
            email +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="dewasa" value="` +
            dewasa +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="anak" value="` +
            anak +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="nik_visa" value="` +
            nik_visa +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="tiket" value="` +
            tiket +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="kapal" value="` +
            kapal +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="berangkat" value="` +
            berangkat +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="tujuan" value="` +
            tujuan +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="tanggal" value="` +
            tanggal +
            `"></p>
                        <p><input style=' text-align: right;' type="text" name="total" value="` +
            total +
            `"></p>
                </div>
                <div class="kapal-konfirmasi-flex">
                    <a href="http://localhost/MVC-KapalLaut/public/pembayaran/` +
            id +
            `">
                        <label class="close-pesanan close-pesanan-edit">Konfirmasi</label>
                    </a>
                    <a href="http://localhost/MVC-KapalLaut/public/pesanan/hapus/` +
            id +
            `">
                        <label class="batal-pesanan batal-pesanan-edit">Hapus</label>
                    </a>
                </div>
                </form>
            </div>`
        );
      },
    });
    JsBarcode("#barcode", "1234", {
      format: "pharmacode",
      lineColor: "#000",
      width: 7,
      height: 50,
      marginTop: 30,
      marginLeft: 367,
      displayValue: false,
    });
  });
});

var infoPesanan = document.getElementById("section-info-tiket-3");
var btnPesanan = document.getElementById("expant-pesanan");

btnPesanan.addEventListener("click", function () {
  infoPesanan.style.top = "-100%";
  $(".card-info-detail-edit").remove();
  $(".close-pesanan-edit").remove();
  $(".batal-pesanan-edit").remove();
  $(".note-diPesanan-2").remove();
});

$(document).ready(function () {
  $(".detail-pemesanan").on("click", function () {
    $(".section-info-tiket-3").css("top", "55%");
  });
});

const loading = document.getElementById("loader");

window.addEventListener("load", function () {
  setTimeout(function () {
    loading.style.display = "none";
  }, 500);
});

function scrollTop(target, durasi) {
  const infoJelajahi = document.querySelector(target);
  let targetGetPosition = infoJelajahi.getBoundingClientRect().top;
  let startPosition = window.pageYOffset;
  let distance = targetGetPosition - startPosition;
  let startTime = null;

  function animasi(waktuSekarang) {
    if (startTime === null) startTime = waktuSekarang;
    let timeElapsed = waktuSekarang - startTime;
    let run = ease(timeElapsed, startPosition, distance, durasi);
    window.scrollTo(0, run);
    if (timeElapsed < durasi) requestAnimationFrame(animasi);
  }

  function ease(t, b, c, d) {
    return c * Math.sin((t / d) * (Math.PI / 2)) + b;
  }

  requestAnimationFrame(animasi);
}

const secondBtn = document.querySelector(".edit-card-circle");

secondBtn.addEventListener("click", () => {
  scrollTop(".pesanan-section-1", 3000);
});
