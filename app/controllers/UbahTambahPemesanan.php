<?php

class UbahTambahPemesanan Extends Controller{
    public function index( $id = "0"){
    $data = [
        'judul' => 'Ubah/Tambah Staff'
    ];
    $tes = $this->model("Data_model")->getAllPembeliById($id);
    $data["id"] = $tes["id"];
    $data["id_user"] = $tes["id_user"];
    $data["id_tiket"] = $tes["id_tiket"];
    $data["nama_pemesan"] = $tes["nama_pemesan"];
    $data["email_pemesan"] = $tes["email_pemesan"];
    $data["berangkat"] = $tes["berangkat"];
    $data["tujuan"] = $tes["tujuan"];
    $data["dewasa"] = $tes["dewasa"];
    $data["anak_anak"] = $tes["anak_anak"];
    $data["tiket"] = $tes["tiket"];
    $data["total"] = $tes["total"];
    $data["tanggal"] = $tes["tanggal"];
    $data["confirmed"] = $tes["confirmed"];
    $data["nik_visa"] = $tes["nik_visa"];
    $data["nama_kapal"] = $tes["nama_kapal"];
    $data["no_pemesanan"] = $tes["no_pemesanan"];
    $this->view("template/UbahTambah", $data);
    $this->view("UbahTambahPemesanan/index", $data);
    $this->view("template/footer5");
    }

    public function Ubah(){
        if(isset($_POST["ubah_dataPemesanan"])){
            if($this->model("Data_model")->ubahDataPemesanan($_POST)){
                echo "<script>
                alert('Data Pemesan berhasil diubah!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/Pemesanan';
                </script>";
            } else {
                echo "<script>
                alert('Data Pemesan Gagal diubah!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/Pemesanan';
                </script>";
            }
        }
    }
}