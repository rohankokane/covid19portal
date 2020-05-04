<?php
   // session_start();
   
   // if(!isset($_SESSION['username'])){
   // 	header('location:index.php');
   // }
   
   
   // $con = mysqli_connect('localhost','root');
  
   // 	mysqli_select_db($con,'quizdb');
   
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
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="
         https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <style type="text/css">
         .animateuse{
         animation: leelaanimate 0.5s infinite;
         }
         @keyframes leelaanimate{
         0% { color: red },
         10% { color: yellow },
         20%{ color: blue }
         40% {color: green },
         50% { color: pink }
         60% { color: orange },
         80% {  color: black },
         100% {  color: brown }
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
			background-image: url(http://www.dypatil.edu/mumbai/rait/wp-content/themes/stack-theme/images/logo_bg.jpg);
			background-repeat: no-repeat;
			/* background-position: 50px; */
			/* background-size:70vh; */
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
      body{
         background-color:#fdfdfd;
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

      <?php 

      $page1 = $_GET['page'];

      if($page1=="" ||  $page1==1){
         $page1 = 0;
      } else{
         $page1 = (($page1 * 1)-1);

      }

      ?>

      <div>
       <!--   <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >  Complete Quiz Website using PHP and MYSQL using Session</h1><br>
      <div class="container "><br> -->
         <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" > Let's start! </h1><br>
      <!-- <div class="container "><br> -->
         <div class="container">   
            <!-- <h1 class="text-center text-success text-uppercase animateuse" >  ThapaTechnical  Webdeveloper Quiz </h1>
            <br> -->
            <div class=" col-lg-12 text-center">
               <h3> <a href="#" class="text-uppercase text-warning"> <?php echo "Rohan"; ?>,</a> Welcome to the Quiz on CoronaVirus </h3> 
               <!-- $_SESSION['username'] -->
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="card">
                  <p class="card-header text-center" > <?php echo "Rohan"; ?>, you have to select only one out of 4. Best of Luck <i class="fas fa-thumbs-up"></i>	 </p>
               </div>
               <br>
               <form action="checked.php" method="post">
                  <?php
                     for($i=1;$i<21;$i++){
                     $l = 1;
                     $ansid = $i;
                     $sql1 = "SELECT * FROM `questions` WHERE `qid` = $i ";
                     	$result1 = mysqli_query($con, $sql1);
                     		if (mysqli_num_rows($result1) > 0) {
                     						while($row1 = mysqli_fetch_assoc($result1)) {
                     	?>				
                  <br>
                  <div class="card">
                     <br>
                     <p class="card-header">  <?php echo $i ." : ". $row1['question']; ?> </p>
                    
                     <?php
                        $sql = "SELECT * FROM `answers` WHERE `q_id` = $i limit $page1, 1";
                        	$result = mysqli_query($con, $sql);
                        		if (mysqli_num_rows($result) > 0) {
                        						while($row = mysqli_fetch_assoc($result)) {
                        	?>	
                           
                     <div class="card-block">
                        <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['a_id']; ?>" > <?php echo $row['ans']; ?> 
                        <br>
                     </div>
                     <?php
                        
                        } } 
                        $ansid = $ansid + $l;
                        } }}
                        
                     ?>
                  </div>

                  <br>
                  <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
               <p id="letc"></p>
            </div>
            <br>
            <!-- <a href="logout.php" class="btn btn-primary d-block m-auto text-white" > Logout </a> <br> -->
         </div>
         <br>
      </div>


      <?php

      $startlimit  = 0;
      $q =" select qid from answers";
      $query = mysqli_query($con,$q);
      $lastpage = mysqli_num_rows($query);

      $totalpage = ceil($lastpage / 2);
      ?>
      <div class="m-auto"><br>
         <ul class="pagination">
      <?php
      for($i=1; $i<=$totalpage; $i++){
         ?>
      
      <li class="float-left list-unstyled page-item" > <a href="home.php?page=<?php echo $i; ?>" class="page-link">  <?php  echo $i;  ?> </a> </li>
      
       <?php  
           }
        ?>
        </ul>
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


   </body>
</html>
