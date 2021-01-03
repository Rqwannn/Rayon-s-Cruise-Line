       const inputValue = document.querySelector(".input-keyword");
       const buttonSubmit = document.querySelector(".button-submit");
       const PembungkusCard = document.querySelector(".card-pencarian-flex");

       inputValue.addEventListener("keyup", function(){
           let xhr = new XMLHttpRequest();

           xhr.onreadystatechange = function(){
               if(xhr.readyState == 4 && xhr.status == 200){
                   PembungkusCard.innerHTML = xhr.responseText;
               }
           }
           xhr.open("GET", "http://localhost/MVC-KapalLaut/app/views/ajax/ajax3.php?key=" + inputValue.value, true);
           xhr.send();
       });

       $(document).ready(function(){
        $('.detail-pemesanan-2').on('click', function(){
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