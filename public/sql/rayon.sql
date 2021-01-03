-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2021 pada 10.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kapal`
--

CREATE TABLE `data_kapal` (
  `id` int(11) NOT NULL,
  `nama_kapal` varchar(55) NOT NULL,
  `kelas_pelayaran` varchar(55) NOT NULL,
  `spesifikasi` varchar(500) NOT NULL,
  `gambar` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kapal`
--

INSERT INTO `data_kapal` (`id`, `nama_kapal`, `kelas_pelayaran`, `spesifikasi`, `gambar`) VALUES
(1, 'Allure Of The Seas', 'Sangat Mewah', 'Diluncurkan pada 2010, Allure of the Seas menawarkan 25 pilihan tempat makan berbeda, empat kolam renang, dan 10 kolam berendam.\r\n\r\nAda teater dengan 1.380 kursi canggih yang menawarkan pertunjukan musikal Broadway. Selain itu, ada aula dansa dua tingkat, gelanggang seluncur es, spa, dan fasilitas kebugaran. Selain itu, ada pila kedai kopi Starbucks, yang menjadi pertama di tengah laut.', 'http://localhost/MVC-KapalLaut/public/img/allure_of_the_seas.jpg'),
(2, 'Oasis Of The Seas', 'Sangat Mewah', 'Untuk para tamunya, Oasis of the Seas menawarkan opsi suite berlantai dua dan suite mewah dengan balkon.Aqua Teather dan Central Park dengan restoran menghiasi dalam kapal. Dinding panjat tebing juga tersedia untuk menjadi pilihan hiburan tebaik. Selaun itu, lima kolam renang, lapangan voli, dan bola basket juga disediakan bagi penumpang yang menyukai olahraga.', 'http://localhost/MVC-KapalLaut/public/img/Oasis_Of_The_Seas.jpg'),
(3, 'Harmony Of The Seas', 'Sangat Mewah', 'Harmony of the Seas menawarkan semua fitur eksklusif Royal Caribbean, termasuk Central Park, Vitality at Sea Spa and Fitness Centre, Boardwalk, the Royal Promenade, dan Entertainment Place.', 'http://localhost/MVC-KapalLaut/public/img/Harmony_Of_The_Sea.jpg'),
(4, 'Norwegian Encore', 'Sangat Mewah', 'Norwegian Encore memiliki 20 dek, 2.043 kabin dan kapasitas 4.004 penumpang dengan hunian ganda.\r\nFitur onboard termasuk restoran, Ocean Blue, Bar, dan klub komedi, Lalu mempunyai teater yang besar serta mempunyai kolam renang yang indah', 'http://localhost/MVC-KapalLaut/public/img/NorwegianEncore.jpg'),
(5, 'Norwegian Breakaway', 'Sangat Mewah', 'Saat diluncurkan, Norwegian Breakaway adalah kapal pesiar terbesar kesembilan di dunia berdasarkan tonase kotor. Kapal itu memiliki total 1.024 kabin dan 238 suite.\r\n\r\nFitur onboard termasuk restoran, Ocean Blue, oleh Geoffrey Zakarian, dan klub komedi, di mana perusahaan Kota Kedua tampil. Peter Max merancang seni lambung kapal.', 'http://localhost/MVC-KapalLaut/public/img/NorwegianBreakeway.jpg'),
(6, 'Liberty Of The Seas', 'Mewah', 'Liberty of the Seas memiliki fasilitas olahraga yang luas termasuk generator gelombang onboard FlowRider untuk berselancar, area bermain air interaktif untuk anak-anak, lapangan voli / basket berukuran penuh, arena seluncur es, dan pusat kebugaran yang besar. Ada juga dua pusaran air yang kantilever dan menonjol keluar dari sisi kapal untuk memberikan pemandangan laut tanpa hambatan di bawah dan pusat konferensi modular untuk pertemuan bisnis. Di antara fasilitas makan lainnya terdapat ruang mak', 'http://localhost/MVC-KapalLaut/public/img/Liberty_Of_The_Sea.jpeg'),
(7, 'MSC Meragvilia', 'Sangat Mewah', 'Kapal dirancang untuk beroperasi di semua musim. Kapal juga memiliki cabang Eataly sendiri, rantai toko makanan Italia yang terkenal, dan sebuah balkon dalam ruangan dengan LED Sky gaya Mediterania, Berbagai penghargaan diperoleh kapal pesiar MSC Meraviglia karena manajemen kualitas, kesehatan, keselamatan, dan lingkungan.', 'http://localhost/MVC-KapalLaut/public/img/kapal-pesiar-1.jpg'),
(8, 'Symphony Of The Seas', 'Sangat Mewah', 'Kapal pesiar ini memiliki 18 geladak, dengan 16 di antaranya diperuntukkan bagi tamu. Selain itu, kemewahan begitu terasa di 22 restoran, 24 kolam renang termasuk untuk anak-nak, 2.759 kabin, dan sebuah taman dengan lebih dari 20.000 tanaman tropis. Belum lagi seluncuran air tertinggi di perairan dan 7 tema lingkungan yang berbeda siap untuk dijelajahi.', 'http://localhost/MVC-KapalLaut/public/img/Symphony_Ship.jpg'),
(9, 'Norwegian Sun', 'Sangat Mewah', 'Fitur onboard termasuk berbagai restoran terkenal, Ocean Blue, Bar Terbuka, dan klub komedi, Lalu mempunyai teater yang besar serta mempunyai kolam renang yang indah.\r\nNorwegian Sun juga menawarkan kasino yang mewah bagi para selebriti dan banyak brand terkenal yang bisa anda kunjungi', 'http://localhost/MVC-KapalLaut/public/img/Norwegian_Sun_Ship.jpg'),
(10, 'MSC Preziosa', 'Mewah', 'pengkondisian. Fasilitas umum termasuk tujuh restoran, 20 bar dan lounge, empat kolam renang, arena bowling, dan gimnasium. Sebuah spa terletak di dek 14. Teater ini menampung 1.600 tamu. Arena olahraga menawarkan olahraga seperti bola basket, bola voli, tenis, dan lintasan jogging sepanjang 235 m. Area bermain bertema Smurf terletak di dek 15 di area khusus anak-anak.', 'http://localhost/MVC-KapalLaut/public/img/Msc_Preziosa.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelabuhan`
--

CREATE TABLE `data_pelabuhan` (
  `id` int(11) NOT NULL,
  `pelabuhan_awal` varchar(55) NOT NULL,
  `pelabuhan_akhir` varchar(100) NOT NULL,
  `jml_hari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pelabuhan`
--

INSERT INTO `data_pelabuhan` (`id`, `pelabuhan_awal`, `pelabuhan_akhir`, `jml_hari`) VALUES
(1, 'Miami', 'Florida', '3 Malam'),
(2, 'Orlando', 'Nassau', '3 Malam'),
(3, 'Singapura', 'Pulau Bintan(Indonesia)', '2 Malam'),
(4, 'Galveston', 'Cozumel', '4 Malam'),
(5, 'Tokyo', 'Sydney', '4 Malam'),
(6, 'Singapura', 'Penang', '3 Malam'),
(7, 'Singapura', 'Kuala Lumpur', '3 Malam'),
(8, 'Pelabuhan Lauderdale(Florida)', 'Nassau', '3 Malam'),
(9, 'Beljing', 'Fukuoka', '4 Malam'),
(10, 'Seattle', 'Victoria, Vancouver', '3 Malam'),
(11, 'New Orleans', 'Cazomel, Puerto Costa Maya, Roatan', '7 Malam'),
(12, 'New Orleans', 'Key West, Nassau | Kembali | New Orleans', '7 Malam'),
(13, 'Sydney', 'Melbourne, Hobart | Kembali | Sydney', '6 Malam'),
(14, 'Miami', 'Key West, Puerto Costa Maya, Cazomel | Kembali | Miami', '6 Malam'),
(15, 'Miami', 'Labadee, Falmouth, George Town | Kembali | Miami', '6 Malam'),
(16, 'Tampa', ' George Town, Cozumel, Routan | Kembali | Tampa', '7 Malam'),
(17, 'Barcelona', 'Southampthon', '3 Malam'),
(18, 'Copenhagen', 'Lisbon', '4 Malam'),
(19, 'Baltimore', 'St. Croix, Philisburg, Castries, St. George\'s | Kembali | Baltimore', '12 Malam'),
(20, 'Miami', ' George Town, Oranjestad, Willemstad, Kralendijk, Boston', '13 Malam'),
(21, 'Brisbane', 'Noumea, Mystery Island, Villa, Luganville | Kembali | Brisbane', '9 Malam'),
(22, 'Cape Liberty', 'Labadee, Oranjestad, Willemstad, George Town, Galveston', '11 Malam'),
(23, 'Seattle', 'San Diego', '4 Malam'),
(24, 'Orlando', 'Caribia', '3 Malam'),
(25, 'Roma', 'Barcelona, Lisbon, Stockholm', '8 Malam'),
(26, 'San Juan', 'Puerto Costa Maya', '3 Malam'),
(27, 'San Juan', 'Miami', '3 Malam'),
(28, 'Seattle', 'Oahu', '4 Malam'),
(29, 'Vancouver', 'Inside Passege, Sitka, Juneau, Skagway, Tracy Arm Fjord', '7 Malam'),
(30, 'Shanghai', 'Kuala Lumpur, Jakarta', '5 Malam'),
(31, 'Singapura', 'Kuala Lumpur, Phuket | Kembali | Singapura', '4 Malam'),
(32, 'Beljing', 'Fukuoka, Sasebo', '5 Malam'),
(33, 'Hong Kong', 'Nha Trang | Kembali | Hong Kong', '4 Malam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemesanan`
--

CREATE TABLE `data_pemesanan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `no_pemesanan` varchar(30) NOT NULL,
  `nama_kapal` varchar(20) NOT NULL,
  `tiket` int(30) NOT NULL,
  `berangkat` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `dewasa` int(15) NOT NULL,
  `anak_anak` int(15) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `total` varchar(20) NOT NULL,
  `nama_pemesan` varchar(150) NOT NULL,
  `email_pemesan` varchar(150) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `nik_visa` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pemesanan`
--

INSERT INTO `data_pemesanan` (`id`, `id_user`, `id_tiket`, `no_pemesanan`, `nama_kapal`, `tiket`, `berangkat`, `tujuan`, `dewasa`, `anak_anak`, `tanggal`, `total`, `nama_pemesan`, `email_pemesan`, `confirmed`, `nik_visa`) VALUES
(5, 'User1', 6, '1604125351', 'Norwegian Encore', 3, 'Barcelona', 'Miami', 2, 1, '2020-09-22', '39000000', 'Novia Kaspato', 'noviakaspato@gmail.com', 1, '4000 5274 9010 5678'),
(6, 'User1', 3, '1604140129', 'Oasis Of The Seas', 3, 'Tokyo', 'Sydney', 2, 1, '2020-09-12', '13740000', 'Muhammad Andika', 'mAndikasp@gmail.com', 0, '4932 5906 8903 1337'),
(7, 'User1', 5, '1604140197', 'Harmony Of The Seas', 2, 'Beljing', 'Stockholm', 2, 0, '2020-09-17', '22000000', 'Rahul Asrialdi', 'rahulasrialdi@gmail.com', 0, '4000 0012 3456 7890'),
(8, 'User1', 1, '1604140251', 'Allure Of The Seas', 3, 'London', 'Orlando', 1, 2, '2020-09-22', '21000000', 'Aditiya Nugroho', 'aditiyanh01@gmail.com', 0, '4278 5671 9876 5432'),
(9, 'User1', 1, '1604386334', 'Allure Of The Seas', 5, 'London', 'Orlando', 3, 2, '2020-11-28', '35000000', 'Risky Ramadhan', 'riskyramadhan001@gmail.com', 1, '4000 5274 9010 5678'),
(13, 'User1', 2, '1604726423', 'MSC Meragvilia', 3, 'Southampton', 'San Juan', 1, 2, '2020-11-27', '20311000', 'Fauzi Yansah', 'Fauzi@gmail.com', 1, '123'),
(37, 'User3', 7, '1605528343', 'Symphony Of The Seas', 4, 'Miami', 'Nassau', 3, 1, '2020-12-05', '31111000', 'Ekky Mulia', 'EkkyWbu@gmail.com', 1, '3819 8292 1972 2187'),
(38, 'User3', 6, '1605764555', 'Norwegian Encore', 4, 'Barcelona', 'Miami', 2, 2, '2020-11-22', '52000000', 'Risky Ramadan', 'riskyramadhan001@gmail.com', 0, '123123123123123123123'),
(43, 'User2', 1, '1606401812', 'Allure Of The Seas', 5, 'London', 'Orlando', 3, 2, '2020-11-28', '35000000', 'Muhammad Raqwan', 'mraqwan471@gmail.com', 1, '123123123123123123123'),
(44, 'User2', 8, '1606403107', 'Norwegian Breakaway', 5, 'Seattle', 'San Diego', 3, 2, '2020-12-05', '45061000', 'Muhammad Raqwan', 'mraqwan471@gmail.com', 1, '1231231231231231231'),
(45, 'User2', 4, '1607680361', 'MSC Bellissima', 6, 'copenhagen', 'Puerto Rico', 4, 2, '2021-01-15', '46200000', 'Rivaldi', 'rivaldi@gmail.com', 0, '12345678901234567890'),
(46, 'User2', 7, '1608137768', 'Symphony Of The Seas', 3, 'Miami', 'Nassau', 2, 1, '2020-12-31', '22050000', 'Ahmad', 'Ridho', 0, '12345678901234567890'),
(48, 'User4', 4, '1608723426', 'MSC Bellissima', 4, 'copenhagen', 'Puerto Rico', 3, 1, '2021-01-15', '30800000', 'India Eisley', 'IndiaEisley@gmail.com', 0, '3172932937276126111'),
(49, 'User4', 3, '1608723885', 'Oasis Of The Seas', 4, 'Tokyo', 'Sydney', 4, 0, '2021-01-02', '171331000', 'Muhammad Ridwan', 'MRidwan@gmail.com', 1, '987947229387492373346');

--
-- Trigger `data_pemesanan`
--
DELIMITER $$
CREATE TRIGGER `penjualan_tiket` AFTER INSERT ON `data_pemesanan` FOR EACH ROW BEGIN
   UPDATE tiket_tersedia SET tiket=tiket-NEW.tiket WHERE id = NEW.id_tiket;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `manager`
--

INSERT INTO `manager` (`id`, `username`, `email`, `nama_depan`, `nama_belakang`, `password`, `level`) VALUES
(1, 'Raqwan1', 'mraqwan471@gmail.com', 'Muhammad', 'Raqwan', 'Raqwan1', 'manager'),
(2, 'Novia1', 'noviaFitriani@gmail.com', 'Novia', 'Fitriani', 'Novia1', 'manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `massage`
--

CREATE TABLE `massage` (
  `id` int(11) NOT NULL,
  `id_staff` varchar(35) NOT NULL,
  `id_user` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `massage`
--

INSERT INTO `massage` (`id`, `id_staff`, `id_user`, `email`, `waktu`) VALUES
(1, 'Rahul1', 'User2', 'User2@gmail.com', '2020-12-30 10:03:04'),
(2, 'Pancaran1', 'User3', 'User2@gmail.com', '2020-12-30 08:23:04'),
(3, 'Adit1', 'User1', 'User1@gmail.com', '2020-12-30 11:37:18'),
(4, 'Andika1', 'User4', 'User4@gmail.com', '2020-12-30 01:37:18'),
(5, 'Rahul1', 'User3', 'User3@gmail.com', '2020-12-30 04:41:35'),
(6, 'Val1', 'User5', 'atarjr06@gmail.com', '2020-12-30 09:21:35'),
(7, 'Jelita1', 'User6', 'mraqwan471@gmail.com', '2020-12-30 06:31:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `level` enum('staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `username`, `email`, `nama_depan`, `nama_belakang`, `password`, `status`, `level`) VALUES
(13, 'Rahul1', 'rahulasrialdi@gmail.com', 'Rahul', 'Asrialdi', 'bd8790397bcb1318413dc20c6070af27', 1, 'staff'),
(14, 'Pancaran1', 'pancaranRM@gmail.com', 'Pancaran', 'Ratna', 'ee4a41bf20a8aa770b47e40d7fc1847a', 0, 'staff'),
(15, 'Adit1', 'AditiyaNh@gmail.com', 'Aditiya', 'Nugroho', '389ad4cc594659de577a346c5235cfcf', 0, 'staff'),
(16, 'Andika1', 'AndikaSp01@gmail.com', 'Andika', 'Surya', '28659b3d47005cb7d5424c0946de810a\r\n', 0, 'staff'),
(17, 'Fauzi1', 'FauziYansah@gmail.com', 'Fauzi', 'Yansah', '05cfb125458381559712dedf80f6f195', 0, 'staff'),
(19, 'Jelita1', 'JelitaRahma@gmail.com', 'Jelita', 'Rahma', '31b891ff8c963ee2f0791725aa2f1af1', 0, 'staff'),
(20, 'Ewing1', 'AhmadRidho@gmail.com', 'Ahmad', 'Ridho', 'd6ccedda9ca93c22d5548b3968998792', 0, 'staff'),
(26, 'Val1', 'Avrialdi@gmail.com', 'Avrialdi', 'Ramadhan', 'd246db2de88039e98e9c27b77f882b0a', 0, 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_tersedia`
--

CREATE TABLE `tiket_tersedia` (
  `id` int(11) NOT NULL,
  `nama_partner` varchar(50) NOT NULL,
  `Kapal` varchar(30) NOT NULL,
  `berangkat` varchar(35) NOT NULL,
  `tujuan` varchar(35) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `tanggal_pulang` varchar(50) NOT NULL,
  `total_hari` varchar(30) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket_tersedia`
--

INSERT INTO `tiket_tersedia` (`id`, `nama_partner`, `Kapal`, `berangkat`, `tujuan`, `tanggal`, `tanggal_pulang`, `total_hari`, `harga`, `tiket`) VALUES
(1, 'Royal Caribbean', 'Allure Of The Seas', 'London', 'Orlando', '2021-01-08', '2021-01-11', '3 Hari', '7000000', 490),
(2, 'MSC Cruise', 'MSC Meragvilia', 'Southampton', 'San Juan', '2020-12-27', '2021-01-01', '5 Hari', '6200000', 496),
(3, 'Royal Caribbean', 'Oasis Of The Seas', 'Tokyo', 'Sydney', '2021-01-02', '2021-01-05', '3 Hari', '4580000', 407),
(4, 'MSC Cruise', 'MSC Bellissima', 'copenhagen', 'Puerto Rico', '2021-01-15', '2021-01-20', '5 Hari', '7700000', 486),
(5, 'Royal Caribbean', 'Harmony Of The Seas', 'Beljing', 'Stockholm', '2020-12-29', '2021-01-05', '7 Hari', '11000000', 496),
(6, 'Norwegian Cruise', 'Norwegian Encore', 'Barcelona', 'Miami', '2020-12-28', '2021-01-02', '5 Hari', '13000000', 496),
(7, 'Royal Caribbean', 'Symphony Of The Seas', 'Miami', 'Nassau', '2020-12-31', '2021-01-03', '3 Hari', '7350000', 493),
(8, 'Norwegian Cruise', 'Norwegian Breakaway', 'Seattle', 'San Diego', '2021-01-07', '2021-01-11', '4 Hari', '8670000', 488);

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `token` varchar(250) NOT NULL,
  `waktu_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id`, `id_user`, `token`, `waktu_dibuat`) VALUES
(36, '61', 'e4n13x23r17c2n13f5b1k10s18q16t19n13j9h7k10r17g6r17s18x23n13h7q16f5q16w22k10g6o14s18k10x23q16e4h7m12q16e4m12f5u20e4y24i8d3o14o14m12n13', '2021-01-01 08:31:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_berhasil`
--

CREATE TABLE `transaksi_berhasil` (
  `id` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `no_pesanan` varchar(30) NOT NULL,
  `jml_tiket` int(11) NOT NULL,
  `pelabuhan_awal` varchar(100) NOT NULL,
  `pelabuhan_akhir` varchar(100) NOT NULL,
  `tgl_berangkat` varchar(25) NOT NULL,
  `tgl_pulang` varchar(25) NOT NULL,
  `total` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `confirmed_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_berhasil`
--

INSERT INTO `transaksi_berhasil` (`id`, `id_tiket`, `no_pesanan`, `jml_tiket`, `pelabuhan_awal`, `pelabuhan_akhir`, `tgl_berangkat`, `tgl_pulang`, `total`, `id_pemesan`, `nama_pemesan`, `confirmed_by`, `created_at`, `updated_at`) VALUES
(1, 20, '1605441251', 4, 'Beljing', 'Brisbane', '2020-11-22', '2020-11-25', 29500000, 22331, 'Risky Ramadan', 1, '2020-11-01 11:48:59', '2020-11-01 11:51:53'),
(2, 11, '1605412275', 2, 'Barcelon', 'Rome', '2020-11-17', '2020-11-20', 11500000, 12987, 'Muhammad Andika', 1, '2020-11-01 11:56:36', '2020-11-01 11:58:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `code_ferifikasi` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `level` enum('user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`, `code_ferifikasi`, `active`, `waktu`, `level`) VALUES
(1, 'User1', 'User1@gmail.com', '6b908b785fdba05a6446347dae08d8c5', 0, 0, 0, '2020-12-27 04:42:41', 'user'),
(5, 'User2', 'User2@gmail.com', 'a09bccf2b2963982b34dc0e08d8b582a', 0, 0, 1, '2020-12-27 04:42:41', 'user'),
(6, 'User3', 'User3@gmail.com', 'e5d2ad241ec44cf155bc78ae8d11f715', 0, 0, 0, '2020-12-27 04:42:41', 'user'),
(7, 'User4', 'User4@gmail.com', '5ad55d96abf0e50647d6de116530d6df', 0, 0, 0, '2020-12-27 04:42:41', 'user'),
(60, 'User7', 'mraqwan471@gmail.com', '98cd5d17f0660baca7d652995f0d17b6', 0, 0, 1, '2021-01-01 06:59:20', 'user'),
(61, 'User5', 'atarjr06@gmail.com', '50c22602b70659dde2893f3a2ba0ab82', 0, 0, 0, '2021-01-01 08:33:57', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kapal`
--
ALTER TABLE `data_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pelabuhan`
--
ALTER TABLE `data_pelabuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiket_tersedia`
--
ALTER TABLE `tiket_tersedia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_berhasil`
--
ALTER TABLE `transaksi_berhasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kapal`
--
ALTER TABLE `data_kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_pelabuhan`
--
ALTER TABLE `data_pelabuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `massage`
--
ALTER TABLE `massage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tiket_tersedia`
--
ALTER TABLE `tiket_tersedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `transaksi_berhasil`
--
ALTER TABLE `transaksi_berhasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
