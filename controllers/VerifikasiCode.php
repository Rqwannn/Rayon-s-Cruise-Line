<?php

class VerifikasiCode Extends Controller{
    public function index($email){
        $data["judul"] = "Verifikasi Code";
        $this->view("template/header5", $data);
        $data["email"] = $email;
        $this->view("verifikasicode/index", $data);
        $this->view("template/verifikasi", $data);
    }

    public function Verifikasi(){
        $data["judul"] = "Verifikasi Code";
        $this->view("template/header5", $data);

        if(isset($_POST["submit"])){
            $verifikasiCode = $_POST["code"];
            $verifikasiEmail = $_POST["email"];
            date_default_timezone_set('Asia/Jakarta');

            $conn = mysqli_connect("localhost", "root", "", "rayon");
            $cekSuccess = mysqli_query($conn, "SELECT * FROM user WHERE email = '$verifikasiEmail'");

            $resultCode = mysqli_fetch_assoc($cekSuccess);

            $CodeNumber = $resultCode["code_ferifikasi"];
            $waktuDatabase = $resultCode["waktu"];
            $waktuSekarang = date("Y-m-d H:i:s");

            $id = $resultCode["id"];

            $TimeStamp =  explode(" ", $waktuDatabase);
            $TimeNow =  explode(" ", $waktuSekarang);
            
            $waktuAll = explode(":",$TimeStamp[1]);
            $waktuAllNow = explode(":",$TimeNow[1]);

            $tes = 0;
            for($i=0;$i<count($waktuAll) -1;$i++) {
                if ($i == 0) {
                    $tes += intval($waktuAll[$i]) * 3600;
                }elseif ($i == 1) {
                    $tes += intval($waktuAll[$i]) * 60; 
                }else {
                    $tes += intval($waktuAll[$i]);
                }
            }

            $tes2 = 0;
            for($i=0;$i<count($waktuAllNow) -1;$i++) {
                if ($i == 0) {
                    $tes2 += intval($waktuAllNow[$i]) * 3600;
                }elseif ($i == 1) {
                    $tes2 += intval($waktuAllNow[$i]) * 60; 
                }else {
                    $tes2 += intval($waktuAllNow[$i]);
                }
            }

            $hasil = $tes2 - $tes;

            // var_dump($hasil);die;

            $CekEmail = $_POST["email"];

            $data["email"] = $CekEmail;
            
            if($hasil / 60 >= 10){
                $data["Status"] = "Code Verifikasi Telah Hangus";
                $this->model("Data_model")->setDefaulCode($id);
            }elseif($verifikasiCode == $CodeNumber){
                $cekSuccess = mysqli_query($conn, "SELECT * FROM user WHERE code_ferifikasi = '$verifikasiCode'");
                $result = mysqli_fetch_assoc($cekSuccess);
    
                $CekEmail = $result["email"];
                $response = "Email Berhasil Di Verifikasi!";
                

                echo "<script>
                alert('$response')
                document.location.href = 'http://localhost/MVC-KapalLaut/public/verifikasipassword/$CekEmail';
                </script>";
            }else if($verifikasiCode <= 0){
                $data["Status"] = "Code Verifikasi Tidak Valid";
            } else{
                $data["Status"] = "Code Verifikasi Salah";
            }
        }
        $this->view("verifikasicode/index", $data);
        $this->view("template/verifikasi", $data);
    }
}