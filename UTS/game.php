
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Game Penjumlahan</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php
	session_start();
	$bil1 = rand(0,20);
	$bil2 = rand(0,20);

	if (isset($_SESSION['nama'])) {
	} 
	else{
		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['email'] = $_POST['email'];
	}
	$lives = $_SESSION['lives'];
	$score = $_SESSION['score'];

	if ($lives == 0) {
		header('Location: gameover.php');
	}
	else {
		$_SESSION['hasil'] = $bil1 + $bil2;
	}
	?>

	<center>
		<form action="hasil.php" method="post">
			<h3>Hello <?php echo $_SESSION['nama'];?>, semangat ya… you can do the best !!!</h3>
			<h3>Berapakah <?php echo $bil1; echo " + "; echo $bil2.", Masukkan jawaban Anda"; ?></h3>
			<input type="number" name="jawab" required=""><br>
			<button type="submit" name="submit">Jawab</button>
			<h4>Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score']; ?></h4>
		</form>
	</center>

</body>
</html>
