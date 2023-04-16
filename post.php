<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>photto | Post</title>
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
		.caption-input {
			width: 100%;
			padding: 15px 0px 100px 20px;
			text-align: left;
			border: none;
			outline: none;
		}
		.post-btn {
			outline: none;
			border: none;
			background: #fff;
			font-size: 20px;
		}
		.custom-file-input::-webkit-file-upload-button {
			visibility: hidden;
			}
		.custom-file-input::before {
			content: 'Choose image';
			display: inline-block;
			background: linear-gradient(top, #f9f9f9, #e3e3e3);
			border: 1px solid #999;
			border-radius: 3px;
			padding: 10px 160px;
			outline: none;
			white-space: nowrap;
			-webkit-user-select: none;
			cursor: pointer;
			text-shadow: 1px 1px #fff;
			font-size: 10pt;
			margin-bottom: 20px;
			}
		.custom-file-input:hover::before {
			/* border-color: black; */
			}
		.custom-file-input:active::before {
			background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
			}
	</style>
</head>
<body class="" style="background: #FAFAFA">
<form action="upload.php"
           method="POST"
           enctype="multipart/form-data">
	<div class="container" style="max-width: 450px; background: #fff; border: solid 1px #ccc;">
	<nav class="container navbar navbar-light fixed-top" style="max-width: 450px; background: #fff; border: solid 1px #ccc;">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><i class="bi bi-arrow-left" style="margin-right: 10px;"></i>New Post</a>

			<button type="submit" 
				  class="post-btn"
                  name="submit"><i class="bi bi-check-lg" ></i></button>
		</div>
	</nav>
	<div class="space" style="margin-bottom: 55px"></div>
<div class="row">
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     

			<input type="text"
				  name="caption"
				  class="caption-input"
				  placeholder="Write a caption..."
				  autocomplete="off">
				  
			 <input type="file" 
			 	  class="custom-file-input"
                  name="my_image">
     	
     </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>