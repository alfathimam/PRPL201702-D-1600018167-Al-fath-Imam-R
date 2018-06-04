<?php 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "myhotel";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM komentar";
$data = $konek->query($sql);

echo "<h1>Data Contact</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>Nama</td><td>Email</td><td>Komentar</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['komen']."</td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>