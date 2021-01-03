<?php

session_start();

if(!isset($_SESSION["submit"])){
    header("Location: " .BASEURL. "/login");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "rayon");

$akunApk = $_SESSION["username"];

$userSelection = mysqli_query($conn, "SELECT * FROM user WHERE username = '$akunApk'");
$resultUser = mysqli_fetch_assoc($userSelection);

if(mysqli_num_rows($userSelection) === 1){
    if($resultUser["status"] == 0){
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo BASEURL; ?>/img/logo-icon.png">
    <title><?php echo $data["judul"]; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/Rayon.css">
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="<?php echo BASEURL; ?>/img/rayon.png">
        </div>
        <div class="menu-links">
            <ul>
                <li><a href="<?php echo BASEURL; ?>/home" class="<?= ($data['active'] == "home") ? 'color' : '' ?>">Beranda</a></li>
                <li><a href="<?php echo BASEURL;?>/kapal" class="<?php echo ($data['active'] == "kapal") ? 'color' : '' ?>">Kapal</a></li>
                <li><a href="<?php echo BASEURL; ?>/pesanan" class="<?php echo($data['active'] == "pesanan") ? 'color' : '' ?>">Pesanan</a></li>
                <li><a href="<?php echo BASEURL ?>/pelayaran" class="<?php echo($data['active'] == "pelayaran") ?
                'color' : '' ?>">Pelayaran</a></li>
            </ul>
            <hr style="background:#000; width: 50px; height: 1px; position: absolute; border: none;
             left: 510px; top: 10px; transform: rotate(90deg); border-radius: 5px;">
        </div>
        <div class="button-btn">
        <label class="masuk" id="right-slide">
                <a href = "<?php echo BASEURL; ?>/massage/<?php echo $_SESSION["username"]; ?>">
                    <i class="fas fa-comment-alt"></i>
                </a>
            </label>
            <label class="back" id="left-slide">
                <a href = "<?php echo BASEURL; ?>/logout">
                    <i class="fas fa-sign-out-alt" id="slide-left"></i>
                </a>
            </label>
        </div>
    </div>
    <!-- <iframe src="https://maps.google.com/maps?q=smk%20negeri%201%20depok&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe> -->