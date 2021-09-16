<?php

use PHPMailer\PHPMailer\PHPMailer;

class VerifikasiEmail Extends Controller{
    public function index(){
        $data["judul"] = "Verifikasi Email";
        $this->view("template/header5", $data);

        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $conn = mysqli_connect("localhost", "root", "", "rayon");

            $cekSuccess = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

            if(mysqli_num_rows($cekSuccess) === 1){
                $email = $_POST["email"];
                $code = rand(1000,9999);


                // Update

                $data = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
                $result = mysqli_fetch_assoc($data);
                $id = $result["id"];
                $setData = [
                    "Id" => $id,
                    "Code" => $code
                ];

                $this->model("Data_model")->VerifikasiEmail($setData);

                require_once 'PHPMailer/PHPMailer.php';
                require_once 'PHPMailer/SMTP.php';
                require_once 'PHPMailer/Exception.php';

                $mail = new PHPMailer();

                // smtp setting

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = "youremail@gmail.com";
                $mail->Password = "secret";
                $mail->Port = 465;
                $mail->SMTPSecure = "ssl";

                // email setting

                $mail->isHTML(true);
                $mail->setFrom($email, "Rayon`s Cruise Line");
                $mail->addAddress($email);
                $mail->Subject = ("$email ('Verifikasi Email')");
                $mail->Body = "Ini adalah kode verifikasi email anda untuk mengganti password, harap verifikasi kode ini,
                jika selama sepuluh menit belum terkonfirmasi kode ini akan automatis tidak valid. Terima Kasih.\n\n" . "Kode Verifikasi Anda = " . $code;

                
                if($mail->send()){
                    $status = "Berhasil";
                    $response = "Code Verifikasi Berhasil Di kirim!";

                    echo "<script>
                    alert('$response')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/verifikasicode/$email';
                    </script>";
                } else {
                    $status = "Gagal";
                    $response = "Sesuatu Sesuatu Yang Salah : " . $mail->ErrorInfo;

                    echo "<script>
                    alert('$response')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/verifikasiemail';
                    </script>";
                }

                // exit(json_encode( array("Status : " => $status, "Response : " => $response) ));
            } else {
                $data["Status"] = "Email Tidak Di Temukan";
            }
        }

        $this->view("verifikasiemail/index", $data);
        $this->view("template/verifikasi", $data);
    }
}
