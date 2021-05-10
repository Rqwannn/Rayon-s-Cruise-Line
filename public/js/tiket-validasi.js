const nama = document.getElementById( "nama" );
const email = document.getElementById( "email" );
const password2 = document.getElementById( "rekening-2" );
const password3 = document.getElementById( "rekening-3" );
const tiket = document.getElementById( "tiket" );
const anak = document.getElementById( "anak" );
const dewasa = document.getElementById( "dewasa" );
const gender = document.getElementById( "gender" );
const text_tiket = document.getElementById( "text-regis" );

nama.addEventListener("keyup", function(){
    if(nama.value.length > 2){
        text_tiket.innerHTML = "Nama Anda Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "green";
        nama.style.border = "1px solid green";
    } else if(nama.value == "/" || nama.value == ">" || nama.value == "<" || nama.value == "." || nama.value == "," ||
        nama.value == '"' || nama.value == "'" || nama.value == ";" || nama.value == ":" || nama.value == "[" ||
        nama.value == "]" || nama.value == "{" || nama.value == "}" || nama.value == "|" || nama.value == "`" 
        || nama.value == "~" || nama.value == "!" || nama.value == "@" || nama.value == "#" || nama.value == "$"
        || nama.value == "%" || nama.value == "^" || nama.value == "&" || nama.value == "*" || nama.value == "("
        || nama.value == ")" || nama.value == "-" || nama.value == "_" || nama.value == "+" || nama.value == "=" || nama.value == "?"){
        text_tiket.innerHTML = "Nama Harus Berupa a-z";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        nama.style.border = "1px solid red";
    }  else if(nama.value.length == 0){
        text_tiket.innerHTML = "";
        nama.style.border = "1px solid grey";
    } else {
        text_tiket.innerHTML = "Nama Anda Tidak Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        nama.style.border = "1px solid red";
    }
});

email.addEventListener("keyup", function(){
    if(email.value.length > 2){
        text_tiket.innerHTML = "Email Anda Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "green";
        email.style.border = "1px solid green";
    } else if(email.value.length == 0){
        text_tiket.innerHTML = "";
        email.style.border = "1px solid grey";
    } else {
        text_tiket.innerHTML = "Email Anda Tidak Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        email.style.border = "1px solid red";
    }
})

password2.addEventListener("keyup", function(){

    if(password2.value.length >= 19){
        text_tiket.innerHTML = "Nomor Yang Anda Masukan Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "green";
        password2.style.border = "1px solid green";
    } else if(password2.value.length == 0){
        text_tiket.innerHTML = "";
        password2.style.border = "1px solid grey";
    } else {
        text_tiket.innerHTML = "Nomor Yang Anda Masukan Tidak Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        password2.style.border = "1px solid red";
    }
})

password3.addEventListener("keyup", function(){

    if(password3.value.length >= 19){
        text_tiket.innerHTML = "Nomor Yang Anda Masukan Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "green";
        password3.style.border = "1px solid green";
    } else if(password3.value.length == 0){
        text_tiket.innerHTML = "";
        password3.style.border = "1px solid grey";
    } else {
        text_tiket.innerHTML = "Nomor Yang Anda Masukan Tidak Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        password3.style.border = "1px solid red";
    }
})

tiket.addEventListener("keyup", function(){

    if(tiket.value.length > 0 && tiket.value != 0){
        text_tiket.innerHTML = "Tiket Yang Anda Pesan Tersedia";
        text_tiket.style.display = "block";
        text_tiket.style.color = "green";
        tiket.style.border = "1px solid green";
    } else if(tiket.value.length == 0){
        text_tiket.innerHTML = "";
        tiket.style.border = "1px solid grey";
    } else {
        text_tiket.innerHTML = "Tiket Yang Anda Pesan Tidak Tersedia";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        tiket.style.border = "1px solid red";
    }
})

dewasa.addEventListener("keyup", function(){

    if(dewasa.value.length >= 0){
        text_tiket.innerHTML = "Jumlah Dewasa Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "green";
        dewasa.style.border = "1px solid green";
    } else if(dewasa.value.length == 0){
        text_tiket.innerHTML = "";
        dewasa.style.border = "1px solid grey";
    } else {
        text_tiket.innerHTML = "Jumlah Dewasa Tidak Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        dewasa.style.border = "1px solid red";
    }
})

anak.addEventListener("keyup", function(){

    if(anak.value.length >= 0){
        text_tiket.innerHTML = "Jumlah Anak-Anak Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "green";
        anak.style.border = "1px solid green";
    } else if(anak.value.length == 0){
        text_tiket.innerHTML = "";
        anak.style.border = "1px solid grey";
    } else {
        text_tiket.innerHTML = "Jumlah Anak-Anak Tidak Valid";
        text_tiket.style.display = "block";
        text_tiket.style.color = "red";
        anak.style.border = "1px solid red";
    }
})

function Register(e){
    var nama = document.getElementById( "nama" );
    var email = document.getElementById( "email" );
    var password2 = document.getElementById( "rekening-2" );
    var password3 = document.getElementById( "rekening-3" );
    var tiket = document.getElementById( "tiket" );
    var anak = document.getElementById( "anak" );
    var dewasa = document.getElementById( "dewasa" );
    var gender = document.getElementById( "gender" );
    var text = document.getElementById( "text-regis" );

    if(nama.value.length > 2 && email.value.length > 2 && password2.value.length >= 18 && password3.value.length >= 18
      && tiket.value.length > 0 && dewasa.value.length > 0  && anak.value.length > 0  && gender.value.length > 4 ){
        text.innerHTML = "Pemesanan Berhasil Di Proses Liat Bukti Pemesanan Di Bawah";
        text.style.color = "green";
        text.style.display = "block";
        if (password2.value != password3.value || password3.value != password2.value){
            text.innerHTML = "Confirm No Rekening Tidak Sama";
            text.style.display = "block";
            text.style.color = "red";
            return false;
        } 
        if(parseInt(dewasa.value) + parseInt(anak.value) != parseInt(tiket.value)){ 
            text.innerHTML = "Jumlah Tiket Harus Sama Dengan Dewasa Dan Anak-Anak";
            text.style.display = "block";
            text.style.color = "red";
            return false;
        } 
        e.preventDefault();
        $.ajax({
            url: "http://localhost/MVC-KapalLaut/public/js/json2.php",
            type: 'POST',
            dataType: 'JSON',
            data: {
                'id_pemesanan' : $('#id_pemesanan').val(),
                'tiket' : $('#tiket').val(),
                'nama' : $('#nama').val(),
                'email' : $('#email').val(),
                'nik_visa' : $('#rekening-2').val(),
                'dewasa' : $('#dewasa').val(),
                'anak' : $('#anak').val(),
                'user' : $('#user').val()
            },
            error : (result) => {
                console.log("ok");
            },
            success: function(result){
                let data = result.data;
                let tiket = result.tiket;
                let nama = result.nama;
                let email = result.email;
                let nik_visa = result.nik_visa;
                let no_pesanan = result.no_pesanan;
                let kapal = result.kapal;
                let berangkat = result.berangkat;
                let tujuan = result.tujuan;
                let tanggal = result.tanggal;
                let harga = result.harga;
                let dewasa = result.dewasa;
                let anak = result.anak;
                let user = result.id_user;
                let id_tiket = result.id_tiket;
                let id = result.id;
                let total = (parseInt(harga) * parseInt(tiket));
                console.log(result);
                $('.section-info-tiket-2').show();
                $('.card-info-2').append(`
                <div class="text-flex">
                <div class="card-info-detail">
                
                </div> 
                <form action="http://localhost/MVC-KapalLaut/public/tiket/tambah" method="POST">
                <div class="card-info-detail" style=" transform: translate(50px,-370px);">
                        <p><input type="hidden" name="confirmed" value="0"></p>
                        <p><input type="hidden" name="id_user" value="`+user+`"></p>
                        <p><input type="hidden" name="id_tiket" value="`+id_tiket+`"></p>
                        <p><input type="text" name="no_pesananan" value="`+no_pesanan+`"></p>
                        <p><input type="text" name="nama" value="`+nama+`"></p>
                        <p><input type="text" name="email" value="`+email+`"></p>
                        <p><input type="text" name="dewasa" value="`+dewasa+`"></p>
                        <p><input type="text" name="anak" value="`+anak+`"></p>
                        <p><input type="text" name="nik_visa" value="`+nik_visa+`"></p>
                        <p><input type="text" name="tiket" value="`+tiket+`"></p>
                        <p><input type="text" name="kapal" value="`+kapal+`"></p>
                        <p><input type="text" name="berangkat" value="`+berangkat+`"></p>
                        <p><input type="text" name="tujuan" value="`+tujuan+`"></p>
                        <p><input type="text" name="tanggal" value="`+tanggal+`"></p>
                        <p><input type="text" name="total" value="`+total+`"></p>
                </div>
                    <div class="kapal-konfirmasi-flex">
                        <button type="submit" name="konfirmasi" value="`+id+`">Konfirmasi</button>
                        <button id="batal" name="nanti">Nanti</button>
                    </div>
                </form>
            </div>
                `);
            }
        });
        JsBarcode("#barcode", "1234", {
            format: "pharmacode",
            lineColor: "#000",
            width: 7,
            height: 50,
            marginTop: 30,
            marginLeft: 352,
            displayValue: false
          });
        
    } else if(parseInt(dewasa.value) + parseInt(anak.value) != parseInt(tiket.value)){ 
        text.innerHTML = "Jumlah Tiket Harus Sama Dengan Dewasa Dan Anak-Anak";
        text.style.display = "block";
        text.style.color = "red";
        return false;
    } else if (password2.value != password3.value || password3.value != password2.value){
        text.innerHTML = "Confirm No Rekening Tidak Sama";
        text.style.display = "block";
        text.style.color = "red";
        return false;
    } else {
        text.innerHTML = "Akun Gagal Di Buat Atau Ada Kesalahan Saat Mengisi Data";
        text.style.display = "block";
        text.style.color = "red";
        return false;
    }
}

        const ejectButton = document.querySelector(".reset");
        const textButton = document.querySelector("#text-regis");

        ejectButton.addEventListener("click", function(){
            textButton.style.display = "none";
            nama.style.border = "1px solid grey";
            email.style.border = "1px solid grey";
            password2.style.border = "1px solid grey";
            password3.style.border = "1px solid grey";
            tiket.style.border = "1px solid grey";
            anak.style.border = "1px solid grey";
            dewasa.style.border = "1px solid grey";
            gender.style.border = "1px solid grey";
        })

        const loading = document.getElementById('loader-2');

        window.addEventListener('load' , function(){
            setTimeout(function(){
                loading.style.display="none";
            }, 500)
        })