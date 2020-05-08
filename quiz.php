<?php
   session_start();
   
   if(!isset($_SESSION['username'])){
   	header('location:index.php');
   }
   
   
   $con = mysqli_connect('localhost','root');
  
      mysqli_select_db($con,'quizdb');
      //$_SESSION['username']='sak';
   if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
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
       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <style type="text/css">
      @import "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css";
      body{
         height: 100vh;
         width:100vw;
         font-family: "Montserrat";
      }
      .card{
			/* box-shadow: 1px 0px 5px 0px #4e0000; */
         padding: 10px;
         margin: 0px;
                  
		}
		.btn{
			/* padding: 15px; */
         position: absolute;
         left: 45%;
			background-color: #9F1C33;
			color: rgb(240, 218, 218);
			padding: 16px 40px;
			border: none;
			cursor:pointer;
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
			display:flex;
         flex-direction:column;
			background-image: url(http://www.dypatil.edu/mumbai/rait/wp-content/themes/stack-theme/images/logo_bg.jpg);
			background-repeat: no-repeat;
			/* background-position: 50px; */
         background-size:contain;	
         
		}
      /* score dialouge */
      #box{
         width: 500px;
         height: 300px;
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
      .radio-toolbar {
      margin: 0px 20px 0px ;
      }

      .radio-toolbar input[type="radio"] {
      opacity: 0;
      position: fixed;
      width: 0;
      }

      .radio-toolbar label {
      display: flex;
      flex-direction: column;
      justify-content: start;
      background-color: #ddd;
      padding: 5px 10px;
      font-family: sans-serif, Arial;
      font-size: 16px;
      border: 1px solid rgb(182, 182, 182);
      border-radius: 4px;
      /* width:80vw; */
      }

      .radio-toolbar label:hover {
      background-color: #dfd;
      }

      .radio-toolbar input[type="radio"]:checked + label {
      background-color: #bfb;
      border-color: #4c4;
      }
      /* each option */
      .clearfix::after {
      content: "";
      clear: both;
      display: table;
      }
      
      </style>
<script type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</script>
   </head>
   <body onload="noBack();" 
    onpageshow="if (event.persisted) noBack();">
      <header class="site-header">
         <img src="http://www.dypatil.edu/mumbai/rait/wp-content/uploads/2020/04/logo-1-1-1.png" width="240vh">
         <!-- <div class="text-center"><h1>NSS-RAIT</h1></div> -->
         <img src="http://localhost/quiz/images/sow.png" width="90vh" style="margin-left:25px">
         <div></div>
         <img src="http://localhost/quiz/images/nss_logo.png" width="90vh">
      </header>
   <div class="container">
         
            <!-- <h1 class="text-center text-success text-uppercase animateuse" >  ThapaTechnical  Webdeveloper Quiz </h1>
            <br> -->
            <div class="text-center">
               <h3> <a href="#" class="text-uppercase text-warning"> <?php echo $_SESSION['username']; ?>,</a> Welcome to the Quiz! </h3>
            </div>
            <br>
            <!-- <div class="col-lg-8 d-block m-auto bg-light quizsetting "> -->
                  <p class="text-center" > <?php echo $_SESSION['username']; ?>, you have to select only one option out of four.</p>
               <br>
               
               <form action="checked.php" method="post">
                  <?php
                     for($i=1;$i<26;$i++){
                        $l = 1;
                        $ansid = $i;

                        $sql1 = "SELECT * FROM `questions` WHERE `qid` = $i ";
                     	$result1 = mysqli_query($con, $sql1);
                     	if (mysqli_num_rows($result1) > 0) {
                     		$row1 = mysqli_fetch_assoc($result1)
                     	   ?>				
                           <br>
                           <!-- card Start -->
                           <div class="card">
                              <!-- question print -->
                              <p><?php echo $i ." . ". $row1['question']; ?> </p>

                                <!-- image: -->
                                <div class="text-center"> 
                                    <img src="images/<?php echo $row1['img']; ?>" style="max-width:90vw; height:auto; max-height: 30vh;" class="img-responsive" alt="img01" >
                                    <!-- <img src="data:image;base64,'.base64_encode($row1['img']).' " alt="Image" style="max-width:90vw; height:auto; max-height: 50vh;">'; -->
                              
                                </div>
                              <div class="radio-toolbar" >
                              <?php
                              $sql = "SELECT * FROM `answers` WHERE `q_ans` = $i";
                              $result = mysqli_query($con, $sql);
                                 if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    ?>	<div class="clearfix">
                                       <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $row['aid']; ?>" value="<?php echo $row['aid']; ?>" ><label for="<?php echo $row['aid']; ?>"> <?php echo $row['answer']; ?></label>   
                                    </div>
                        
                              <?php 
                                    } //while loop end
                                 }  //inner if end 
                                 $ansid = $ansid + $l; //ansid increment
                        ?> </div>
                     </div><?php
                        } //outer if end
                              
                     } //for loop end
                     ?>
                  <br>
                  <input type="submit" name="submit_quiz" Value="submit" onsubmit="return checkattempted();" class="btn btn-success m-auto d-block" />
                  </form>
                  <script>function checkattempted(){
                     // alert("HELLO");
                     var radios=[]
                     radios = document.querySelectorAll('input[type="radio"]:checked');
            
                     // var value = radios.length>0? radios[0].value: null;
                     if(radios.length==25){
                        returnToPreviousPage();
                     return true;
                     }
                     else{
                     return false;
                     }
                  }
               </script>
                  <script type= "text/javascript"> 
                     var c=0;
                     function pop(){
                        <?php 
                           $counter = 0;
                           $Resultans = 0;
                              if(isset($_POST['submit'])){
                                 if(!empty($_POST['quizcheck'])){
                                    // Counting number of checked checkboxes.
                                    $checked_count = count($_POST['quizcheck']);
                                    // print_r($_POST);
                                    ?>
                                                                  
                                    <?php
                                    echo "Out of 25, You have attempt ".$checked_count." option."; ?>                                                                           
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
                                             }
                                             else{
                                                $counter++;
                                                // echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                                             }					
                                          $i++;		
                                       } //while loop ends
                                       ?>
                                 
                                    <?php 
                                       echo " Your score is ". $Resultans.".";
                                 }
                                 else{
                                 echo "<b>Please Select Atleast One Option.</b>";
                                 }
                              } 
                              ?>                     
                              <?php 
                              $name = $_SESSION['username'];
                              $finalresult = " insert into score(name,sc) values ('$name','$Resultans') ";
                              mysqli_query($con,$finalresult); 
                              // if($queryresult){
                              // 	echo "successssss";
                              // }
                              
                           ?>
                     //    if(c==0){
                     //       document.getElementById("box").style.display= "block";
                     //       c=1;
                     //    }
                     //    else{
                     //       document.getElementById("box").style.display= "none";
                     //       c=0;
                     //    }
                     // } 
                     // </script>
                  <!-- <div id="box">
                  <span class="ion-android-happy"></span>
                  <h1>Good Job!</h1>
                  <?php
                  // echo "Your score is $Resultans Out of 20!";
                  ?>

                  <a onclick="window.location.href='add-image.php'" class="close">Close</a>
                  </div> -->
                  
               
               <p id="letc"></p>
            </div>
            <br>
         </div>
         <br>
         <footer>
            <h5 class="text-center"> &copy2018 NSS RAIT </h5> 
         </footer>
      </div>


   </body>
</html>
