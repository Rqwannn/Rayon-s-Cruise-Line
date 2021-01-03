<?php

class Pemesanan Extends Controller{
    public function index(){
        $data = [
            'judul' => 'Pemesanan',
            'active' => 'pemesanan'
        ];
        $data["data"] = $this->model("Data_model")->getAllPembeli();
        $this->view("template/admin", $data);
        $this->view("pemesanan/index", $data);
        $this->view("template/footer3");
    }

    public function hapus($id){
        if($this->model("Data_model")->hapusDataPesanan($id) > 0){
            echo "<script>
            alert('Pesanan berhasil dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/pemesanan';
            </script>";
        } else {
            echo "<script>
            alert('Pesanan berhasil dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/pemesanan';
            </script>";
        }
    }

    public function Pencarian(){
        $data = [
            'judul' => 'Pemesanan',
            'active' => 'pemesanan'
        ];
        $data["data"] = $this->model("Data_model")->CariDataAllPesanan();
        $this->view("template/admin", $data);
        $this->view("pemesanan/index", $data);
        $this->view("template/footer3");
    }
}