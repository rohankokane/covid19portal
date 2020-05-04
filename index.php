
<?php 
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'quizdb');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->
	<style>
		body{
			background-image: url(http://www.dypatil.edu/mumbai/rait/wp-content/themes/stack-theme/images/logo_bg.jpg);
			background-repeat: no-repeat;
			/* background-position: 50px; */
			background-size:90vmin;
			height: 100vh;
		}
		.form-group{
			margin-left: 20px;
			margin-right: 20px;
		}
		.card{
			box-shadow:#4e0000 1px 1px 10px;
			padding-bottom: 10px;
		}
		.btn{
			/* padding: 15px; */
			background-color: #9F1C33;
			color: white;
			padding: 16px 20px;
			border: none;
			cursor: pointer;
			margin-bottom: 10px;
			}
		.site-header{
			background-color:#f5f5f5; 
			padding: 15px;
			display: flex;
			flex-direction:row ; /*mobile friendly images size changes creating a flexbox*/
			justify-content: space-evenly;
			/* align-items: center; */
			}
		.container{
			/* height: 100vh; */
			}
		footer{
			background-color: #34393d; 
			color : #aaaaaa;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			/* height: 15vh; */
			padding: 15px;
			/* display: flex; */
			/* flex-direction: row; */
			/* justify-content: center; */
			/* align-items: center; */
			}
		#social-media{
			background-color: #9f1c33;
		}
			
	</style>

</head>
<body>

	<header class="site-header">
		<img src="http://www.dypatil.edu/mumbai/rait/wp-content/uploads/2020/04/logo-1-1-1.png">
		<!-- <div class="text-center"><h1>NSS-RAIT</h1></div> -->
		<img src="https://scontent.fbom3-2.fna.fbcdn.net/v/t31.0-1/c83.132.827.828a/p960x960/1272985_154214051453958_1704561013_o.png?_nc_cat=103&_nc_sid=dbb9e7&_nc_ohc=6hOrwZcgrtUAX9e-czv&_nc_ht=scontent.fbom3-2.fna&oh=0f2a6df324153af2f8704efb6ba627d5&oe=5ED6F714" height="90vh" width="90vh"> 
		<img src="hhttps://scontent.fbom3-2.fna.fbcdn.net/v/t1.0-9/21768343_1687172717991776_8162428222672887673_n.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=gYHfX3KKfwcAX8h2-Ol&_nc_ht=scontent.fbom3-2.fna&oh=4e5bce0416f5b282cb7420942f0695d9&oe=5ED582F5" height="90vh" width="90vh">
	</header>
	<div class="container">
		<h1 class="text-center"> Welcome to Quiz on CoronaVirus 2020 </h1>
		<h5 class="text-center">This is small initiative taken up by NSS - RAIT under the awareness campaign against CoronaVirus 2020!</h5><br>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center" style="background-color:#9f1c33; color: beige;"> Participant's Details </h4>
					<br>
					<form action="register.php" method="post">
						<div class="form-group">
							<label for="user"> Name: </label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="email" > Email id: </label>
							<input type="text" name="email" id="email" class="form-control" data-toggle="tooltip" title="You will receive the certificate via email">
						</div>
						<div class="form-group">
							<label for="contact"> Contact no: </label>
							<input type="text" name="contact" id="contact" class="form-control">
						</div>
						<div class="form-group">
							<label for="college name"> College name: (if student)</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="age"> Age: </label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Take the Quiz! </button>
					</form>
				
				</div>
			</div>
			
			<div class="col-lg-3"></div>
			<!-- 960x480 (480p); 1440x720 -->
		</div><br>
		<h3 class="text-center">We can win this war together!!</h3>
		<br>
	</div>
	<br>
	<br>

	<footer>
		<div class="row">
			<div class="col-6">
				WHO: 
				MOHW:
				emergency helpline no:
				PM cares:
				CM cares (Mahrashtra state):
			</div>
			<div class="col-6" id="social-media">
				<i class="fa-li fa fa-twitter"></i>
				insta:
				facebook:
				Youtube:
			</div>
		</div>	
	</footer>

</body>
</html>