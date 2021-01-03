<?php


class Pesanan Extends Controller{
	public function index(){
		$data = [
			"judul" => "Pesanan",
			"active" => "pesanan"
		];
		$data["data"] = $this->model("Data_model")->getAllPembeli();
		$this->view("template/header", $data);
		$this->view("pesanan/index", $data);
		$this->view("template/footerPesanan");
	}

	public function Detail($id){
		$data = [
			"judul" => "Pesanan",
			"active" => "pesanan"
		];
		$data["data_id"] = $this->model("Data_model")->getAllPembeliById();
		$this->view("template/header", $data);
		$this->view("pesanan/index", $data);
		$this->view("template/footer");
	}

	public function hapus($id){
		if($this->model("Data_model")->hapusDataPesanan($id) > 0){
			echo "<script>
            alert('Pesanan Anda berhasil dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/pesanan';
            </script>";
		} else {
			echo "<script>
            alert('Pesanan Anda Gagal dihapus!')
            document.location.href = 'http://localhost/MVC-KapalLaut/public/pesanan';
            </script>";
		}
	}
}