<?php 

require_once "../../app/core/DataBase.php";

$conn = mysqli_connect("localhost","root","","rayon");
$query = mysqli_query($conn, "SELECT * FROM tiket_tersedia");
$result = mysqli_fetch_assoc($query);
$response = [];
$response['tiket'] = $_POST['tiket'];
// $response['nama'] = $_POST['nama'];
// $response['email'] = $_POST['email'];
// $response['rekening2'] = $_POST['rekening'];
// $response['berangkat'] = $_POST['berangkat'];
$response['tujuan'] = $_POST['tujuan'];
$response['tanggal'] = $_POST['tanggal'];
$response["data"] = $result;

echo json_encode($response);