<!-- <SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
</HEAD>
<BODY onload="noBack();" 
    onpageshow="if (event.persisted) noBack();"> -->
<?php 
session_start();
	$conn = mysqli_connect('localhost','root');
	mysqli_select_db($conn,'quizdb');
?>
<?php
	$message = "";

    if (isset($_POST["submit_post"]) || isset($_POST["submit_image"]) )
    {	
		$name = $_SESSION['username'];
		$email = $_SESSION['email'];
		if (isset($_POST["submit_post"])){
				$sql5 = "SELECT `puser_id` FROM `postuser` WHERE `email` = '$email' ";
				$res = mysqli_query($conn, $sql5);
				if (mysqli_num_rows($res) > 0) {
					// output data of each row
						while($row = mysqli_fetch_assoc($res)) {
						$puser_id = $row["puser_id"];
						}
				} else {	
					echo "ERROR NO ID found";
				}
				$title = mysqli_real_escape_string($conn, $_POST["title"]);
				$description = mysqli_real_escape_string($conn, $_POST["description"]);
		
				$title = htmlentities($title);
				$description = htmlentities($description);
		
				$total_image = count($_FILES["image"]["tmp_name"]);
				for ($a = 0; $a < $total_image; $a++)
				{
					$tmp_name = $_FILES["image"]["tmp_name"][$a];
					$file_name = $_FILES["image"]["name"][$a];
					$file_path = "uploads/" . $file_name;
						
					$sql = "INSERT INTO images(title, description, path,puser_id) VALUES('$title', '$description', '" . $file_name . "','$puser_id')";
					mysqli_query($conn, $sql);
					move_uploaded_file($tmp_name, $file_path);
				}
				$message = "Post has been uploaded";
			}
			else{
				$sql5 = "SELECT `user_id` FROM `user` WHERE `email` = '$email' ";
				$res = mysqli_query($conn, $sql5);
				if (mysqli_num_rows($res) > 0) {
					// output data of each row
						while($row = mysqli_fetch_assoc($res)) {
						$user_id = $row["user_id"];
						}
				} else {	
					echo "ERROR NO ID found";
				}
				$title = mysqli_real_escape_string($conn, $_POST["title"]);
				$description = mysqli_real_escape_string($conn, $_POST["description"]);
		
				$title = htmlentities($title);
				$description = htmlentities($description);
		
				$total_image = count($_FILES["image"]["tmp_name"]);
				for ($a = 0; $a < $total_image; $a++)
				{
					$tmp_name = $_FILES["image"]["tmp_name"][$a];
					$file_name = $_FILES["image"]["name"][$a];
					$file_path = "uploads/" . $file_name;
						
					$sql = "INSERT INTO images(title, description, path,user_id) VALUES('$title', '$description', '" . $file_name . "','$user_id')";
					mysqli_query($conn, $sql);
					move_uploaded_file($tmp_name, $file_path);
				}
				$message = "Post has been uploaded";
			}



	}
	
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>NSS-RAIT</title>
	<!-- button -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<!-- image Gallery -->
		<link rel="stylesheet" href="assets/default.css" />
		<link rel="stylesheet" href="assets/component.css" />
		<script src="assets/modernizr.custom.js"></script>
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
		@import "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css";

		body{
			background-color: #ffffff;
			/* height: 100vh; */
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
		
		.cont{
			display: flex;
			flex-direction: column;
			/* justify-content: space-evenly; */
			/* height: 100vh; */	
		}
		.bg{
			background-image: url(http://www.dypatil.edu/mumbai/rait/wp-content/themes/stack-theme/images/logo_bg.jpg);
			background-repeat: no-repeat;
			/* background-position: 50px; */
			/* background-size:unset; */
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

		.btnn{
		display: flex;
        flex-direction: row;
        justify-content:center;
		align-content: center;
		/* background-image: -webkit-linear-gradient(); */
        /* background-image: -webkit-linear-gradient(left, #39ade7, #2079b0); */
        /* background-color: #44c0fe; */
        padding: 10px 10px;
        /* font-family: sans-serif, Arial; */
        font-size: 16px;
        color:rgb(249, 252, 255);
        
		border-radius: 20px;
		/* background-image: -webkit-linear-gradient(le)0; */
		transition: all 0.5s;
		}
		#btnq{
			background-image: -webkit-linear-gradient(left, #2ecc55, #20b06d);
			border: 1px solid #20b16c;
			/* -webkit-box-shadow: 6px 5px 24px #666666;  */
		}
		/* #btnp{
			background-image: -webkit-linear-gradient(left, #2e92cc, #294e7e);
			border: 1px solid #295182;
		} */
        /* .btnn{
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        background-image: -webkit-linear-gradient(left, #2ecc55, #20b06d);
        border-radius: 20px;
        } */
        #btnn:active{
            transform: translateY(4px);
		}
		#buttons{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
        justify-content:space-evenly;
		}
	.btn {
    border: none;
    font-family: 'Lato';
    font-size: inherit;
    color: inherit;
    background: none;
    cursor: pointer;
    padding: 10px 80px;
	display: flex;
	flex-direction: row;
	justify-content: space-evenly;
	align-content: center;
    margin: 15px 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
}

.btn:after {
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
}

/* Pseudo elements for icons */
.btn:before {
    font-family: 'FontAwesome';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    position: relative;
    -webkit-font-smoothing: antialiased;
}


/* Icon separator */
.btn-sep {
    padding: 25px 60px 25px 60px;
}

.btn-sep:before {
    background: rgba(0,0,0,0.15);
}

/* Button 1 */
.btn-1 {
    background: #3498db;
    color: #fff;
}

.btn-1:hover {
    background: #2980b9;
}

.btn-1:active {
    background: #2980b9;
    top: 2px;
}

.btn-1:before {
    position: absolute;
    height: 100%;
    left: 0;
    top: 0;
    line-height: 3;
    font-size: 140%;
    width: 60px;
}
/* .icon-info:before {
    content: "\f05a";
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
	<div class="bg">
	<div class="cont">
		<h1 class="text-center"> Welcome to Quiz on CoronaVirus 2020 </h1>
		<h5 class="text-center">This is small initiative taken up by NSS-RAIT under the awareness campaign against Covid-19</h5><br>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6" id="buttons">
					<!-- <h4 class="card-header text-center" style="background-color:#9f1c33; color: beige;"> Participant's Details </h4> -->
					<button class="btn btn-1 btn-sep icon-info" id="btnq" onclick="window.location.href = 'quiz_form.php';"><i class="fas fa-server"></i>&nbsp Take Quiz</button>
					<button class="btn btn-1 btn-sep icon-info" onclick="window.location.href = 'post_form.php';"><i class="fa fa-upload" style="font-size:24px"></i>&nbsp Upload Post</button>
					<!-- <div class="btnn" id="btnq">Take Quiz</div>
					<div class="btnn" id="btnp">Upload Post</div> -->
				</div>
			<div class="col-lg-3"></div>
			<!-- 960x480 (480p); 1440x720 -->
		</div><br>
		<h3 class="text-center">We can win this war together!!</h3>
		<br>
	</div>
	
	<div class="container">
		<header class="clearfix">
		
		<!-- <form method="post" action="add-image.php"> -->
		<!-- <p align="right"> -->
		<!-- <button type="submit" class="btn btn-success">Add Image</button> -->
		<!-- </p> -->
		<!-- </form> -->
	
		
		<h1><b>NSS WALL</b></h1>
		</header>
		<div class="main">
			<ul id="og-grid" class="og-grid">
				<?php
				$conn = mysqli_connect("localhost", "root", "", "quizdb");
				$sql = "SELECT * FROM images";
				$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_object($result)) {
				?>
				<li>
					<a href="javascript:void(0);" data-largesrc="uploads/<?php echo $row->path; ?>" data-title="<?php echo $row->title; ?>" data-description="<?php echo $row->description; ?>">
						<img src="uploads/<?php echo $row->path; ?>"style="max-width:90vw; height:auto; max-height: 30vh;" class="img-responsive" alt="img01"/>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div><!-- /container -->
	
	<script src="assets/jquery-1.11.3.min.js"></script>
	<script src="assets/grid.js"></script>
	<script>
		$(function() {
			Grid.init();
		});
	</script>
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
</div>
</body>
</html>