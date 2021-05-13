
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game Over</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php
	session_start();
	include_once("koneksi.php");
	$nama  = $_SESSION['nama'];
	$lives = $_SESSION['lives'];
	$score = $_SESSION['score'];
	$email = $_SESSION['email'];
	?>
	<center>
		<h3>Hello <?php echo $_SESSION['nama'];?>, sayang permainan sudah selesai.</h3>
		<h3>Semoga lain kali bisa lebih baik.</h3>
		<h3>Score akhir Anda adalah <?php echo $_SESSION['score'];?></h3>
		<button><a href="index.php">Main Lagi</a></button>
		<h3>Hall of Fame
			<table width="auto" border="2">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Score</th>
				</tr>
				<?php
				$db = mysqli_query($konek, "SELECT * FROM mathgame ORDER BY Score DESC limit 10");
				$no = 0;
				while ($data = mysqli_fetch_array($db)) {
					$no += 1;
					echo "<tr>";
					echo "<td>$no</td>";
					echo "<td>".$data['Nama']."</td>";
					echo "<td>".$data['Score']."</td></tr>";}
				$db = mysqli_query($konek, "INSERT INTO mathgame(Nama,Email,Score) VALUES ('$nama', '$email', '$score')");
				?>
			</h3>
		</table>
	</center>
</body>
</html>
