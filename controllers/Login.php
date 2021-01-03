<?php


class Login Extends Controller{
    private $db;

    public function __construct(){
        $this->db = new DataBase;
    }

    public function index(){
        $data["judul"] = "Login";
        $this->view("template/header3", $data);
        $this->view("login/index", $data);

        $conn = mysqli_connect("localhost", "root", "", "rayon");

        if( isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
            $id = $_COOKIE["id"];
            $key = $_COOKIE["key"];
 
            $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id ");
 
            $row = mysqli_fetch_assoc($result);
 
            if( $key === hash("whirlpool", $row["username"])){
                $_SESSION["submit"] = true;
            }
         }

        if( isset($_SESSION["submit"])){
            header("Location: " . BASEURL . "/home");
            exit;
        }


        if( isset($_POST["submit"]) ){
            $username = $_POST["username"];
            $password = md5($_POST["password"]);
    
            $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");
            $admin = mysqli_query($conn, "SELECT * FROM staff WHERE username = '$username' ");
            $manager = mysqli_query($conn, "SELECT * FROM manager WHERE username = '$username' ");

            if( mysqli_num_rows($manager) === 1){
                $row = mysqli_fetch_assoc($manager);
                $level  = $row['level'];
                if( $password == md5($row["password"])  && $row["level"] == 'manager' ){
                    $_SESSION['username'] = $username;
                    $_SESSION["submit"] = true;
                    if( isset($_POST["remember"])){
                        setcookie("id", $row["id"], time()+60*60 );
                        setcookie("key", hash("whirlpool", $row["username"] ), time()+60*60 );
                    }
                    echo "<script>
                    alert('Selamat Datang Manager!')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/admin';
                    </script>";
                } else {
                    echo "<p id='pesan-salah'>
                    Username Atau Password Salah
                  </p>";
                  return false;
                }
            } elseif( mysqli_num_rows($admin) === 1){
                $row = mysqli_fetch_assoc($admin);
                $level  = $row['level'];
                if( $password == $row["password"] && $row["level"] == 'staff' ){
                    $akun = $username;
                    $query = mysqli_query($conn, "SELECT * FROM staff WHERE username = '$akun'");
                    $result = mysqli_fetch_assoc($query);
                    $id_staff = $result["id"];
                    $status = $result["status"] = 1;

                    $query = "UPDATE staff SET status = '$status' WHERE id = '$id_staff'";
                    mysqli_query($conn, $query);
                    $_SESSION['username'] = $username;
                    $_SESSION["submit"] = true;
                    if( isset($_POST["remember"])){
                        setcookie("id", $row["id"], time()+60*60 );
                        setcookie("key", hash("whirlpool", $row["username"] ), time()+60*60 );
                    }
                    echo "<script>
                    alert('Selamat Datang Staff!')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/staffpage';
                    </script>";
                } else {
                    echo "<p id='pesan-salah'>
                    Username Atau Password Salah
                  </p>";
                  return false;
                }
            } elseif(mysqli_num_rows($user) === 1){
                $rows = mysqli_fetch_assoc($user);
                $level  = $rows['level'];
                if( $password == $rows["password"] && $rows["level"] == 'user' ) {
                    $akun = $username;
                    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$akun'");
                    $result = mysqli_fetch_assoc($query);
                    $id_user = $result["id"];
                    $status = $result["status"] = 1;

                    $query = "UPDATE user SET status = '$status' WHERE id = '$id_user'";
                    mysqli_query($conn, $query);

                    $_SESSION['username'] = $username;
                    $_SESSION["submit"] = true;
                    if( isset($_POST["remember"])){
                        setcookie("id", $rows["id"], time()+60*60 );
                        setcookie("key", hash("whirlpool", $row["username"] ), time()+60*60 );
                    }
                    echo "<script>
                    alert('Selamat Anda Berhasil Login!')
                    document.location.href = 'http://localhost/MVC-KapalLaut/public/home';
                    </script>";
                } else {
                    echo "<p id='pesan-salah'>
                    Username Atau Password Salah
                   </p>";
                   return false;
                }
            } else {
                echo "<p id='pesan-salah'>
                Username Atau Password Salah
              </p>";
              return false;
            }
        } 
    }
}