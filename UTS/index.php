
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game Penjumlahan</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php
	session_start();
	$_SESSION['score'] = 0;
	$_SESSION['lives'] = 5;
	?>
	<?php
	if (isset($_SESSION['email'])) {
		?>
		<center>
			<h3>Hello <?php echo $_SESSION['nama'];?>, selamat datang kembali di permainan ini !!! <a href="game.php"><br>[Start Game]</a></h3>
			<h4>Bukan anda? <a href="session.php"><br>(klik di sini)</a></h4>
		</center>
		<?php
		}
		else {
			?>
			<center>
				<h2>Silakan Isi Form</h2>
				<form action="game.php" method="post">
					<table>
						<tr>
							<td>Masukkan Nama</td>
							<td><input type="text" name="nama" required></td>
						</tr>
						<tr>
							<td>Masukkan Email</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td><input type="submit" name="start" value="Submit"></td>
						</tr>
					</table>
				</form>
			</center>
				<?php
			}
			?> 
</body>
</html>
