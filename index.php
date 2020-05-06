
<?php 
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'quizdb');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->
	<style>
		body{
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
			/* height: 15vh; */
			padding: 10px;
			display: flex;
			flex-direction:row ; /*mobile friendly images size changes creating a flexbox*/
			justify-content: space-evenly;
			/* align-items: center; */
			}
		.container{
			
			background-image: url(http://www.dypatil.edu/mumbai/rait/wp-content/themes/stack-theme/images/logo_bg.jpg);
			background-repeat: no-repeat;
			/* background-position: 50px; */
			background-size:contain;	
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
		/* img{
			height:min-content;
		} */
			
	</style>

</head>
<body>

	<header class="site-header">
		<img src="http://www.dypatil.edu/mumbai/rait/wp-content/uploads/2020/04/logo-1-1-1.png" width="240vh">
		<!-- <div class="text-center"><h1>NSS-RAIT</h1></div> -->
		<img src="http://localhost/quiz/images/sow.png" width="90vh" style="margin-left:25px">
		<div></div>
		<img src="http://localhost/quiz/images/nss_logo.png" width="90vh">
	</header>
	<div class="container">
		<h1 class="text-center"> Welcome to Quiz on CoronaVirus 2020 </h1>
		<h5 class="text-center">This is small initiative taken up by NSS-RAIT under the awareness campaign against Covid-19</h5><br>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center" style="background-color:#9f1c33; color: beige;"> Participant's Details </h4>
					<br>
					<form action="register.php" method="post">
						<div class="form-group">
							<label for="name"> Name: </label>
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="email" > Email id: </label>
							<input type="email" name="email" id="email" class="form-control" data-toggle="tooltip" title="You will receive the certificate via email" required>
						</div>
						<div class="form-group">
							<label for="contact"> Contact no: </label>
							<input type="tel" name="contact" id="contact" class="form-control" autocorrect=off pattern="[6-9]{1}[0-9]{9}" >
						</div>
						<div class="form-group">
							<label for="clgname"> College name: (if student)</label>
							<input type="text" name="clgname" id="clgname" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="age"> Age: </label>
							<input type="text" name="age" id="age" class="form-control" name="quantity" min="1" max="90">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Start </button>
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