<?php


class Pelabuhan Extends Controller{
    private $db;

    public function __construct(){
        $this->db = new DataBase;
    }

    public function index(){
        $data = [
            'judul' => 'Pelabuhan',
            'active' => 'pelabuhan'
        ];
        $data["data"] = $this->model("Data_model")->getDataPelabuhan();
        $this->view("template/admin", $data);
        $this->view("pelabuhan/index", $data);
        $this->view("template/footer3");
    }

    public function hapus($id){
        if($this->model("Data_model")->hapusDataPelabuhan($id) > 0 ){
            echo "<script>
            alert('Data Pelabuhan berhasil dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/pelabuhan';
            </script>";
        } else {
            echo "<script>
            alert('Data Pelabuhan berhasil dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/pelabuhan';
            </script>";
        }
    }

    public function Pencarian(){
            $data = [
                'judul' => 'Pelabuhan',
                'active' => 'pelabuhan'
            ];
            $data["data"] = $this->model("Data_model")->cariDataPelabuhan();
            $this->view("template/admin", $data);
            $this->view("pelabuhan/index", $data);
            $this->view("template/footer3");
    }
}