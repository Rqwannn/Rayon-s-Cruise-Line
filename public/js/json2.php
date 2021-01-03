<?php 



$conn = mysqli_connect("localhost","root","","rayon");
$data = $_POST["id_pemesanan"];
$pesan = mysqli_query($conn, "SELECT * FROM tiket_tersedia WHERE id = $data");
$results = mysqli_fetch_assoc($pesan);
$response = [];
$response['id_user'] = $_POST['user'];
$response['tiket'] = $_POST['tiket'];
$response['nama'] = $_POST['nama'];
$response['email'] = $_POST['email'];
$response['nik_visa'] = $_POST['nik_visa'];
$response['dewasa'] = $_POST['dewasa'];
$response['anak'] = $_POST['anak'];
$response['no_pesanan'] = time();
$response['kapal'] = $results['Kapal'];
$response['berangkat'] = $results['berangkat'];
$response['tujuan'] = $results['tujuan'];
$response['tanggal'] = $results['tanggal'];
$response['harga'] = $results['harga'];
$response['id'] = $results['id'];
$response['id_tiket'] = $results['id'];

echo json_encode($response, JSON_PRETTY_PRINT);