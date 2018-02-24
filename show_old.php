<!DOCTYPE html>
<html>
<head>
	<title>VITACODE</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body style="background-color: white !important;">

	<div class="container">
		<div class="row justify-content-around">
			<div id="construye">
				<img src="../img/logo_clear_500.jpg" class="img-fluid">
				<h2 style="color: black;">En esta página se mostrarán los datos de este ID</h2>
				<h1>
					<?php echo $_GET['id']; ?>
				</h1>
			</div>
		</div>
	</div>

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>



