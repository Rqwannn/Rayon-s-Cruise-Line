<?php

class Tiket extends Controller
{
    public function index($id = 1, $nama = 'Raqwan', $pekerjaan = 'programmer')
    {
        $data['id'] = $id;
        $data["judul"] = "Pemesanan Tiket";
        $result = $this->model("Data_model")->getAllTiketById($id);
        $data["kapal"] = $result["Kapal"];
        $data["berangkat"] = $result["berangkat"];
        $data["tujuan"] = $result["tujuan"];
        $data["tanggal"] = $result["tanggal"];
        $data["tanggal_pulang"] = $result["tanggal_pulang"];
        $data["total_hari"] = $result["total_hari"];
        $data["harga"] = $result["harga"];
        $this->view("template/header2", $data);
        $this->view("tiket/index", $data);
        $this->view("template/TiketFooter");
    }

    public function Tambah()
    {
        if (isset($_POST["nanti"])) {
            if ($this->model("Data_model")->tambahDataPemesan($_POST) > 0) {
                echo "<script>
            alert('Data Pesanan berhasil ditambahkan!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/home';
            </script>";
            } else {
                echo "<script>
            alert('Data Pesanan gagal ditambahkan!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/tiket';
            </script>";
            }
        }
        if (isset($_POST["konfirmasi"])) {
            if ($this->model("Data_model")->tambahDataPemesan($_POST) > 0) {
                $result = $this->model("Data_model")->getAllMenunggu();
                $id = $result["id"];
                echo "<script>
            document.location.href = 'http://localhost/MVC-KapalLaut/public/pembayaran/$id';
            </script>";
            } else {
                echo "<script>
            document.location.href = 'http://localhost/MVC-KapalLaut/public/tiket';
            </script>";
            }
        }
    }
}
