$(document).ready(function(){
    $('.detail-pemesanan').on('click', function(){
        var id = $(this).attr('id');

    $.ajax({
    url: "http://localhost/MVC-KapalLaut/public/js/json3.php?id_pemesanan="+id,
    dataType: 'JSON',
    success : function(result){
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
        console.log(result);
        $('.section-info-tiket-3').show();
        $('.card-info-3').append(`
        <div class="text-flex">
        <form action="" method="POST">
        <div class="card-info-detail card-info-detail-edit">
                <p><input style=' text-align: right;' type="text" name="no_pesananan" value="`+no_pesanan+`"></p>
                <p><input style=' text-align: right;' type="text" name="nama" value="`+nama+`"></p>
                <p><input style=' text-align: right;' type="text" name="email" value="`+email+`"></p>
                <p><input style=' text-align: right;' type="text" name="dewasa" value="`+dewasa+`"></p>
                <p><input style=' text-align: right;' type="text" name="anak" value="`+anak+`"></p>
                <p><input style=' text-align: right;' type="text" name="nik_visa" value="`+nik_visa+`"></p>
                <p><input style=' text-align: right;' type="text" name="tiket" value="`+tiket+`"></p>
                <p><input style=' text-align: right;' type="text" name="kapal" value="`+kapal+`"></p>
                <p><input style=' text-align: right;' type="text" name="berangkat" value="`+berangkat+`"></p>
                <p><input style=' text-align: right;' type="text" name="tujuan" value="`+tujuan+`"></p>
                <p><input style=' text-align: right;' type="text" name="tanggal" value="`+tanggal+`"></p>
                <p><input style=' text-align: right;' type="text" name="total" value="`+total+`"></p>
        </div>
        </form>
    </div>`
            );
        }    
    });
    JsBarcode("#barcode", "1234", {
    format: "pharmacode",
    lineColor: "#000",
    width: 7,
    height: 50,
    marginTop: 30,
    marginLeft: 367,
    displayValue: false
  });
});
});

const infoPesanan = document.getElementById("section-info-tiket-3");
const btnPesanan = document.getElementById("expant-pesanan");

btnPesanan.addEventListener("click", function(){
    infoPesanan.style.top = "-100%";
    $(".card-info-detail-edit").remove();
    $(".close-pesanan-edit").remove();
    $(".batal-pesanan-edit").remove();
});

$(document).ready(function(){
    $(".detail-pemesanan").on("click", function(){
        $(".section-info-tiket-3").css("top", "55%");
    })
})

// BTN BUAT AMBIL HARGA

const btnKamarFamily = document.querySelector(".btn-kamar-family");
const btnKamarVIP = document.querySelector(".btn-kamar-vip");
const btnKamarLuxury = document.querySelector(".btn-kamar-luxury");
const btnKamarReguler = document.querySelector(".btn-kamar-reguler");
const btnKamarPresidential = document.querySelector(".btn-kamar-presidential");

// HARGA YANG DI TANGKEP

const kamarFamily = document.querySelector(".kamar-family-harga");
const kamarVIP = document.querySelector(".kamar-vip-harga");
const kamarLuxury = document.querySelector(".kamar-luxury-harga");
const kamarReguler = document.querySelector(".kamar-reguler-harga");
const kamarPresidential = document.querySelector(".kamar-presidential-harga");

// ICON CEKLIS

const ceklisKamar = document.querySelector(".ceklis-kaloBener");
const ceklisKamar2 = document.querySelector(".ceklis-kaloBener-2");
const ceklisKamar3 = document.querySelector(".ceklis-kaloBener-3");
const ceklisKamar4 = document.querySelector(".ceklis-kaloBener-4");
const ceklisKamar5 = document.querySelector(".ceklis-kaloBener-5");

const totalTiket = document.querySelectorAll(".total-tiket");
const totalLayanan = document.querySelectorAll(".total-layanan");
const totalKamar = document.querySelectorAll(".total-kamar");
const PembungkusHarga = document.querySelectorAll(".total-harga");

btnKamarFamily.addEventListener("click", function(){
    ceklisKamar.style.display = "initial";
    ceklisKamar.style.color = "green";
    ceklisKamar2.style.display = "none";
    ceklisKamar2.style.color = "black";
    ceklisKamar3.style.display = "none";
    ceklisKamar3.style.color = "black";
    ceklisKamar4.style.display = "none";
    ceklisKamar4.style.color = "black";
    ceklisKamar5.style.display = "none";
    ceklisKamar5.style.color = "black";
    totalTiket.forEach((resultTiket) =>{
        totalLayanan.forEach((resultLayanan) =>{
            totalKamar.forEach((resultKamar) =>{
                PembungkusHarga.forEach((resultHarga) =>{
                    resultKamar.innerHTML = parseInt(kamarFamily.innerHTML);
                    let PenjumlahanHarga = parseInt(resultTiket.innerHTML) + parseInt(resultLayanan.innerHTML) + parseInt(resultKamar.innerHTML);
                    resultHarga.value = PenjumlahanHarga;
                    resultHarga.style.marginRight = "0px";
                })
            })
        })
    })
})

btnKamarVIP.addEventListener("click", function(){
    ceklisKamar2.style.display = "initial";
    ceklisKamar2.style.color = "green";
    ceklisKamar.style.display = "none";
    ceklisKamar.style.color = "black";
    ceklisKamar3.style.display = "none";
    ceklisKamar3.style.color = "black";
    ceklisKamar4.style.display = "none";
    ceklisKamar4.style.color = "black";
    ceklisKamar5.style.display = "none";
    ceklisKamar5.style.color = "black";
    totalTiket.forEach((resultTiket) =>{
        totalLayanan.forEach((resultLayanan) =>{
            totalKamar.forEach((resultKamar) =>{
                PembungkusHarga.forEach((resultHarga) =>{
                    resultKamar.innerHTML = parseInt(kamarVIP.innerHTML);
                    let PenjumlahanHarga = parseInt(resultTiket.innerHTML) + parseInt(resultLayanan.innerHTML) + parseInt(resultKamar.innerHTML);
                    resultHarga.value = PenjumlahanHarga;
                    resultHarga.style.marginRight = "0px";
                })
            })
        })
    })
})

btnKamarLuxury.addEventListener("click", function(){
    ceklisKamar3.style.display = "initial";
    ceklisKamar3.style.color = "green";
    ceklisKamar.style.display = "none";
    ceklisKamar.style.color = "black";
    ceklisKamar2.style.display = "none";
    ceklisKamar2.style.color = "black";
    ceklisKamar4.style.display = "none";
    ceklisKamar4.style.color = "black";
    ceklisKamar5.style.display = "none";
    ceklisKamar5.style.color = "black";
    totalTiket.forEach((resultTiket) =>{
        totalLayanan.forEach((resultLayanan) =>{
            totalKamar.forEach((resultKamar) =>{
                PembungkusHarga.forEach((resultHarga) =>{
                    resultKamar.innerHTML = parseInt(kamarLuxury.innerHTML);
                    let PenjumlahanHarga = parseInt(resultTiket.innerHTML) + parseInt(resultLayanan.innerHTML) + parseInt(resultKamar.innerHTML);
                    resultHarga.value = PenjumlahanHarga;
                    resultHarga.style.marginRight = "0px";
                })
            })
        })
    })
})

btnKamarReguler.addEventListener("click", function(){
    ceklisKamar4.style.display = "initial";
    ceklisKamar4.style.color = "green";
    ceklisKamar.style.display = "none";
    ceklisKamar.style.color = "black";
    ceklisKamar2.style.display = "none";
    ceklisKamar2.style.color = "black";
    ceklisKamar3.style.display = "none";
    ceklisKamar3.style.color = "black";
    ceklisKamar5.style.display = "none";
    ceklisKamar5.style.color = "black";
    totalTiket.forEach((resultTiket) =>{
        totalLayanan.forEach((resultLayanan) =>{
            totalKamar.forEach((resultKamar) =>{
                PembungkusHarga.forEach((resultHarga) =>{
                    resultKamar.innerHTML = parseInt(kamarReguler.innerHTML);
                    let PenjumlahanHarga = parseInt(resultTiket.innerHTML) + parseInt(resultLayanan.innerHTML) + parseInt(resultKamar.innerHTML);
                    resultHarga.value = PenjumlahanHarga;
                    resultHarga.style.marginRight = "0";
                })
            })
        })
    })
})

btnKamarPresidential.addEventListener("click", function(){
    ceklisKamar4.style.display = "none";
    ceklisKamar4.style.color = "black";
    ceklisKamar.style.display = "none";
    ceklisKamar.style.color = "black";
    ceklisKamar2.style.display = "none";
    ceklisKamar2.style.color = "black";
    ceklisKamar3.style.display = "none";
    ceklisKamar3.style.color = "black";
    ceklisKamar5.style.display = "initial";
    ceklisKamar5.style.color = "green";
    totalTiket.forEach((resultTiket) =>{
        totalLayanan.forEach((resultLayanan) =>{
            totalKamar.forEach((resultKamar) =>{
                PembungkusHarga.forEach((resultHarga) =>{
                    resultKamar.innerHTML = parseInt(kamarPresidential.innerHTML);
                    let PenjumlahanHarga = parseInt(resultTiket.innerHTML) + parseInt(resultLayanan.innerHTML) + parseInt(resultKamar.innerHTML);
                    resultHarga.value = PenjumlahanHarga;
                    resultHarga.style.marginRight = "8.5px";
                })
            })
        })
    })
})

let PenjumlahanHarga = parseInt(totalTiket.innerHTML) + parseInt(totalLayanan.innerHTML) + parseInt(totalKamar.innerHTML);
PembungkusHarga.innerHTML = PenjumlahanHarga;

totalTiket.forEach((resultTiket) =>{
    totalLayanan.forEach((resultLayanan) =>{
        totalKamar.forEach((resultKamar) =>{
            PembungkusHarga.forEach((resultHarga) =>{
                let PenjumlahanHarga = parseInt(resultTiket.innerHTML) + parseInt(resultLayanan.innerHTML) + parseInt(resultKamar.innerHTML);
                resultHarga.value = PenjumlahanHarga;
            })
        })
    })
})

function setTimePembayaran(){
    const arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    const aturDisplay = document.querySelector(".display-for-none");
    const aturDisplay2 = document.querySelector(".display-for-none-2");    
    const aturDisplay3 = document.querySelector(".display-for-none-3");
    const tampilkanPesan = document.querySelector(".waktu-habis")
    const awal = new Date();
    const bulan = awal.getMonth();
    const tanggat = new Date(`${arrbulan[bulan]} ${awal.getDate()}, ${awal.getFullYear()} ${awal.getHours() + 3}:0:0`).getTime();

    const hitungMundur = setInterval(function (){

        const sekarang = new Date().getTime();
        const selisih = tanggat - sekarang;
        const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
        const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60 ));
        const detik = Math.floor(selisih % (1000 * 60) / 1000);
        const teks = document.querySelector(".batas-waktu");
        teks.innerHTML = 'Selesaikan Pembayaran Dalam'
                     + ' ' + jam  + ' ' + ':' + ' ' + menit + ' ' + ':' + ' ' + detik;
    
            if(selisih <= 0){
                clearInterval(hitungMundur);
                teks.innerHTML = 'Waktu Pembayaran Sudah Habis !';
                aturDisplay.style.display = "none";
                aturDisplay2.style.display = "none";
                aturDisplay3.style.display = "none";
                tampilkanPesan.style.display = "flex";
            }
                     
    }, 1000)
}

setTimePembayaran()

const btnFormSelectedFrist = document.querySelector(".button-set-1");
const btnFormSelectedSecond = document.querySelector(".button-set-2");
const btnFormSelectedThird = document.querySelector(".button-set-3");
const btnFormSelectedFour = document.querySelector(".button-set-4");
const btnFormSelectedFive = document.querySelector(".button-set-5");
const btnFormSelectedSix = document.querySelector(".button-set-6");
const btnFormSelectedSeveen = document.querySelector(".button-set-7");
const btnFormSelectedEight = document.querySelector(".button-set-8");
const aturDisplay = document.querySelector(".display-for-none");
const aturDisplay2 = document.querySelector(".display-for-none-2");
const aturDisplay3 = document.querySelector(".display-for-none-3");
const aturDisplay4 = document.querySelector(".display-for-none-4");
const aturDisplay5 = document.querySelector(".display-for-none-5");
const aturDisplay6 = document.querySelector(".display-for-none-6");
const aturDisplay7 = document.querySelector(".display-for-none-7");
const aturDisplay8 = document.querySelector(".display-for-none-8");

btnFormSelectedSecond.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "transparent";
    btnFormSelectedFrist.style.color = "#fff";
    btnFormSelectedSecond.style.background = "#fff";
    btnFormSelectedSecond.style.color = "#000";
    btnFormSelectedThird.style.background = "transparent";
    btnFormSelectedThird.style.color = "#fff";
    btnFormSelectedFour.style.background = "transparent";
    btnFormSelectedFour.style.color = "#fff";
    btnFormSelectedFive.style.background = "transparent";
    btnFormSelectedFive.style.color = "#fff";
    btnFormSelectedSix.style.background = "transparent";
    btnFormSelectedSix.style.color = "#fff";
    btnFormSelectedSeveen.style.background = "transparent";
    btnFormSelectedSeveen.style.color = "#fff";
    btnFormSelectedEight.style.background = "transparent";
    btnFormSelectedEight.style.color = "#fff";
    aturDisplay.style.display = "none";
    aturDisplay2.style.display = "initial";
    aturDisplay3.style.display = "none";
    aturDisplay4.style.display = "none";
    aturDisplay5.style.display = "none";
    aturDisplay6.style.display = "none";
    aturDisplay7.style.display = "none";
    aturDisplay8.style.display = "none";
})

btnFormSelectedFrist.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "#fff";
    btnFormSelectedFrist.style.color = "#000";
    btnFormSelectedSecond.style.background = "transparent";
    btnFormSelectedSecond.style.color = "#fff";
    btnFormSelectedThird.style.background = "transparent";
    btnFormSelectedThird.style.color = "#fff";
    btnFormSelectedFour.style.background = "transparent";
    btnFormSelectedFour.style.color = "#fff";
    btnFormSelectedFive.style.background = "transparent";
    btnFormSelectedFive.style.color = "#fff";
    btnFormSelectedSix.style.background = "transparent";
    btnFormSelectedSix.style.color = "#fff";
    btnFormSelectedSeveen.style.background = "transparent";
    btnFormSelectedSeveen.style.color = "#fff";
    btnFormSelectedEight.style.background = "transparent";
    btnFormSelectedEight.style.color = "#fff";
    aturDisplay.style.display = "initial";
    aturDisplay2.style.display = "none";
    aturDisplay3.style.display = "none";
    aturDisplay4.style.display = "none";
    aturDisplay5.style.display = "none";
    aturDisplay6.style.display = "none";
    aturDisplay7.style.display = "none";
    aturDisplay8.style.display = "none";
})

btnFormSelectedThird.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "transparent";
    btnFormSelectedFrist.style.color = "#fff";
    btnFormSelectedSecond.style.background = "transparent";
    btnFormSelectedSecond.style.color = "#fff";
    btnFormSelectedThird.style.background = "#fff";
    btnFormSelectedThird.style.color = "#000";
    btnFormSelectedFour.style.background = "transparent";
    btnFormSelectedFour.style.color = "#fff";
    btnFormSelectedFive.style.background = "transparent";
    btnFormSelectedFive.style.color = "#fff";
    btnFormSelectedSix.style.background = "transparent";
    btnFormSelectedSix.style.color = "#fff";
    btnFormSelectedSeveen.style.background = "transparent";
    btnFormSelectedSeveen.style.color = "#fff";
    btnFormSelectedEight.style.background = "transparent";
    btnFormSelectedEight.style.color = "#fff";
    aturDisplay.style.display = "none";
    aturDisplay2.style.display = "none";
    aturDisplay3.style.display = "initial";
    aturDisplay4.style.display = "none";
    aturDisplay5.style.display = "none";
    aturDisplay6.style.display = "none";
    aturDisplay7.style.display = "none";
    aturDisplay8.style.display = "none";
})

btnFormSelectedFive.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "transparent";
    btnFormSelectedFrist.style.color = "#fff";
    btnFormSelectedSecond.style.background = "transparent";
    btnFormSelectedSecond.style.color = "#fff";
    btnFormSelectedThird.style.background = "transparent";
    btnFormSelectedThird.style.color = "#fff";
    btnFormSelectedFour.style.background = "transparent";
    btnFormSelectedFour.style.color = "#fff";
    btnFormSelectedFive.style.background = "#fff";
    btnFormSelectedFive.style.color = "#000";
    btnFormSelectedSix.style.background = "transparent";
    btnFormSelectedSix.style.color = "#fff";
    btnFormSelectedEight.style.background = "transparent";
    btnFormSelectedEight.style.color = "#fff";
    aturDisplay.style.display = "none";
    aturDisplay2.style.display = "none";
    aturDisplay3.style.display = "none";
    aturDisplay4.style.display = "none";
    aturDisplay5.style.display = "initial";
    aturDisplay6.style.display = "none";
    aturDisplay7.style.display = "none";
    aturDisplay8.style.display = "none";
})

btnFormSelectedFour.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "transparent";
    btnFormSelectedFrist.style.color = "#fff";
    btnFormSelectedSecond.style.background = "transparent";
    btnFormSelectedSecond.style.color = "#fff";
    btnFormSelectedThird.style.background = "transparent";
    btnFormSelectedThird.style.color = "#fff";
    btnFormSelectedFour.style.background = "#fff";
    btnFormSelectedFour.style.color = "#000";
    btnFormSelectedFive.style.background = "transparent";
    btnFormSelectedFive.style.color = "#fff";
    btnFormSelectedSix.style.background = "transparent";
    btnFormSelectedSix.style.color = "#fff";
    btnFormSelectedSeveen.style.background = "transparent";
    btnFormSelectedSeveen.style.color = "#fff";
    btnFormSelectedEight.style.background = "transparent";
    btnFormSelectedEight.style.color = "#fff";
    aturDisplay.style.display = "none";
    aturDisplay2.style.display = "none";
    aturDisplay3.style.display = "none";
    aturDisplay4.style.display = "initial";
    aturDisplay5.style.display = "none";
    aturDisplay6.style.display = "none";
    aturDisplay7.style.display = "none";
    aturDisplay8.style.display = "none";
})

btnFormSelectedSix.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "transparent";
    btnFormSelectedFrist.style.color = "#fff";
    btnFormSelectedSecond.style.background = "transparent";
    btnFormSelectedSecond.style.color = "#fff";
    btnFormSelectedThird.style.background = "transparent";
    btnFormSelectedThird.style.color = "#fff";
    btnFormSelectedFour.style.background = "transparent";
    btnFormSelectedFour.style.color = "#fff";
    btnFormSelectedFive.style.background = "transparent";
    btnFormSelectedFive.style.color = "#fff";
    btnFormSelectedSix.style.background = "#fff";
    btnFormSelectedSix.style.color = "#000";
    btnFormSelectedSeveen.style.background = "transparent";
    btnFormSelectedSeveen.style.color = "#fff";
    btnFormSelectedEight.style.background = "transparent";
    btnFormSelectedEight.style.color = "#fff";
    aturDisplay.style.display = "none";
    aturDisplay2.style.display = "none";
    aturDisplay3.style.display = "none";
    aturDisplay4.style.display = "none";
    aturDisplay5.style.display = "none";
    aturDisplay6.style.display = "initial";
    aturDisplay7.style.display = "none";
    aturDisplay8.style.display = "none";
})

btnFormSelectedSeveen.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "transparent";
    btnFormSelectedFrist.style.color = "#fff";
    btnFormSelectedSecond.style.background = "transparent";
    btnFormSelectedSecond.style.color = "#fff";
    btnFormSelectedThird.style.background = "transparent";
    btnFormSelectedThird.style.color = "#fff";
    btnFormSelectedFour.style.background = "transparent";
    btnFormSelectedFour.style.color = "#fff";
    btnFormSelectedFive.style.background = "transparent";
    btnFormSelectedFive.style.color = "#fff";
    btnFormSelectedSix.style.background = "transparent";
    btnFormSelectedSix.style.color = "#fff";
    btnFormSelectedSeveen.style.background = "#fff";
    btnFormSelectedSeveen.style.color = "#000";
    btnFormSelectedEight.style.background = "transparent";
    btnFormSelectedEight.style.color = "#fff";
    aturDisplay.style.display = "none";
    aturDisplay2.style.display = "none";
    aturDisplay3.style.display = "none";
    aturDisplay4.style.display = "none";
    aturDisplay5.style.display = "none";
    aturDisplay6.style.display = "none";
    aturDisplay7.style.display = "initial";
    aturDisplay8.style.display = "none";
})

btnFormSelectedEight.addEventListener("click", function(){
    btnFormSelectedFrist.style.background = "transparent";
    btnFormSelectedFrist.style.color = "#fff";
    btnFormSelectedSecond.style.background = "transparent";
    btnFormSelectedSecond.style.color = "#fff";
    btnFormSelectedThird.style.background = "transparent";
    btnFormSelectedThird.style.color = "#fff";
    btnFormSelectedFour.style.background = "transparent";
    btnFormSelectedFour.style.color = "#fff";
    btnFormSelectedFive.style.background = "transparent";
    btnFormSelectedFive.style.color = "#fff";
    btnFormSelectedSix.style.background = "transparent";
    btnFormSelectedSix.style.color = "#fff";
    btnFormSelectedSeveen.style.background = "transparent";
    btnFormSelectedSeveen.style.color = "#fff";
    btnFormSelectedEight.style.background = "#fff";
    btnFormSelectedEight.style.color = "#000";
    aturDisplay.style.display = "none";
    aturDisplay2.style.display = "none";
    aturDisplay3.style.display = "none";
    aturDisplay4.style.display = "none";
    aturDisplay5.style.display = "none";
    aturDisplay6.style.display = "none";
    aturDisplay7.style.display = "none";
    aturDisplay8.style.display = "initial";
})



// END JENIS PEMBAYRAN

const hoverEffect = document.querySelector("#hover-effect");
const hoverBox = document.querySelector(".info-cvv");

hoverEffect.addEventListener("mouseover", function(){
    hoverBox.style.transform = "scale(1)";
})

hoverBox.addEventListener("mouseout", function(){
    hoverBox.style.transform = "scale(0)";
})

const inputValue = document.querySelector("#nomorKartu");
const inputValue2 = document.querySelector("#nomorDiKartu");
const textValidasi = document.querySelector(".nomor-kartu-valid");
const textValidasi2 = document.querySelector(".nomor-kartu-valid-2");
const contohDebit = document.querySelector(".contohDebit");

inputValue.addEventListener("keyup", function(){
    if(inputValue.value.length >= 19){
        textValidasi.innerHTML = "Nomor Yang Anda Masukan Benar";
        textValidasi.style.color = "green";
        inputValue.style.border = "1px solid green";
    }else if(inputValue.value.length == 0){
        textValidasi.innerHTML = "";
        inputValue.style.border = "1px solid grey";
    } else {
        textValidasi.innerHTML = "Nomor Yang Anda Masukan Tidak Valid";
        textValidasi.style.color = "red";
        inputValue.style.border = "1px solid red";
    }
})

inputValue2.addEventListener("keyup", function(){
    if(inputValue2.value.toLowerCase() == "visa" || inputValue2.value.toLowerCase() == "master card" || inputValue2.value.toLowerCase() == "american express"){
        textValidasi2.innerHTML = "Anda Menggunakan Kartu " + inputValue2.value;
        textValidasi2.style.color = "green";
        contohDebit.innerHTML = "";
        inputValue2.style.border = "1px solid green";
    }else if(inputValue2.value.length == 0){
        textValidasi2.innerHTML = "";
        contohDebit.innerHTML = "";
        inputValue2.style.border = "1px solid grey";
    } else {
        textValidasi2.innerHTML = "Kartu Kredit Tidak Terdaftar";
        textValidasi2.style.color = "red";   
        contohDebit.innerHTML = "Contoh : VISA, Master Card, American Express";
        contohDebit.style.color = "red";   
        inputValue2.style.border = "1px solid red";
    }
})

// MIDDLE VALIDASI

const inputCVV = document.querySelector("#cvv");
const berlakuHingga = document.querySelector("#berlakuHingga");
const textValidasi3 = document.querySelector(".nomor-kartu-valid-3");
const textValidasi4 = document.querySelector(".nomor-kartu-valid-4");

inputCVV.addEventListener("keyup", function(){
    if(inputCVV.value.length >= 3){
        textValidasi3.innerHTML = "Valid";
        textValidasi3.style.color = "green";
        textValidasi3.style.transform = "translate(-40px)"; 
        inputCVV.style.border = "1px solid green";
    }else if(inputValue.value.length == 0){
        textValidasi3.innerHTML = "";
        inputCVV.style.border = "1px solid grey";
    } else {
        textValidasi3.innerHTML = "Tidak Valid";
        textValidasi3.style.color = "red";
        inputCVV.style.border = "1px solid red";   
    }

    if(inputCVV.value.length <= 2 && inputCVV.value.length != 0){
        textValidasi3.innerHTML = "Tidak Valid";
        textValidasi3.style.color = "red";
        textValidasi3.style.transform = "translateX(-20px)"; 
        inputCVV.style.border = "1px solid red";
    } 
})

berlakuHingga.addEventListener("keyup", function(){
    if(berlakuHingga.value.length >= 5){
        textValidasi4.innerHTML = "Valid";
        textValidasi4.style.color = "green";
        berlakuHingga.style.border = "1px solid green";
    } else if(berlakuHingga.value.length == 0){
        textValidasi4.innerHTML = "";
        berlakuHingga.style.border = "1px solid grey";
    } else if(berlakuHingga.innerHTML != "/"){
        textValidasi4.innerHTML = "Harus Mengandung /";
        textValidasi4.style.color = "red";
        berlakuHingga.style.border = "1px solid red";
    } else {
        textValidasi4.innerHTML = "Tidak Valid";
        textValidasi4.style.color = "red";   
        berlakuHingga.style.border = "1px solid red";
    }

    if(berlakuHingga.value.length <= 4  && berlakuHingga.value.length != 0){
        textValidasi4.innerHTML = "Tidak Valid";
        textValidasi4.style.color = "red";  
    }
})

const DetailKamar = document.querySelector(".info-kamar-detail");
const btnDetailKamar = document.querySelector(".btn-detail-kamar");
const btnCloseKamar = document.querySelector(".close-detail-kamar");

btnDetailKamar.addEventListener("click", function(){
    DetailKamar.style.top = "0";
    btnCloseKamar.addEventListener("click", function(){
        DetailKamar.style.top = "-200%";
    })
})
const loading = document.getElementById('loader');

window.addEventListener('load' , function(){
    setTimeout(function(){
        loading.style.display="none";
    }, 500)
})