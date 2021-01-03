<?php 

class Kapal Extends Controller{
    public function index(){
        $data = [
            'judul' => 'Kapal',
            'active' => 'kapal',
            $this->model("Data_model")->getAllPembeliTiket()
        ]; 
        $data["data"] = $this->model("Data_model")->getDataAllKapal();
        $this->view("template/header", $data);
        $this->view("kapal/index", $data);
        $this->view("template/footerKapal");
    }
}

?>