<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservasi</title>
	<link rel="stylesheet" href="reservation.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">My Hotel</h1>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="reservation.php">Reservation</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
		</div>

		<div class="hero"></div>

		<div class="reservasi">
			<h1>YOUR <b>CONTACT DETAILS</b></h1>

			<form action="simpan_reservasi.php" method="post">
				<table>
					<tr>
						<td>
							<label for="namadepan">Nama Depan</label><br>
							<input type="text" name="namadepan" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="namabelakang">Nama Belakang</label><br>
							<input type="text" name="namabelakang" required><br>
						</td>
					</tr>
					<tr>
						<td>
							<label for="notelp">No Telpon</label><br>
							<input type="number" name="notelp" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="email">Email</label><br>
							<input type="text" name="email" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="kamar">Tipe Kamar</label><br>
							<select name="kamar">
								<option selected>Choose...</option>
								<option value="deluxe">Deluxe</option>
								<option value="jrsuite">Junior Suite</option>
								<option value="rgsuite">Regency Suite</option>
								<option value="exsuite">Executive Suite</option>
								<option value="prsuite">Presidential Suite</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="tglmasuk">Tanggal Masuk</label><br>
							<input type="date" name="tglmasuk">
						</td>
					</tr>
						<td>
							<label for="tglkeluar">Tanggal Keluar</label><br>
							<input type="date" name="tglkeluar">
						</td>
					</tr> -->
					<tr>
						<td><button type="submit" value="Submit">Kirim!</button></td>
					</tr>			
				</table>
				
			</form>
		</div>
		
		<div class="footer">
			<p class="copy">Copyright ©2018 My Hotel Bali Beach</p>
		</div>
	</div>
</body>
</html>