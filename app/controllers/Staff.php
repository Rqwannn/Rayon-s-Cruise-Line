<?php

class Staff Extends Controller{
    public function index(){
        $data = [
            'judul' => 'Staff',
            'active' => 'staff'
        ];
        $data["data"] = $this->model("Data_model")->getDataAllStaff();
        $this->view("template/admin", $data);
        $this->view("staff/index", $data);
        $this->view("template/footer3");
    }

    public function hapus($id){
        if($this->model("Data_model")->hapusDataStaff($id) > 0 ){
            echo "<script>
            alert('Data Staff berhasil dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/staff';
            </script>";
        } else {
            echo "<script>
                alert('Data Staff berhasil dihapus!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/staff';
                </script>";
        }
    }

    public function Pencarian(){
        $data = [
            'judul' => 'Staff',
            'active' => 'staff'
        ];
        $data["data"] = $this->model("Data_model")->CariDataAllStaff();
        $this->view("template/admin", $data);
        $this->view("staff/index", $data);
        $this->view("template/footer3");
    }
}