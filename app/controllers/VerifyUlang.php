<?php 

use PHPMailer\PHPMailer\PHPMailer;

class VerifyUlang Extends Controller{
    public function index($email){
        $data["judul"] = "Verify Token";
        $data["email"] = $email;
        $this->view("template/header6", $data);
        $this->view("verifyulang/index", $data);
    }

    public function verifikasiToken(){
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
                $mail->Body = "Silahkan Verifikasi Email Anda = " . IPWIFI . '/verify/' . $id . "/" . $token;

                
                if($mail->send()){
                    $status = "Berhasil";
                    $response = "Link Verifikasi Berhasil Di kirim! silahkan verifikasi email anda";

                    echo "<script>
                    alert('$response')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/VerifyUlang/$email';
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
}