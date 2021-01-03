<?php

class TransaksiMenunggu Extends Controller{
    public function index(){
        $data = [
            "judul" => "Transaksi Menunggu",
            "active" => "transaksi menunggu"
        ];
        $data["data"] = $this->model("Data_model")->getAllBelumLunas();
        $this->view("template/staff", $data);
        $this->view("transaksimenunggu/index", $data);
        $this->view("template/footer3");
    }

    public function Konfirmasi($id){
        $panggil = $this->model("Data_model")->getAllPembeliById($id);
        $data["id"] = $panggil["id"];
        $data["id_user"] = $panggil["id_user"];
        $data["id_tiket"] = $panggil["id_tiket"];
        $data["nama_pemesan"] = $panggil["nama_pemesan"];
        $data["email_pemesan"] = $panggil["email_pemesan"];
        $data["berangkat"] = $panggil["berangkat"];
        $data["tujuan"] = $panggil["tujuan"];
        $data["dewasa"] = $panggil["dewasa"];
        $data["anak_anak"] = $panggil["anak_anak"];
        $data["tiket"] = $panggil["tiket"];
        $data["total"] = $panggil["total"];
        $data["tanggal"] = $panggil["tanggal"];
        $data["nik_visa"] = $panggil["nik_visa"];
        $data["confirmed"] = $panggil["confirmed"] = 1;
        $data["nama_kapal"] = $panggil["nama_kapal"];
        $data["no_pemesanan"] = $panggil["no_pemesanan"];
        if($this->model("Data_model")->konfirmasiDataPemesanan($data)){
            echo "<script>
            alert('Data Pemesan berhasil Terkonfirmasi!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/transaksimenunggu';
            </script>";
        } else {
            echo "<script>
            alert('Data Pemesan Gagal Terkonfirmasi!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/transaksimenunggu';
            </script>";
        }
    }
}