<?php

class TransaksiGagal Extends Controller{
    public function index(){
        $data = [
            "judul" => "Transaksi Gagal",
            "active" => "transaksi gagal"
        ];
        $data["data"] = $this->model("Data_model")->getAllBelumLunas();
        $this->view("template/staff", $data);
        $this->view("transaksigagal/index", $data);
        $this->view("template/footer3");
    }
}