<?php


class Admin extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Admin",
            "active" => "admin"
        ];
        $data["pelabuhan"] = $this->model("Data_model")->getDataPelabuhan();
        $data["pemesanan"] = $this->model("Data_model")->getAllPembeli();
        $data["staff"] = $this->model("Data_model")->getDataAllStaff();
        $data["kapal"] = $this->model("Data_model")->getDataAllKapal();
        $data["data"] = $this->model("Data_model")->getDataAllStaff();
        $data["manager"] = $this->model("Data_model")->getAllManager();
        $this->view("template/admin", $data);
        $this->view("admin/index", $data);
        $this->view("template/footer3");
    }

    public function hapus($id)
    {
        if ($this->model("Data_model")->hapusDataStaff($id) > 0) {
            echo "<script>
            alert('Data Staff berhasil dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/admin';
            </script>";
        } else {
            echo "<script>
                alert('Data Staff berhasil dihapus!')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/admin';
                </script>";
        }
    }

    public function Logout($id)
    {
        if ($this->model("Data_model")->LogoutStaff($id)) {
            echo "<script>
            alert('Data Staff berhasil dilogout!!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/admin';
            </script>";
        } else {
            echo "<script>
            alert('Data Staff Gagal dilogout!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/admin';
            </script>";
        }
    }
}
