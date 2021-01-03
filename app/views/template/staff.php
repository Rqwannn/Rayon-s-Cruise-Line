<?php 

session_start();

if(!isset($_SESSION["submit"])){
    header("Location: " .BASEURL. "/login");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "rayon");

$akunApk = $_SESSION["username"];

$staffSelection = mysqli_query($conn, "SELECT * FROM staff WHERE username = '$akunApk'");
$resultStaff = mysqli_fetch_assoc($staffSelection);

if(mysqli_num_rows($staffSelection) === 1){
    if($resultStaff["status"] == 0){
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/staff.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/mobile-admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/width768-admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/width376-admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASEURL?>/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/responsive.bootstrap4.min.css">
</head>
<body>
<input type="checkbox" id="check" style="display: none;">
    <div class="navbar">
       <label for="check" class="menu-toggle">
                <div class="bar half start"></div>
                <div class="bar"></div>
                <div class="bar half end"></div>
        </label>
        <div class="button-btn-admin">
            <input type="text" name="text" placeholder="Keyword" autocomplete="off">
            <i class="fas fa-search"></i>
        </div>
        <div class="menu-links">
            <ul>
                <li><a href="<?php echo BASEURL; ?>/staffpage" class="<?= ($data['active'] == "staffpage") ? 'color' : '' ?>">Home</a></li>
                <li><a href="<?php echo BASEURL;?>/kapal" class="<?php echo ($data['active'] == "kapal") ? 'color' : '' ?>">Inbox</a></li>
            </ul>
        </div>
        <hr id="garis-navbar">
        <div class="button-btn" style="position: absolute; top: 28px; right: 70;">
            <label class="back" id="right-slide">
                <a href = "<?php echo BASEURL; ?>/massage/<?php echo $_SESSION["username"]; ?>">
                <i class="fas fa-comment-alt"></i>
                </a>
            </label>
        </div>
    </div>
<div class="side-bar">
    <div class="edit-bar">
        <div class="side-top">
            <i class="fas fa-cog"></i>
            <i class="fas fa-info-circle" id="fa-info-circle"></i>
        </div>
        <div class="center">
            <img src="<?php echo BASEURL; ?>/img/profile.webp">
           <?php if(isset($_SESSION["submit"])) : ?>
           <h4><?php echo $_SESSION["username"] ?></h4>
           <?php endif ; ?>
        </div>
        <div class="icon">
        <a href="<?php echo BASEURL; ?>/staffpage" class="<?= ($data['active'] == "staffpage") ? 'color' : '' ?>" id="side-bar-menu">
                <i class="fas fa-desktop"></i><span>Home</span>
            </a>
            <a href="<?php echo BASEURL; ?>/staffpage" class="<?php echo ($data['active'] == "staffpage") ? 'background' : '' ?>">
                <i class="fas fa-ship"></i><span>Pesan Tiket</span>
            </a>
            <a href="<?php echo BASEURL; ?>/transaksiberhasil" class="<?php echo ($data["active"] == "transaksi berhasil") ? "background" : "" ?>">
                <i class="fas fa-check-circle"></i><span>Transaksi Berhasil</span>
            </a>
            <a href="<?php echo BASEURL; ?>/transaksimenunggu" class="<?php echo($data["active"] == "transaksi menunggu") ? "background" : "" ?>">
                <i class="fas fa-cut"></i><span>Transaksi Menunggu</span>
            </a>
            <a href="<?php echo BASEURL ; ?>/transaksigagal" class="<?php echo($data["active"] == "transaksi gagal") ? "background" : "" ?>">
                <i class="far fa-times-circle"></i><span>Transaksi Gagal</span>
            </a>
            <a href="<?php echo BASEURL; ?>/logout"><i class="fas fa-sign-out-alt" style="color: #ff512f;"></i><span style="color: #ff512f;">Logout</span></a>
        </div>
        </div> 
    </div>
</div>