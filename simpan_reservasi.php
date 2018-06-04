<?php 

//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "myhotel";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if ($konek->connect_error) {
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$namadepan = $_POST ['namadepan'];
$namabelakang = $_POST ['namabelakang'];
$notelp = $_POST ['notelp'];
$email = $_POST ['email'];
$kamar = $_POST ['kamar'];
$tglmasuk = $_POST ['tglmasuk'];
$tglkeluar = $_POST ['tglkeluar'];

$sql = "INSERT INTO reservasi(namadepan, namabelakang, notelp, email, kamar, tglmasuk, tglkeluar) VALUES ('$namadepan', '$namabelakang', '$notelp', '$email', '$kamar', '$tglmasuk', '$tglkeluar')";
if ($konek->query($sql)) {
	echo "Data Reservasi Berhasil Di Tambah ! <br/>";
}
else {
	echo "Data Reservasi Gagal Di Tambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href = 'index.html'>Kembali Ke Home<a/>";
echo "<a href = 'tampil_reservasi.php'>Tampil Data Reservasi<a/>";

?>