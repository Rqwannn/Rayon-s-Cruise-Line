<?php

class UbahTambahPelabuhan Extends Controller{
    public function index( $id = 1){
        $data = [
            "judul" => "Ubah/Tambah Pelabuhan",
        ];
        $tes = $this->model("Data_model")->getAllPelabuhanById($id);
        $data["pelabuhan_awal"] = $tes["pelabuhan_awal"];
        $data["pelabuhan_akhir"] = $tes["pelabuhan_akhir"];
        $data["jml_hari"] = $tes["jml_hari"];
        $data["id"] = $tes["id"];
        $this->view("template/UbahTambah", $data);
        $this->view("UbahTambahPelabuhan/index", $data);
        $this->view("template/footer5");
    }

    public function Ubah(){
        if(isset($_POST["ubah_dataPelabuhan"])){
            if($this->model("Data_model")->ubahDataPelabuhan($_POST)){
                echo "<script>
                alert('Data Pelabuhan berhasil diubah!!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/pelabuhan';
                </script>";
            } else{
                echo "<script>
                alert('Data Pelabuhan Gagal diubah!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/pelabuhan';
                </script>";
            }
        }
    }

    public function Tambah(){
        if(isset($_POST["tambah_dataPelabuhan"]) > 0){
            if($this->model("Data_model")->TambahDataPelabuhan($_POST) > 0){
                echo "<script>
                alert('Pelabuhan berhasil ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/pelabuhan';
                </script>";
            } else {
                echo "<script>
                alert('Pelabuhan berhasil ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/pelabuhan';
                </script>";
            }
        }
    }
}