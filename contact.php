<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link rel="stylesheet" href="contact.css">
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

		<div class="content">
			<h1 class="judul">Contact Us</h1>
			<div class="sub">.......where the charms are welcoming you.........</div>
			<p>we will be more than just welcome for any of your inquiries, please contact us</p>
			<div class="subsub">MY HOTEL BALI BEACH</div>
			<p>Jln. Hang Tuah, Sanur Bali P.O.Box 3275 Denpasar 80227 Bali Indonesia</p>
			<p>Phone : +62-361-288511</p>
			<p>Fax : +62-361-287917</p>
			<p>Email : sales@grandinnabalibeach.com</p>

			<div class="form">
				<form action="simpankomen.php" method="POST">
					<table>
						<tr>
							<td>
								<label for="nama">Name</label>
							</td>
							<td>
								<input type="text" name="nama" required>
							</td>
						</tr>
						<tr>
							<td>
								<label for="email">Email</label>
							</td>
							<td>
								<input type="email" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<label for="komen">Comment</label>
							</td>
							<td>
								<textarea name="komen" ></textarea>
							</td>
						</tr>
						<tr>
							<!-- <td>
								
							</td> -->
							<td>
								<button class="submit" type="submit" value="submit">Submit</button>
								<!-- <button type="reset" value="reset">Reset</button> -->
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>

		<div class="footer">
			<p class="copy">Copyright ©2018 My Hotel Bali Beach</p>
		</div>
	</div>
</body>
</html>

