<?php


class StaffPage extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Staff",
            "active" => "staffpage"
        ];
        $data["data"] = $this->model("Data_model")->getAllPembeliStaff();
        $data["berhasil"] = $this->model("Data_model")->getAllTransaksiNumber();
        $result = $this->model("Data_model")->getAllTransaksiNumberThree();
        $menunggu = [];
        $gagal = [];
        foreach ($result as $results) {
            if ($results["confirmed"] == 0 && strtotime(date("Y-m-d")) <= strtotime($results['tanggal'])) {
                $menunggu[] = $results;
            } else if ($results["confirmed"] == 0 && strtotime(date("Y-m-d")) >= strtotime($results['tanggal'])) {
                $gagal[] = $results;
            }
        }
        $data["menunggu"] = $menunggu;
        $data["gagal"] = $gagal;
        $data["user"] = $this->model("Data_model")->getAllUser();
        $this->view("template/staff", $data);
        $this->view("staffpage/index", $data);
        $this->view("template/footer3");
    }

    public function Logout($id)
    {
        if ($this->model("Data_model")->LogoutUser($id)) {
            echo "<script>
            alert('Data User berhasil dilogout!!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/staffpage';
            </script>";
        } else {
            echo "<script>
            alert('Data User Gagal dilogout!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/staffpage';
            </script>";
        }
    }
}
