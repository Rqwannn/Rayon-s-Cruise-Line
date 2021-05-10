<?php

use PHPMailer\PHPMailer\PHPMailer;

class Register extends Controller
{
    private $db;
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    public function __construct()
    {
        $this->db = new DataBase;
    }

    public function index()
    {
        $data["judul"] = "Register";
        $this->view("template/header4", $data);
        $this->view("register/index", $data);

        if (isset($_POST["submit"]) > 0) {
            $conn = mysqli_connect("{$this->host}", "{$this->user}", "{$this->pass}", "{$this->db_name}");
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password2 = $_POST["password2"];
            $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
            $results = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
            if (mysqli_fetch_assoc($results)) {
                echo "
                <p id='email-sama'>
                    Email Sudah Terdaftar
                </p>";
                if (mysqli_fetch_assoc($result)) {
                    echo "
                    <p id='username-sama'>
                        Username Sudah Terdaftar
                    </p>";
                }
                if ($password != $password2) {
                    echo "
                    <p id='password-sama'>
                       Password Tidak Sesuai
                    </p>";
                }
                return false;
            }
            if (mysqli_fetch_assoc($result)) {
                echo "
                <p id='username-sama'>
                    Username Sudah Terdaftar
                </p>";
                if ($password != $password2) {
                    echo "
                    <p id='password-sama'>
                       Password Tidak Sesuai
                    </p>";
                }
                return false;
            }
            if ($password != $password2) {
                echo "
                <p id='password-sama'>
                   Password Tidak Sesuai
                </p>";
                return false;
            }


            if ($this->model("Data_model")->tambahDataUser($_POST) > 0) {

                require_once 'PHPMailer/PHPMailer.php';
                require_once 'PHPMailer/SMTP.php';
                require_once 'PHPMailer/Exception.php';

                $email = $_POST['email'];
                $idarray = $this->model("Data_model")->cariPakeEmail($email);
                $id = $idarray[0]["id"];

                $rand = "";
                $huruf = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
                for ($i = 0; $i < 50; $i++) {
                    $randFor = rand(0, 24);
                    $rand .= strval($randFor) . ",";
                }
                $split = explode(",", $rand);
                $token = "";
                foreach ($split as $key) {
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


                if ($mail->send()) {
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

                // exit(json_encode( array("Status : " => $status, "Response : " => $response) ));
            } else {
                echo "<p id='pesan-salah'>
                    Ada Kesalahan Saat Mengisi
                </p>";
            }
        }
    }
}
