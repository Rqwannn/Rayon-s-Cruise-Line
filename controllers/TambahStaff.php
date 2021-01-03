<?php

class TambahStaff Extends Controller{
    public function index(){
        $data = [
            'judul' => 'Tambah Staff',
            'active' => 'tambahstaff'
        ];
        $this->view("template/admin", $data);
        $this->view("tambahstaff/index", $data);
        $this->view("template/footer3");
    }

    public function tambah(){
        if(isset($_POST["submit"]) > 0){
            if($this->model("Data_model")->tambahDataAdmin($_POST) > 0){
                echo "<script>
                alert('Staff berhasil ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/tambahstaff';
                </script>";
            } else {
                echo "<script>
                alert('Staff Gagal ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/tambahstaff';
                </script>";
            }
        }
    }
}