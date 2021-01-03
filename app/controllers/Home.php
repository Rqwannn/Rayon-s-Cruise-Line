<?php

use PHPMailer\PHPMailer\PHPMailer;

class Home Extends Controller{
    public function index(){
        $data = [
            "judul" => "Home",
            "active" => "home"
        ];
        $data["data"] = $this->model("Data_model")->getAllPembeliTiket();
        $this->view("template/header", $data);
        $this->view("home/index", $data);
        $this->view("template/footer");
    }

    public function homeToken(){
        if(isset($_POST["submit"])){

            require_once 'PHPMailer/PHPMailer.php';
            require_once 'PHPMailer/SMTP.php';
            require_once 'PHPMailer/Exception.php';       

            $email = $_POST['email'];
            $idarray = $this->model("Data_model")->cariPakeEmail($email);
            $id = $idarray[0]["id"];

            $this->model("Data_model")->hapusToken($id);

            $rand = "";
            $huruf = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
            for($i=0;$i<50;$i++) {
                $randFor = rand(0,24);
                $rand .= strval($randFor) .",";
            }
            $split = explode(",",$rand);
            $token = "";
            foreach($split as $key) {
                if ($key != "") {
                    $hurufnya = $huruf[$key];
                    $token .= $hurufnya . $key;
                }
            }  
            $data = [
                "id" => $id,
                "token" => $token
            ];

            $this->model("Data_model")->insertToken($data);

                $mail = new PHPMailer();

                // smtp setting

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = "mohwannn1@gmail.com";
                $mail->Password = "@python944";
                $mail->Port = 465;
                $mail->SMTPSecure = "ssl";

                // email setting

                $mail->isHTML(true);
                $mail->setFrom($email, "Rayon`s Cruise Line");
                $mail->addAddress($email);
                $mail->Subject = ("$email ('Verifikasi Email')");
                $mail->Body = "Silahkan Verifikasi Email Anda = " . IP . '/verify/' . $id . "/" . $token;

                
                if($mail->send()){
                    $status = "Berhasil";
                    $response = "Link Verifikasi Berhasil Di kirim! silahkan verifikasi email anda";

                    echo "<script>
                    alert('$response')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/home';
                    </script>";
                } else {
                    $status = "Gagal";
                    $response = "akun berhasil ditambahkan!" . $mail->ErrorInfo;

                    echo "<script>
                    alert('$response ')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/login';
                    </script>";
                }
        }
    }

    public function Pencarian(){
        $data = [
            "judul" => "Home",
            "active" => "home"
        ];
        $data["data"] = $this->model("Data_model")->CariDataPembeliTiket();
        $this->view("template/header", $data);
        $this->view("home/index", $data);
        $this->view("template/footer");
    }

    public function tambah(){
        if($this->model("Data_model")->tambahDataPembeli($_POST) > 0 ){
            header('Location: ' . BASEURL . '/tiket');
            exit;
        } else {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

}