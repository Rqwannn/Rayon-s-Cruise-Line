<?php 


class Logout Extends Controller{
    public function index(){
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "rayon");

        $akunApk = $_SESSION["username"];

        $staffSelection = mysqli_query($conn, "SELECT * FROM staff WHERE username = '$akunApk'");
        $resultStaff = mysqli_fetch_assoc($staffSelection);

        $userSelection = mysqli_query($conn, "SELECT * FROM user WHERE username = '$akunApk'");
        $resultUser = mysqli_fetch_assoc($userSelection);
        
        if(mysqli_num_rows($staffSelection) === 1){
            if($resultStaff["level"] == "staff"){
    
                $akun = $_SESSION["username"];
                $query = mysqli_query($conn, "SELECT * FROM staff WHERE username = '$akun'");
                $result = mysqli_fetch_assoc($query);
                $id_staff = $result["id"];
                $status = $result["status"] = 0;
        
                $query = "UPDATE staff SET status = '$status' WHERE id = '$id_staff'";
                mysqli_query($conn, $query);
            }
        }

        if(mysqli_num_rows($userSelection) === 1){
            if($resultUser["level"] == "user"){
                $akun = $_SESSION["username"];
                $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$akun'");
                $result = mysqli_fetch_assoc($query);
                $id_user = $result["id"];
                $status = $result["status"] = 0;
        
                $query = "UPDATE user SET status = '$status' WHERE id = '$id_user'";
                mysqli_query($conn, $query);
            }
        }


        $_SESSION = [];
        session_unset();
        session_destroy();

        setcookie("id", " ", time()-1);
        setcookie("key", " ", time()-1);

        echo "<script>
                document.location.href = 'http://localhost/MVC-KapalLaut/public/login';
                </script>";
    }
}
