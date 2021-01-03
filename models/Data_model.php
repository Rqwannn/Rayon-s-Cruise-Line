<?php

class Data_model{
    private $tabel = "data_pemesanan";
    private $tabel2 = "tiket_tersedia";
    private $tabel3 = "staff";
    private $tabel4 = "data_pelabuhan";
    private $tabel5 = "data_kapal";
    private $tabel6 = "user";
    private $tabel7 = "transaksi_berhasil";
    private $tabel8 = "massage";
    private $tabel9 = "newMassage";
    private $tabel10 = "token";
    private $db;

    public function __construct(){
        $this->db = new DataBase;
    }

    public function getAllTransaksi(){
        $this->db->query("SELECT * FROM " . $this->tabel . " WHERE confirmed = '1'");
        return $this->db->resultSet();
    }

    public function getAllMassgae(){
        $this->db->query("SELECT * FROM " . $this->tabel8);
        return $this->db->resultSet();
    }

    public function getAllNewMassgae(){
        $this->db->query("SELECT * FROM " . $this->tabel9);
        return $this->db->resultSet();
    }

    public function getAllTransaksiNumber(){
        $this->db->query("SELECT confirmed FROM " . $this->tabel . " WHERE confirmed = '1'");
        return $this->db->resultSet();
    }

    public function getAllTransaksiNumberTwo(){
        $this->db->query("SELECT confirmed FROM " . $this->tabel . " WHERE confirmed = '0'");
        return $this->db->resultSet();
    }

    public function getAllTransaksiNumberThree(){
        $this->db->query("SELECT * FROM " . $this->tabel . " WHERE confirmed = '0'");
        return $this->db->resultSet();
    }

    public function getAllPembeli(){
        $this->db->query("SELECT * FROM " . $this->tabel. " ORDER BY id DESC" );
        return $this->db->resultSet();
    }

    public function getDataEmailUser(){
        $this->db->query("SELECT * FROM email" );
        return $this->db->resultSet();
    }

    public function getAllBelumLunas(){
        $this->db->query("SELECT * FROM " . $this->tabel . " WHERE confirmed = '0'");
        return $this->db->resultSet();
    }

    public function getAllPembeliStaff(){
        $this->db->query("SELECT * FROM " . $this->tabel );
        return $this->db->resultSet();
    }

    public function getAllPembeliTiket(){
        $this->db->query("SELECT * FROM " . $this->tabel2 );
        return $this->db->resultSet();
    }

    public function getAllUser(){
        $this->db->query("SELECT * FROM " .$this->tabel6 );
        return $this->db->resultSet();
    }

    public function getDataPelabuhan(){
        $this->db->query("SELECT * FROM " .$this->tabel4 );
        return $this->db->resultSet();
    }

    public function getDataAllStaff(){
        $this->db->query("SELECT * FROM " .$this->tabel3 );
        return $this->db->resultSet();
    }

    public function getDataAllKapal(){
        $this->db->query("SELECT * FROM " .$this->tabel5);
        return $this->db->resultSet();
    }

    public function getAllUserBYSession($data){
        $this->db->query("SELECT * FROM " .$this->tabel6. " WHERE username = :username");
        $this->db->bind("username", $data);
        return $this->db->single();
    }

    public function getAllMenunggu(){
        $this->db->query("SELECT * FROM data_pemesanan GROUP BY id DESC");
        return $this->db->single();
    }

    public function getAllPembeliById($id){
        $this->db->query("SELECT * FROM " . $this->tabel . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function getAllPembeliById2($id){
        $this->db->query("SELECT * FROM " . $this->tabel6 . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function getToken($token, $id){
        $this->db->query("SELECT * FROM " . $this->tabel10 . " WHERE token=:token AND id_user = :id");
        $this->db->bind("token", $token);
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function aktipin($id){
        $this->db->query("UPDATE " . $this->tabel6 . " SET active = :active WHERE id=:id");
        $this->db->bind("id", $id);
        $this->db->bind("active", 1);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllTiketById($id){
        $this->db->query("SELECT * FROM " . $this->tabel2 . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function getAllStaffById($id){
        $this->db->query("SELECT * FROM " . $this->tabel3 . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function getAllPelabuhanById($id){
        $this->db->query("SELECT * FROM " . $this->tabel4 . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function getAllKapalById($id){
        $this->db->query("SELECT * FROM " . $this->tabel5 . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function SendEmailById(){
        $this->db->query("SELECT * FROM " . $this->tabel . " WHERE id");
        return $this->db->single();
    }

    public function tambahDataPembeli($data){
        $query = "INSERT INTO ".$this->tabel2." VALUES ('', :email, :berangkat, :tujuan, :tanggal)";
        $this->db->query($query);
        $this->db->bind("tiket", $data["tiket"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("tujuan", $data["tujuan"]);
        $this->db->bind("tanggal", $data["tanggal"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataPemesan($data){
        $query = "INSERT INTO ".$this->tabel. " VALUES('', :id_user, :id_tiket, 
        :no_pemesanan, :nama_kapal, :tiket, :berangkat, 
        :tujuan, :dewasa, :anak_anak, :tanggal, :total, :nama_pemesan, 
        :email_pemesan, :confirmed, :nik_visa)";
        $this->db->query($query);
        $this->db->bind("id_user", $data["id_user"]);
        $this->db->bind("id_tiket", $data["id_tiket"]);
        $this->db->bind("no_pemesanan",$data["no_pesananan"]);
        $this->db->bind("nama_kapal",$data["kapal"]);
        $this->db->bind("tiket",$data["tiket"]);
        $this->db->bind("berangkat",$data["berangkat"]);
        $this->db->bind("tujuan",$data["tujuan"]);
        $this->db->bind("dewasa",$data["dewasa"]);
        $this->db->bind("anak_anak",$data["anak"]);
        $this->db->bind("tanggal",$data["tanggal"]);
        $this->db->bind("total",$data["total"]);
        $this->db->bind("nama_pemesan",$data["nama"]);
        $this->db->bind("email_pemesan",$data["email"]);
        $this->db->bind("confirmed", $data["confirmed"]);
        $this->db->bind("nik_visa",$data["nik_visa"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataUser($data){
        $query = "INSERT INTO user VALUES ('', :username, :email, :password, :status, :code_ferifikasi, :active, :waktu ,:level)";
        $this->db->query($query);
        $this->db->bind("email", htmlspecialchars($data["email"]));
        $this->db->bind("username", htmlspecialchars($data["username"]));
        $this->db->bind("password", md5($data["password"]));
        $this->db->bind("level", htmlspecialchars($data["level"] = 'user'));
        $this->db->bind("code_ferifikasi", "");
        $this->db->bind("status", 0);
        $this->db->bind("active", 0);
        $this->db->bind("waktu", null);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataAdmin($data){
        $query = "INSERT INTO staff VALUES ('', :username, :email, :nama_depan, :nama_belakang, :password, :status ,:level)";
        $this->db->query($query);
        $this->db->bind("username", htmlspecialchars($data["username"]));
        $this->db->bind("email", htmlspecialchars($data["email"]));
        $this->db->bind("nama_depan", htmlspecialchars($data["nama_depan"]));
        $this->db->bind("nama_belakang", htmlspecialchars($data["nama_belakang"]));
        $this->db->bind("password", md5($data["password"]));
        $this->db->bind("level", htmlspecialchars($data["level"] = 'staff'));
        $this->db->bind("status", 0);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function TambahDataKapal($data){
        $query = "INSERT INTO data_kapal VALUES ('', :nama_kapal, :kelas_pelayaran)";
        $this->db->query($query);
        $this->db->bind("nama_kapal", $data["nama_kapal"]);
        $this->db->bind("kelas_pelayaran", $data["kelas_pelayaran"]);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function TambahDataPelabuhan($data){
        $query = "INSERT INTO data_pelabuhan VALUES ('', :pelabuhan_awal, :pelabuhan_akhir, :jml_hari)";
        $this->db->query($query);
        $this->db->bind("pelabuhan_awal", htmlspecialchars($data["pelabuhan_awal"]));
        $this->db->bind("pelabuhan_akhir", htmlspecialchars($data["pelabuhan_akhir"]));
        $this->db->bind("jml_hari", htmlspecialchars($data["jumlah_hari"]));
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPesanan($data){
        $query = "DELETE FROM " .$this->tabel. " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPelabuhan($data){
        $query = "DELETE FROM " .$this->tabel4. " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataStaff($data){
        $query = "DELETE FROM " .$this->tabel3. " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKapal($data){
        $query = "DELETE FROM data_kapal WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function CariDataPembeliTiket(){
        $keyword = $_POST["keyword"];
        $query = "SELECT * FROM tiket_tersedia WHERE nama_partner LIKE :keyword OR Kapal LIKE :keyword OR berangkat LIKE :keyword OR 
        tujuan LIKE :keyword OR tanggal LIKE :keyword OR tanggal_pulang LIKE :keyword OR total_hari LIKE :keyword OR harga LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

    public function CariDataAllPesanan(){
        $keyword = $_POST["keyword"];
        $query = "SELECT * FROM data_pemesanan WHERE no_pemesanan LIKE :keyword OR
        tiket LIKE :keyword OR nama_pemesan LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

    public function CariDataPelabuhan(){
        $keyword = $_POST["keyword"];
        $query = "SELECT * FROM data_pelabuhan WHERE pelabuhan_awal LIKE :keyword OR 
        pelabuhan_akhir LIKE :keyword OR jml_hari LIKE :keyword";
        $this->db->query($query);
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->resultSet();
    }

    public function CariDataAllStaff(){
        $keyword = $_POST["keyword"];
        $query = "SELECT * FROM staff WHERE email LIKE :keyword OR 
        nama_depan LIKE :keyword OR nama_belakang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->resultSet();
    }

    public function CariDataAllKapal(){
        $keyword = $_POST["keyword"];
        $query = "SELECT * FROM data_kapal WHERE nama_kapal LIKE :keyword OR 
        kelas_pelayaran LIKE :keyword";
        $this->db->query($query);
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->resultSet();
    }

    public function ubahDataKapal($data){
        $query = "UPDATE data_kapal SET nama_kapal = :nama_kapal, kelas_pelayaran = :kelas_pelayaran WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("nama_kapal", htmlspecialchars($data['ubah_nama_kapal']));
        $this->db->bind("kelas_pelayaran", htmlspecialchars($data['ubah_kelas_pelayaran']));
        $this->db->bind("id", $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataStaff($data){
        $query = "UPDATE staff SET username = :username, email = :email, nama_depan = :nama_depan, nama_belakang
        = :nama_belakang, password = :password, level = :level WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("username", htmlspecialchars($data["ubah_username"]));
        $this->db->bind("email", htmlspecialchars($data["ubah_email"]));
        $this->db->bind("nama_depan", htmlspecialchars($data["ubah_nama_depan"]));
        $this->db->bind("nama_belakang", htmlspecialchars($data["ubah_nama_belakang"]));
        $this->db->bind("password", md5($data["ubah_password"], PASSWORD_DEFAULT));
        $this->db->bind("level", htmlspecialchars($data["level"] = 'admin'));
        $this->db->bind("id", $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataPelabuhan($data){
        $query = "UPDATE data_pelabuhan SET pelabuhan_awal = :pelabuhan_awal, pelabuhan_akhir = :pelabuhan_akhir,
        jml_hari = :jml_hari WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("pelabuhan_awal", htmlspecialchars($data["ubah_pelabuhan_awal"]));
        $this->db->bind("pelabuhan_akhir", htmlspecialchars($data["ubah_pelabuhan_akhir"]));
        $this->db->bind("jml_hari", htmlspecialchars($data["ubah_jml_hari"]));
        $this->db->bind("id", $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataPemesanan($data){
        $query = " UPDATE data_pemesanan SET id_user = :id_user, id_tiket = :id_tiket ,no_pemesanan = :no_pemesanan, nama_kapal = :nama_kapal, tiket = :tiket,
         berangkat = :berangkat, tujuan = :tujuan, dewasa = :dewasa, anak_anak = :anak_anak, tanggal = :tanggal,
         total = :total, nama_pemesan = :nama_pemesan, email_pemesan = :email_pemesan, confirmed = :confirmed ,nik_visa = :nik_visa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id_user", $data["ubah_id_user"]);
        $this->db->bind("id_tiket", $data["ubah_id_tiket"]);
        $this->db->bind("nama_kapal", htmlspecialchars($data["ubah_nama_kapal"]));
        $this->db->bind("email_pemesan", htmlspecialchars($data["ubah_email_pemesan"]));
        $this->db->bind("nama_pemesan", htmlspecialchars($data["ubah_nama_pemesan"]));
        $this->db->bind("berangkat", htmlspecialchars($data["ubah_berangkat"]));
        $this->db->bind("tujuan", htmlspecialchars($data["ubah_tujuan"]));
        $this->db->bind("no_pemesanan", htmlspecialchars($data["ubah_no_pemesanan"]));
        $this->db->bind("dewasa", htmlspecialchars($data["ubah_dewasa"]));
        $this->db->bind("anak_anak", htmlspecialchars($data["ubah_anak_anak"]));
        $this->db->bind("tanggal", htmlspecialchars($data["ubah_tanggal"]));
        $this->db->bind("nik_visa", htmlspecialchars($data["ubah_nik_visa"]));
        $this->db->bind("total", htmlspecialchars($data["ubah_total"]));
        $this->db->bind("tiket", htmlspecialchars($data["ubah_tiket"]));
        $this->db->bind("confirmed", $data["ubah_confirmed"]);
        $this->db->bind("id", htmlspecialchars($data["id"]));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function konfirmasiDataPemesanan($data){
        $query = " UPDATE data_pemesanan SET id_user = :id_user, id_tiket = :id_tiket ,no_pemesanan = :no_pemesanan, nama_kapal = :nama_kapal, tiket = :tiket,
         berangkat = :berangkat, tujuan = :tujuan, dewasa = :dewasa, anak_anak = :anak_anak, tanggal = :tanggal,
         total = :total, nama_pemesan = :nama_pemesan, email_pemesan = :email_pemesan, confirmed = :confirmed ,nik_visa = :nik_visa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id_user", $data["id_user"]);
        $this->db->bind("id_tiket", $data["id_tiket"]);
        $this->db->bind("nama_kapal", htmlspecialchars($data["nama_kapal"]));
        $this->db->bind("email_pemesan", htmlspecialchars($data["email_pemesan"]));
        $this->db->bind("nama_pemesan", htmlspecialchars($data["nama_pemesan"]));
        $this->db->bind("berangkat", htmlspecialchars($data["berangkat"]));
        $this->db->bind("tujuan", htmlspecialchars($data["tujuan"]));
        $this->db->bind("no_pemesanan", htmlspecialchars($data["no_pemesanan"]));
        $this->db->bind("dewasa", htmlspecialchars($data["dewasa"]));
        $this->db->bind("anak_anak", htmlspecialchars($data["anak_anak"]));
        $this->db->bind("tanggal", htmlspecialchars($data["tanggal"]));
        $this->db->bind("nik_visa", htmlspecialchars($data["nik_visa"]));
        $this->db->bind("total", htmlspecialchars($data["total"]));
        $this->db->bind("tiket", htmlspecialchars($data["tiket"]));
        $this->db->bind("confirmed", $data["confirmed"]);
        $this->db->bind("id", htmlspecialchars($data["id"]));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function konfirmasiPemesanan($data){
       $query = " UPDATE data_pemesanan SET total = :total, confirmed = :confirmed WHERE id=:id";
       $this->db->query($query);
       $this->db->bind("total", $data["total-harga"]);
       $this->db->bind("id", intval($data["id_harga"]));
       $this->db->bind("confirmed", 1);

       $this->db->execute();
       return $this->db->rowCount();
    }

    public function LogoutUser($data){
        $query = " UPDATE user SET status = :status WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);
        $this->db->bind("status", 0);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function LogoutStaff($data){
        $query = " UPDATE staff SET status = :status WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);
        $this->db->bind("status", 0);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function VerifikasiEmail($data){        
        $query = "UPDATE user SET code_ferifikasi = :code , waktu = :waktu WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data["Id"]);
        $this->db->bind("code", $data["Code"]);
        $this->db->bind("waktu", null);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function UpdatePassword($data){
        $query = "UPDATE user SET password = :password , code_ferifikasi = :code WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data["Id"]);
        $this->db->bind("code", $data["Code"]);
        $this->db->bind("password", $data["Password"]);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function setDefaulCode($data){
        $query = "UPDATE user SET code_ferifikasi = :code WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data);
        $this->db->bind("code", 0);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariPakeEmail($email){
        $query = "SELECT id FROM user WHERE email = :email";
        $this->db->query($query);
        $this->db->bind("email", $email);

        $this->db->execute();
        return $this->db->resultSet();
    }

    public function insertToken($data){
        $query = "INSERT INTO token VALUES ('', :id_user, :token, :waktu_dibuat)";
        $this->db->query($query);
        $this->db->bind("id_user", $data["id"]);
        $this->db->bind("token", $data["token"]);
        $this->db->bind("waktu_dibuat", null);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusToken($data){
        $query = "DELETE FROM token WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind("id_user", $data);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
