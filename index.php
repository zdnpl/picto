<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>photto</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto&display=swap');

		body {
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
			font-family: 'Poppins', sans-serif;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;	
			margin-bottom: 20%;
		}
		.alb img {
			width: 100%;
			height: 100%;
			border-radius: 10px;
		}
		a {
			text-decoration: none;
			color: white;
		}
		.caption{
			color: #000;
		}
		.bottom-nav {
			font-weight: bold;
			color: #333;
			font-size: 30px;
			display: block;
			margin: auto;
			padding: -0px 1px;
			background: #fff;
		}
		.bottom-nav:hover{
			color: #333;
		}
		/* .upload-button {
			margin-left: 15px;
		} */
	</style>
</head>
<body class="" style="background: #FAFAFA">
	<div class="container" style="max-width: 450px; background: #fff; border: solid 1px #ccc; min-height: 100vh">
	<nav class="container navbar navbar-light fixed-top" style="max-width: 450px; background: #fff; border: solid 1px #ccc;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">photto</a>
		</div>
	</nav>
	<div class="space" style="margin-bottom: 55px"></div>
<div class="row">
			<?php 
				$sql = "SELECT * FROM images ORDER BY id DESC";
				$res = mysqli_query($conn,  $sql);

				if (mysqli_num_rows($res) > 0) {
					while ($images = mysqli_fetch_assoc($res)) {  ?>
					
					<a class="col-6" href="uploads/<?=$images['image_url']?>">
					<div class="alb">
						<img src="uploads/<?=$images['image_url']?>">
						<p class="caption"><?php echo $images['caption']; ?></p>
					</div>
					</a>
			<?php } }?>
	</div>
	<div class="d-flex justify-content-center">
  <div class="spinner-border mt-3" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
	<div class="space text-center" style="padding: 10px 0px 70px 0px; background: #fff">this is the end brou | @zidanaupal</div>
</div>
<nav class="container navbar navbar-expand-lg navbar-light fixed-bottom" style="max-width: 450px; background: #fff; border: solid 1px #ccc;	">
  <div class="container-fluid">
    <div class="nav row justify-content-between" id="navbarNav">
		<a class="bottom-nav col-4 upload-button" href="post.php"><i class="bi bi-plus-circle"></i></a>
    </div>
  </div>
</nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>