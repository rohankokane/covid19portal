<?php
session_start();

   $con = mysqli_connect('localhost','root');
   	// if($con){
   	// 	echo"connection";
   	// }
   	mysqli_select_db($con,'quizdb');
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
        $message = "Image has been uploaded";
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
            $ansresults = mysqli_query($con,$q1);
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
            $finalresult = " insert into score(name,sc) values ('$name','$Resultans') ";
            $queryresult=mysqli_query($con,$finalresult); 
            if($queryresult){
            	// echo "successssss";
                // echo "$Resultans";
                }
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

        <link rel="stylesheet" href="assets/bootstrap.css" />
        <script src="assets/jquery-1.11.3.min.js"></script>
        <script src="assets/bootstrap.js"></script>
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
        document.getElementById("toblur").style.filter = "blur(12px)";
        // document.getElementsByTagName("BODY")[0].style.filter = "blur(12px)";
    }
    function nopop(){
        document.getElementById("box").style.display= "none";
        document.getElementById("toblur").style.filter = "blur(0px)";
    }
    </script>
          
        <style>
             @import "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css";
                  /* score dialouge */
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
      .close{
         position: absolute;
         left: 40%;
         top: 80%;
         font-size: 18px;
         color: white;
         padding: 10px 20px;
         cursor: pointer;
         background: #3498db;
         display: inline-block;
         border-radius: 4px;
      }
     body{
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100vh;
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
		.container-main{
            display: flex;
            flex-direction: column;
            justify-content: center;
			background-image: url(http://www.dypatil.edu/mumbai/rait/wp-content/themes/stack-theme/images/logo_bg.jpg);
			background-repeat: no-repeat;
			/* background-position: 50px; */
            background-size:contain;	
            padding: 0px;
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
            </style>
</head>

<body>
    <div id="box" >
        <span class="ion-android-happy"></span>
        <h1>Good Job!</h1>
        <?php
        echo "Your score is $Resultans Out of 20!";
        ?>
        <a onclick="nopop();" class="close">Close</a>
        </div>
<div class="toblur" id="toblur">        

<header class="site-header">
         <img src="http://www.dypatil.edu/mumbai/rait/wp-content/uploads/2020/04/logo-1-1-1.png" width="240vh">
         <!-- <div class="text-center"><h1>NSS-RAIT</h1></div> -->
         <img src="http://localhost/quiz/images/sow.png" height="90vh" width="90vh" style="margin-left:25px">
         <div></div>
         <img src="http://localhost/quiz/images/nss_logo.png" height="90vh" width="90vh">
      </header>
<div class="container-main">
    <div class="container">
            <div class="wall">
			<header class="clearfix">
                
			<h1><b>NSS Wall</b></h1>
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
        <div class="row" style="padding: 10px;">
            <div class="col-md-offset-3 col-md-6">
                <h1>Add Image</h1>

                <?php if (!empty($message)) { ?>
                    <div class="alert alert-success"><?php echo $message; ?></div>
                <?php } ?>

                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Select file</label>
                        <input type="file" name="image[]" multiple accept="image/*" class="form-control" required />
                    </div>
                    <input type="submit" name="submit" value="Post" class="btn btn-success" />
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