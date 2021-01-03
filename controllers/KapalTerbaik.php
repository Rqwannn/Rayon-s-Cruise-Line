<?php

class KapalTerbaik Extends Controller{
    public function index(){
        $data = [
            'judul' => 'Kapal Terbaik',
            'active' => 'kapalterbaik'
        ];
        $data["data"] = $this->model("Data_model")->getDataAllKapal();
        $this->view("template/admin", $data);
        $this->view("kapalterbaik/index", $data);
        $this->view("template/footer3");
    }

    public function hapus($id){
        if($this->model("Data_model")->hapusDataKapal($id) > 0){
            echo "<script>
                alert('Data Kapal berhasil dihapus!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/kapalterbaik';
                </script>";
        } else {
            echo "<script>
                alert('Data Kapal berhasil dihapus!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/login';
                </script>";
        }
    }

    public function Pencarian(){
        $data = [
            'judul' => 'Kapal Terbaik',
            'active' => 'kapalterbaik'
        ];
        $data["data"] = $this->model("Data_model")->CariDataAllKapal();
        $this->view("template/admin", $data);
        $this->view("kapalterbaik/index", $data);
        $this->view("template/footer3");
    }
}