<?php

class Pembayaran Extends Controller{
    public function index($id){
        $data = [
            "judul" => "Pembayaran"
        ];
        $result = $this->model("Data_model")->getAllPembeliById($id);
        $data["no_pemesanan"] = $result["no_pemesanan"];
        $data["berangkat"] = $result["berangkat"];
        $data["tujuan"] = $result["tujuan"];
        $data["tanggal"] = $result["tanggal"];
        $data["nama_pemesan"] = $result["nama_pemesan"];
        $data["id"] = $result["id"];
        $data["tiket"] = $result["tiket"];
        $data["total"] = $result["total"];
        $data["nama_kapal"] = $result["nama_kapal"];
        $data["id"] = $result["id"];
        $this->view("template/header2", $data);
        $this->view("pembayaran/index", $data);
        $this->view("template/footer4");
    }

    public function ubah(){
        if(isset($_POST["pembayaran-lunas"])){
            if($this->model("Data_model")->konfirmasiPemesanan($_POST) > 0){
                echo "<script>
                alert('Pembayaran Berhasil Di Selesaikan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/pesanan';
                </script>";
            } else {
                echo "<script>
                alert('Pembayaran Gagal Di Selesaikan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/pembayaran';
                </script>";
            }
        }
    }
}