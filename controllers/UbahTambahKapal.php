<?php

class UbahTambahKapal Extends Controller{
    public function index($id = "1"){
        $data = [
            "judul" => "Ubah/Tambah Kapal",
        ];
        $tes = $this->model("Data_model")->getAllKapalById($id);
        $data["kapal"] = $tes['nama_kapal'];
        $data["kelas"] = $tes['kelas_pelayaran'];
        $data["id"] = $tes["id"];
        $this->view("template/UbahTambah", $data);
        $this->view("UbahTambahKapal/index", $data);
        $this->view("template/footer5");
    }

    public function Ubah(){
        if(isset($_POST["ubah_dataKapal"])){
            if($this->model("Data_model")->ubahDataKapal($_POST)){
                echo "<script>
                alert('Data Kapal berhasil diubah!!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/KapalTerbaik';
                </script>";
            } else{
                echo "<script>
                alert('Data Kapal Gagal diubah!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/tambahstaff';
                </script>";
            }
        }
    }

    public function Tambah(){
        if(isset($_POST["tambah_dataKapal"]) > 0){
            if($this->model("Data_model")->TambahDataKapal($_POST) > 0){
                echo "<script>
                alert('Data Kapal berhasil ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/KapalTerbaik';
                </script>";
            } else {
                echo "<script>
                alert('Data Kapal Gagal ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/tambahstaff';
                </script>";
            }
        }
    }
}