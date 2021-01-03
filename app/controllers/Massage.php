<?php

class Massage Extends Controller{
    public function index(){
        $data["judul"] = "Massage";
        $data["email"] = $this->model("Data_model")->getAllMassgae();
        $conn = mysqli_connect("localhost", "root", "", "rayon");
        $query = mysqli_query($conn, "SELECT * FROM massage");
        $result = mysqli_fetch_assoc($query);

        $data["user"] = $result["id_user"];
        $waktu = $result["waktu"];
        $pisah = explode(" ", $waktu);
        $pisah = end($pisah);
        $endPisah = explode(":", $pisah);
        $endPisah = array_splice($endPisah, 0,2);
        $Join = join(".", $endPisah);

        $data["waktu"] = $Join; 
        $this->view("template/massage", $data);
        $this->view("massage/index", $data);
        $this->view("template/footer6", $data);
    }
}