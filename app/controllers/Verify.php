<?php

class Verify Extends Controller{
    public function index($id, $token){
        $user = $this->model("Data_model")->getAllPembeliById2($id);
        $email = $user["email"];
        
        if ($user['id'] == $id) {
            $check2 = $this->model("Data_model")->getToken($token, $id);
            if ($check2) {
                if ($check2['token'] == $token) {

                    date_default_timezone_set('Asia/Jakarta');
                    $time = $check2['waktu_dibuat'];
                    $timeNow = Date("Y-m-d H:i:s");
    
                    $splitWaktu = explode(" ", $time);
                    $splitWaktuSekarang = explode(" ", $timeNow);
                    if ($splitWaktu[0] == $splitWaktuSekarang[0]) {
                        $waktuAll = explode(":",$splitWaktu[1]);
                        $waktuAllNow = explode(":",$splitWaktuSekarang[1]);
    
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
                        if ($hasil <= 3600) {
                            $this->model("Data_model")->aktipin($id);
                            $this->model("Data_model")->hapusToken($id);
                            $response = "Berhasil memverifikasi email, harap masuk lagi";
                            echo "<script>
                                alert('$response')
                                document.location.href = 'http://localhost/MVC-KapalLaut/public/login';
                                </script>";
                        }else {
                            $this->model("Data_model")->hapusToken($id);
                            $response = "Gagal mengaktifkan email, token tidak valid";

                            echo "<script>
                                alert('$response')
                                document.location.href = 'http://localhost/MVC-KapalLaut/public/VerifyUlang/$email';
                                </script>";
                        }
                    }else {
                        $this->model("Data_model")->hapusToken($id);
                        $response = "Gagal mengaktifkan email, token tidak valid";

                        echo "<script>
                            alert('$response')
                            document.location.href = 'http://localhost/MVC-KapalLaut/public/VerifyUlang/$email';
                            </script>";
                    }
                }
            }else {
                $this->model("Data_model")->hapusToken($id);
                $response = "Gagal mengaktifkan email, token tidak valid";

                echo "<script>
                    alert('$response')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/VerifyUlang/$email';
                    </script>";
            }
        }
    }
}