<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Extranet - BeCentral</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include 'parts/header.php'; ?>
	<div class="container-fluid">
		<?php include 'parts/carousel.php';?>
		<main class="container">
			<?php include 'parts/rooms-list.php'; ?>
			<?php include 'parts/location.php'; ?>
			<?php include 'parts/action.php'; ?>
			<?php include 'parts/contact.php'; ?>
		</main>
	</div>
	<?php include 'parts/footer.php'; ?>
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
</body>
</html>