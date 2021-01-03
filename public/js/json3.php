<?php 


$conn = mysqli_connect("localhost","root","","rayon");
$data = $_GET["id_pemesanan"];
$pesan = mysqli_query($conn, "SELECT * FROM data_pemesanan WHERE id = $data");
$results = mysqli_fetch_assoc($pesan);
$response = [];
$response["id"] = $results["id"];
$response['tiket'] = $results['tiket'];
$response['nama_pemesan'] = $results['nama_pemesan'];
$response['email_pemesan'] = $results['email_pemesan'];
$response['dewasa'] = $results['dewasa'];
$response['anak'] = $results['anak_anak'];
$response['no_pesanan'] = $results['no_pemesanan'];
$response['kapal'] = $results['nama_kapal'];
$response['berangkat'] = $results['berangkat'];
$response['tujuan'] = $results['tujuan'];
$response['tanggal'] = $results['tanggal'];
$response['harga'] = $results['total'];
$response['nik_visa'] = $results['nik_visa'];
$response['confirmed'] = $results['confirmed'];

echo json_encode($response);