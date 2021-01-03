<?php 

class verifikasiPassword Extends Controller{
    public function index($email){
        $data["judul"] = "Verifikasi Password";
        $data["email"] = $email;
        $this->view("template/header5", $data);
        $this->view("verifikasipassword/index", $data);
        $this->view("template/verifikasi", $data);
    }

    public function Verifikasi(){
        $data["judul"] = "Verifikasi Password";
        $this->view("template/header5", $data);

        if(isset($_POST["submit"])){
            $NewPassword = md5($_POST["password"]);
            $KonfirmasiPassword = md5($_POST["password2"]);
            $CekEmail = $_POST["email"];

            $data["email"] = $CekEmail;

            $conn = mysqli_connect("localhost", "root", "", "rayon");
            $cekSuccess = mysqli_query($conn, "SELECT * FROM user WHERE email = '$CekEmail'");

            $result = mysqli_fetch_assoc($cekSuccess);
            $cekPassword = $result["password"];
            
            $UpdateData = [
                "Id" => $result["id"],
                "Code" => 0,
                "Password" => $NewPassword
            ];

            if($NewPassword != $KonfirmasiPassword){
                $data["Status"] = "Password Tidak Sama";
            } else if($NewPassword == "" && $KonfirmasiPassword == ""){
                $data["Status"] = "Password Tidak Valid";
            } else if(strlen($NewPassword) < 2 && strlen($KonfirmasiPassword) < 2) {
                $data["Status"] = "Password Tidak Valid";
            } else if($NewPassword == $cekPassword){
                $data["Status"] = "Password Tidak Boleh Sama Dengan Password Lama";
            } else {
                if($this->model("Data_model")->UpdatePassword($UpdateData) > 0){
                    $response = "Password Berhasil Di Ubah!";
    
                    echo "<script>
                    alert('$response')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/login';
                    </script>";
                } else {
                    $response = "Terjadi Kesalahan!";
    
                    echo "<script>
                    alert('$response')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/verifikasipassword';
                    </script>";
                }
            }
        }
        $this->view("verifikasipassword/index", $data);
        $this->view("template/verifikasi", $data);
    }
}