    
        // var nama = prompt("Nama Anda");
        // var sandi = prompt("Masukan Sandi Admin");
        // var pengecekan = nama.length;
        // if(sandi == 944 && pengecekan > 1){
        //     alert( nama + " " + "Selamat Masuk Di Halaman Admin");
        // } else if( nama == 0) {
        //     var konfirmasi = prompt("Masukan Nama Anda Terlebih Dahulu");
        //     var konfirmasiPengecekan = konfirmasi.length;
        //     if( konfirmasiPengecekan > 1 ){
        //         alert( konfirmasi + " " + "Selamat Masuk Di Halaman Admin");
        //     } else {
        //         alert("Maaf Anda Di Larang Masuk");
        //         document.location.href = "http://localhost/MVC-KapalLaut/public/logout";
        //     }
        // } else {
        //     alert("Maaf Sandi Yang Anda Masukan Kurang Tepat");
        //     document.location.href = "http://localhost/MVC-KapalLaut/public/logout";
        // }

        function TambahStaff(){
            var username = document.getElementById("username");
            var email = document.getElementById("email");
            var nama_depan = document.getElementById("nama_depan");
            var nama_belakang = document.getElementById("nama_belakang");
            var password = document.getElementById("password");
            var password2 = document.getElementById("password2");
            var text = document.getElementById("staff-js");

            if(username.value.length > 1 && email.value.length > 10 && nama_depan.value.length > 1 
                && nama_belakang.value.length > 1 && password.value.length > 1){
                    text.innerHTML = "Admin Berhasil Di Tambahkan";
                    text.style.color = "green";
                } else if(password.value.length != password2.value.length || password2.value.length != password.value.length) {
                    text.innerHTML = "Konfirmasi Password Tidak Sama";
                    text.style.color = "red";
                    return false;
                }else {
                    text.innerHTML = "Admin Gagal Di Tambahkan";
                    text.style.color = "red";
                    return false;
                }
        }

        // const inputKeyword = document.querySelector(".input-keyword");
        // const table = document.querySelector(".tabel-tiket");
        
        // inputKeyword.addEventListener("keyup", function(){
        //     let xhr = new XMLHttpRequest();

        //     xhr.onreadystatechange = function(){
        //         if(xhr.readyState == 4 && xhr.status == 200){
        //             table.innerHTML = xhr.responseText;
        //         }
        //     }
        //     xhr.open("GET", "http://localhost/MVC-KapalLaut/app/views/ajax/ajax.php?key=" + inputKeyword.value, true);
        //     xhr.send();
        // });