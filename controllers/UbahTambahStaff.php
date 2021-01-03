<?php

class UbahTambahStaff Extends Controller{
    public function index($id = "1"){
        $data = [
            "judul" => "Ubah/Tambah Staff"
        ];
        $tes = $this->model("Data_model")->getAllStaffById($id);
        $data["email"] = $tes["email"];
        $data["username"] = $tes["username"];
        $data["password"] = $tes["password"];
        $data["nama_depan"] = $tes["nama_depan"];
        $data["nama_belakang"] = $tes["nama_belakang"];
        $data["id"] = $tes["id"];
        $this->view("template/UbahTambah", $data);
        $this->view("UbahTambahStaff/index", $data);
        $this->view("template/footer5");
    }

    public function Ubah(){
        if(isset($_POST["ubah_dataStaff"])){
            if($this->model("Data_model")->ubahDataStaff($_POST)){
                echo "<script>
                alert('Data Staff berhasil diubah!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/Staff';
                </script>";
            } else {
                echo "<script>
                alert('Data Staff Gagal diubah!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/Staff';
                </script>";
            }
        }
    }

    public function Tambah(){
        if(isset($_POST["tambah_dataStaff"]) > 0){
            if($this->model("Data_model")->tambahDataAdmin($_POST) > 0){
                echo "<script>
                alert('Admin berhasil ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/staff';
                </script>";
            } else {
                echo "<script>
                alert('Admin Gagal ditambahkan!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/staff';
                </script>";
            }
        }
    }
}