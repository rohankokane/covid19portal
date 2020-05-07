<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
</HEAD>
<BODY onload="noBack();" 
    onpageshow="if (event.persisted) noBack();">
<?php
session_start();
   $conn = mysqli_connect('localhost','root');
   	// if($conn){
   	// 	echo"connection";
   	// }
   	mysqli_select_db($conn,'quizdb');
   ?>
<?php
    $message = "";
    if (isset($_POST["submit"]))
    {
        $conn = mysqli_connect("localhost", "root", "", "quizdb");

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
	        $sql = "INSERT INTO images(title, description, path) VALUES('$title', '$description', '" . $file_name . "')";
	        mysqli_query($conn, $sql);
	        move_uploaded_file($tmp_name, $file_path);
        }
        $message = "Post has been uploaded";
    }
?>
<?php
         $counter = 0;
         $Resultans = 0;
            if(isset($_POST['submit_quiz'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST);
            ?>

            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q1= " select q_ans from questions ";
            $ansresults = mysqli_query($conn,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows);
            	$flag = $rows['q_ans'] == $selected[$i];
            	
            			if($flag){
            				// echo "correct ans is ".$rows['ans']."<br>";				
            				$counter++;
            				$Resultans++;
            				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				// echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		$i++;		
            	}}}
            	?>
            
            <?php 
            // echo $Resultans;
            $name = $_SESSION['username'];
            $email = $_SESSION['email'];
                    
                    $sql5 = "SELECT `user_id` FROM `user` WHERE `email` = '$email' ";
                
                    $res = mysqli_query($conn, $sql5);
                    //echo mysqli_num_rows($res); 

                    if (mysqli_num_rows($res) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($res)) {
                        // echo "id: " . $row["user_id"];
                        $user_id = $row["user_id"];
                        }
                    } else {
                        echo "0 results";
                    }
                    // echo "user_id :::: $user_id";
                    $finalresult = " insert into score(name,sc,user_id) values ('$name','$Resultans','$user_id') ";
                    $queryresult= mysqli_query($conn,$finalresult); 
                    // if($queryresult){
                    // 	echo "successssss";
                    // }
            ?>
<html>
<head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Google Image | Add</title>
        <link rel="stylesheet" href="assets/default.css" />
		<link rel="stylesheet" href="assets/component.css" />
        <script src="assets/modernizr.custom.js"></script>
        <!-- icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/bootstrap.css" />
        <script src="assets/jquery-1.11.3.min.js"></script>
        <script src="assets/bootstrap.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
        <script>
$(document).ready(function(){
   setTimeout(function(){
      PopUp();
   },00); // 5000 to load it after 5 seconds from page load
});
        function PopUp(){
        // var result="<?php echo $Resultans; ?>";
        // alert("Your score is"+result+" !");
        document.getElementById("box").style.display= "block";
        // document.getElementsByTagName("body").style.filter="blur(12px)";
        document.getElementById("toblur").style.filter = "blur(10px)";
        // document.getElementsByTagName("BODY")[0].style.filter = "blur(12px)";
    }
    function nopop(){
        document.getElementById("box").style.display= "none";
        document.getElementById("toblur").style.filter = "blur(0px)";
    }
    </script>
          
        <style>
        @import "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css";
        body{
        /* display: flex;
        flex-direction: column;
        justify-content: space-between; */
        height: 100vh;
        }
        /* score dialouge box*/
        #box{
        width: 80vw;
        height: 50vh;
        overflow: hidden;
        background: #f1f1f1;
        box-shadow: 0 0 20px black;
        border-radius: 8px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: 9999;
        padding: 10px;
        text-align: center;
        display: none;
        }
        #box span{
        color: #2ecc71;
        font-size: 40px;
        display: block;
        margin: 20px 0;
        }
        #box h1{
        color: #333;
        }
        .close-btn{
        /* position: absolute; */
        /* left: 40%; */
        /* top: 80%; */
        font-size: 18px;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        background: #3498db;
        /* display: inline-block; */
        border-radius: 4px;
        align-self: center;
        width: min-content;
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
            
        /* .container-main{
        display: flex;
        flex-direction: column;
        justify-content: center;
        
        } */
        .container-main{
        /* padding: 15px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-image: url(http://www.dypatil.edu/mumbai/rait/wp-content/themes/stack-theme/images/logo_bg.jpg);
        background-repeat: no-repeat;
        /* background-position: 50px; */
        background-size:contain;	
        padding: 0px;
        }
        .content{
            padding: 10vw;
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
        .ele{
        display: flex;
        flex-direction: column;
        justify-content: center;
        }
        #file input[type="file"] {
        opacity: 0;
        position: fixed;
        width: 0;
        transition: all 0.5s;
        }
        #file label {
        display: flex;
        flex-direction: row;
        justify-content:space-around;
        /* background-image: -webkit-linear-gradient(); */
        background-image: -webkit-linear-gradient(left, #39ade7, #2079b0);
        /* background-color: #44c0fe; */
        padding: 10px 10px;
        /* font-family: sans-serif, Arial; */
        font-size: 16px;
        color:rgb(249, 252, 255);
        border: 1px solid rgb(182, 182, 182);
        border-radius: 4px;
        transition: all 0.5s;

        /* width:80vw; */
        }
        #file:active{
        /* background-color: #3e8e41; */
        /* box-shadow: 0 5px #666; */
        transform: translateY(4px);
        background-image: -webkit-linear-gradient(left, #2ecc55, #20b06d);
        }
        #filelabel::after{
            background-image: -webkit-linear-gradient(left, #2ecc55, #20b06d);
        }
        .box-content{
        display: flex;
        flex-direction: column;
        justify-content:space-around;
        height:inherit;
        }
       
        .vid{
        display: flex;
        flex-direction: row;
        justify-content:space-evenly;
        flex-wrap: wrap;
        }
        .button {
        /* display: inline-block; */
        border-radius: 4px;
        background-color: #9f1c33;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 50vw;
        max-width: 120px;
        transition: all 0.5s;
        cursor:pointer;
        margin: 5px;
        box-shadow:inset 0 -0.4em 0 -0.20em rgba(0,0,0,0.17);
        }

        .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .button:hover span {
        padding-right: 25px;
        }

        .button:hover span:after {
        opacity: 1;
        right: 0;
        }
        .button:active {
        /* background-color: #3e8e41; */
        /* box-shadow: 0 5px #666; */
        transform: translateY(4px);
        }
        a {text-decoration: none;}


/* .button:active span:after {
    transform: scale(0.99);
}
.button:active{
 top:0.2em;
} */
        </style>
</head>

<body>
    <header class="site-header">
        <img src="http://www.dypatil.edu/mumbai/rait/wp-content/uploads/2020/04/logo-1-1-1.png" width="240vh">
        <!-- <div class="text-center"><h1>NSS-RAIT</h1></div> -->
        <img src="http://localhost/quiz/images/sow.png"  width="90vh" style="margin-left:25px">
        <div></div>
        <img src="http://localhost/quiz/images/nss_logo.png" width="90vh">
     </header>
    <div id="box" >
        <div class="box-content">
            <div>
                <span class="ion-android-happy"></span>
                <h1>Good Job!</h1>
                <?php
                echo "Your score is $Resultans Out of 20!";
                ?>
            </div>
            <div class="close-btn">
                <!-- <button onclick="nopop(),'certi.php'"; name="Download"  type="submit" class="button"><span> Download </span></button></div> -->
                <a onclick="nopop();" href="certi.php" >Download Certificate</a>
            </div>click the above button to Download your certificate!
        </div>
    </div>    
<div class="toblur" id="toblur">        
<div class="container-main">
    <div class="content">
        <h2>Thank you for participating!</h2>
        <p>This is a small initiative under the Awareness campaign against CoronaVirus (Covid-19) pandemic started by NSS unit of Ramrao adik institute of technology.
        Here are the glimpse of some of the activities condcuted by NSS-RAIT during this lockdown period.</p>
        <br>
        <div class="vid">
            <iframe width="400" height="250" src="https://www.youtube.com/embed/p2H31SJ3Fg0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/knGTkX-S6dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>
        In this difficult time we are doing all we can to serve the nation. As our respected prime minister mentioned national service scheme volunteers to come forward and contribute in this fight against the pandemic.
        If you or your unit is also conducting any such activities we invite you all to post your work for on this wall...
        </p>
    </div>

    <div class="container">
            <div class="wall">
			<header class="clearfix">
                
            <h1 class="text-center"><b>NSS Wall</b></h1>
            
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
							<img src="uploads/<?php echo $row->path; ?>" style="max-width:90vw; height:auto; max-height: 30vh;" class="img-responsive" alt="img01" >
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
        </div>
        <div class="row" style="padding: 10px; font-family: 'Segoe UI';">
            <div class="col-md-offset-3 col-md-6">
                <h1>Upload posts</h1>
                <?php if (!empty($message)) { ?>
                    <div class="alert alert-success"><?php echo $message; ?></div>
                <?php } ?>

                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group" id="file">
                        <label class="text-center">Choose pictures to upload<div></div><i class="fa fa-upload" style="font-size:24px"></i>
                        <input type="file" name="image[]" multiple accept="image/*" class="form-control" required /></label>
                    </div>
                    <!-- <label class="text-center"> -->
                        <!-- <button name="submit" type="submit" value="Post" class="button6"> Post </button> -->
                        <!-- <button class="button" style="vertical-align:middle"><span>Hover </span></button> -->
                        <div class="text-center"><button name="submit" value="Post" type="submit" class="button"><span> Post </span></button></div>
                    <!-- <input type="submit" name="submit" value="Post" class="btn btn-success" />     -->
                    <!-- <a href="index.php" class="btn btn-success">See Images</a> -->
                </form>
            </div>
        </div>
    </div>

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

</div> </body>
</html>