<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Extranet - BeCentral</title>
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<?php include 'parts/header.php'; ?>
	<div class="container-fluid">
		<?php 
		if(isset($_GET['template']) && $_GET['template'] == "salle") {
			include 'salle.php';
		} else {
			include 'home.php';
		}
			
		?>
	</div>
	<?php include 'parts/footer.php'; ?>
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
</body>
</html>