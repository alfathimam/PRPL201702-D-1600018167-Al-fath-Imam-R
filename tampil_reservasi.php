<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>
	<h1>Daftar Customer</h1>
	<form action="tampil_reservasi.php" method="POST">
		<label for="filter">Filter : </label>
		<br>
		<label for="from">From</label>
		<input type="date" name="from">
		<br>
		<label for="to">To</label>
		<input type="date" name="to">
		<br>
		<button type="submit">Filter</button>
	</form>
	<table border='1' cellpadding="10" cellspacing="0">
		<tr>
			<!-- <th>No.</th> -->
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>No Telp</th>
			<th>Email</th>
			<th>Kamar</th>
			<th>Tgl Masuk</th>
			<th>Tgl Keluar</th>
		</tr>

		<?php
			$host = "localhost";
			$username = "root";
			$password = "";
			$db_name = "myhotel";

			$konek = new mysqli ($host, $username, $password, $db_name);
               $from = (isset($_POST['from']) ? $_POST['from'] : '');
            $to = (isset($_POST['to']) ? $_POST['to'] : ''); 

            if(!$from == null && !$to == null){
                    $result = $konek->query("SELECT * FROM reservasi where tglmasuk 
                    	between '".$_POST['from']."' 
                    	AND  '".$_POST['to']."' 
                    	ORDER by namadepan ASC");
                    while ($row = mysqli_fetch_assoc($result)):

                    echo '<tr>';
                    echo '<td>'.$row['namadepan'].'</td>';
                    echo '<td>'.$row['namabelakang'].'</td>';
                    echo '<td>'.$row['notelp'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['kamar'].'</td>';
                    echo '<td>'.$row['tglmasuk'].'</td>';
                    echo '<td>'.$row['tglkeluar'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $konek->query("SELECT * FROM reservasi");

                  while ($row = mysqli_fetch_assoc($result)):

                  echo '<tr>';
                  echo '<td>'.$row['namadepan'].'</td>';
                  echo '<td>'.$row['namabelakang'].'</td>';
                  echo '<td>'.$row['notelp'].'</td>';
                  echo '<td>'.$row['email'].'</td>';
                  echo '<td>'.$row['kamar'].'</td>';
                  echo '<td>'.$row['tglmasuk'].'</td>';
                  echo '<td>'.$row['tglkeluar'].'</td>';
                  echo '</tr>';

                endwhile;
                }
                /* free result set */
                $result->close();
                
		?>
		</center>
		
		</table>

</tbody>
</table>
<center>
<P><SCRIPT language="JavaScript">
<!--
//window.onload = function(){}
function jumlah_hari(){
    var bil1 = parseFloat(document.fform.cekin.value);
    if (isNaN (bil1))
    bil1=0.0;
    var bil2 = parseFloat(document.fform.cekout.value);
    if (isNaN (bil2))
    bil2=0.0;
    var hasil = bil2 - bil1;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lamanya hari penginapan : " + hasil +"hari</center>");
}
function harga(){
    var bil3 = parseFloat(document.fform.apa.value);
    if (isNaN (bil3))
    bil3=0.0;
    var bil1 = parseFloat(document.fform.cekin.value);
    if (isNaN (bil1))
    bil1=0.0;
    var bil2 = parseFloat(document.fform.cekout.value);
    if (isNaN (bil2))
    bil2=0.0;
    var hasil = bil2 - bil1;
    var harga = hasil * bil3;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lamanya hari penginapan : " + hasil +" hari</center>");
    document.write("<center>total jumlah harga :Rp. "+ harga +"</center>");
}
function denda(){
    var bil5 = parseFloat(document.fform.opo.value);
    if (isNaN (bil5))
    bil5=0.0;
    var bil1 = parseFloat(document.fform.cekin.value);
    if (isNaN (bil1))
    bil1=0.0;
    var bil2 = parseFloat(document.fform.cekout.value);
    if (isNaN (bil2))
    bil2=0.0;
    var hasil = bil2 - bil1;
    var den = bil5 * hasil;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lama Denda : " + hasil +" hari</center>");
    document.write("<center>total nominal denda :Rp. "+ den +"</center>");
}
function total() {
    var bil5 = parseFloat(document.fform.opo.value);
    if (isNaN (bil5))
    bil5=0.0;
    var b1 = parseFloat(document.fform.cekin.value);
    if (isNaN (b1))
    b1=0.0;
    var b2 = parseFloat(document.fform.cekout.value);
    if (isNaN (b2))
    bil2=0.0;
     var bil3 = parseFloat(document.fform.apa.value);
    if (isNaN (bil3))
    bil3=0.0;  
    var hasil = b2 - b1;
    var den = bil5 * hasil;
    var harga = hasil * bil3;
    var totalbayar = harga + den;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lamanya hari penginapan :"+ hasil +"hari</center>");
    document.write("<center>Total Jumlah Harga : Rp. "+ harga +"</center>");  
    document.write("<center>Total nominal denda : Rp. "+ den +"</center>");
    document.write("<center>Jumlah Total Pembayaran + denda: Rp. "+ totalbayar +"</center>");
       
}
--></SCRIPT></P></center>
<center><h1>form transaksi</h1></center>
<hr>
<FORM NAME ="fform">
<PRE>
<font color="black">Tanggal Masuk  :<input type="text" size="11" name="cekin"></font></br>
<font color="black">Tanggal Keluar :<input type="text" size="11" name="cekout"></font></br>
<table border ='1'>
	<tr><td><center>harga kamar</center></td></tr>
    <tr><td><pre><center>Deluxe : Rp 297.000 per/hari</br>Junior Suite : Rp 365.000 per/hari</br>Regency Suite  : Rp 425.000 per/hari</br>Executive Suite : Rp 785.000 per/hari</br>Executive Suite : Rp 785.000 per/hari</br>Presidential Suite : Rp 1.350.000 per/hari</center></pre></td></tr>
</table>
<font color="black">harga kamar       :<input type="text" size="11" name="apa"></font></br>
<font color="black">nominal denda     :<input type="text" size="11" name="opo" placeholder="jika ada"></font>
</PRE>
<INPUT TYPE="button" value="Lama Menginap" onclick="jumlah_hari()">
<INPUT TYPE="button" value="Harga" onclick="harga()">
<INPUT TYPE="button" value="Total Denda" onclick="denda()">
<INPUT TYPE="button" value="Pembayaran Keseluruhan" onclick="total()">
<INPUT TYPE="reset" value="Ulang"><br/><br/>
</form>
</body>
		

	<h1>Chart Penggunaan Kamar</h1>
	
	<div id="piechart"></div>


	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<script type="text/javascript">
	// Load google charts
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	// Draw the chart and set the chart values
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
	  ['Room', 'Total'],
	  ['Executive Suite', 3],
	  ['Junior Suite', 2],
	  ['Presidential Suite', 1],
	  ['Regency Suite', 1],
	  ['Deluxe', 1]
	]);

	  // Optional; add a title and set the width and height of the chart
	  var options = {'title':'Room Chart', 'width':550, 'height':400};

	  // Display the chart inside the <div> element with id="piechart"
	  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	  chart.draw(data, options);
	}
</script>
</body>
</html>
