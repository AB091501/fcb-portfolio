<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GALLERY DEVELOPMENT | Main Page</title>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Bootstrap Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<style type="text/css">
		.admin {
			position: absolute;
			width: 156px;
			height: 36px;
			left: 8px;
			top: 10px;
			border-radius: 10px;
			border: 2px solid dimgray;

			font-family: 'Asul';
			font-style: normal;
			font-weight: 600;
			font-size: 24px;
			line-height: 29px;
			text-align: center;

			color: #000000;
		}
		
		.lang {
			position: absolute;
			right: 0;
			top: 10px;
			background: #D9D9D9;
			width: 210px;
			height: 31px;
			margin-right: 10px;

		}

		.circle{
			position: absolute;
			width: 143px;
			height: 140px;
			/*left: 648px;*/
			/*top: 54px;*/
			background: url(logo1.png);
		}

		.photo {
			position: absolute;
			width: 565px;
			height: 74px;
			left: -190px;
			top: 150px;

			font-family: 'Asul';
			font-style: normal;
			font-weight: 700;
			font-size: 64px;
			line-height: 78px;
			text-align: center;

			color: #000000;
		}

		.container {
		    display: flex;
		    justify-content: center;
		    height: 100vh; /* Set container height to full viewport height */
		}

		.centered-element {
		    position: absolute;
		    top: 10;
		    left: 50%;
		    transform: translate(-50%);
		}

		.box {
			position: absolute;
			width: 100%; 
			height: 731px; 
			left: 0px;
			top: 293px;

			background: #EFEFEF;
		}

		.box1 {
			position: absolute;
			transform: scale(1);
			width: 513px;
			height: 170px;
			left: 0;
			border: 2px solid dimgray;
			border-bottom: 5px solid dimgray;
			font-family: 'Inter';
			font-style: normal;
			font-weight: 700;
			font-size: 32px;
			line-height: 39px;
			margin-left: 150px;

			background: #FFFFFF;
		}

		.box2 {
			position: absolute;
			transform: scale(1);
			width: 513px;
			height: 170px;
			right: 0;
			border: 2px solid dimgray;
			border-bottom: 5px solid dimgray;
			font-family: 'Inter';
			font-style: normal;
			font-weight: 700;
			font-size: 32px;
			line-height: 39px;
			margin-right: 150px;

			background: #FFFFFF;
		}

		.box1:hover, .box2:hover, .admin:hover {
			background-color: #BDBDBD;
		}
	</style>

</head>
<body style="height: 100%;" class="container-md d-flex flex-column my-5">
	<div>
		<a href="#"><button class="admin">Admin</button></a>
		<div class="col-2 align-self-end mx-0">
			<div class="lang">
				<select name="dropdown" class="form-select" required>
					<option value="" hidden>- Select language -</option>
					<option value="name">English</option>
					<option value="course">Deutsch</option>
					<option value="year">German</option>
					<option value="number">Hangul</option>
				</select>
			</div>
		</div>
	<div class="centered-element container">
		<div class="circle">
			<h2 class="photo">PHOTO GALLERY</h2>
		</div>
	</div>
	<div class="container">
		<div class="box">
    		<a href="#"><button style="top: 157px;" class="box1">JEWELRY AND ORNAMENTS</button></a>
    		<a href="#"><button style="top: 457px;" class="box1">COLLECTION MANAGEMENT</button></a>
    		<a href="#"><button style="top: 157px;" class="box2">CLOTHING REGISTRATION</button></a>
    		<a href="#"><button style="top: 457px;" class="box2">PHOTO ARCHIVE</button></a>
    	</div>
	</div>
   
	<!-- Bootstrap Script -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>