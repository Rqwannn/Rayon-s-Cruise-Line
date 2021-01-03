<?php 

class TransaksiBerhasil Extends Controller{
    public function index(){
        $data = [
            "judul" => "Transaksi Berhasil",
            "active" => "transaksi berhasil"
        ];
        $data["data"] = $this->model("Data_model")->getAllTransaksi();
        $this->view("template/staff", $data);
        $this->view("transaksiberhasil/index", $data);
        $this->view("template/footer3");
    }
}