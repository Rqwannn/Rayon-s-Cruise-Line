<?php

class Pelayaran Extends Controller{
	public function index(){
		$data = [
			"judul" => "Pelayaran",
			"active" => "pelayaran"
		];
		$this->view("template/header", $data);
		$this->view("pelayaran/index", $data);
		$this->view("template/footer2");
	}
}