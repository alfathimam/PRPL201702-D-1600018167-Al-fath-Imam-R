<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "myhotel";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek kneksi
if ($konek->connect_error) {
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nama = $_POST ['nama'];
$email = $_POST ['email'];
$komen = $_POST ['komen'];

$sql = "INSERT INTO komentar(nama, email, komen) VALUES ('$nama', '$email', '$komen')";

if ($konek->query($sql)) {
	echo "Komentar berhasil di kirim ! <br>";
}
else{
	echo "Komentar gagal di kirim".$konek->error."<br>";
}

$konek->close();
echo "<a href = 'index.html'>Kembali Ke Home<a/>";

?>