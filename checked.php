<?php
session_start();

   $con = mysqli_connect('localhost','root');
   	// if($con){
   	// 	echo"connection";
   	// }
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
<style type="text/css">
    .row{
      display: flex;
      width: 100vw;
      background-color:#f5f5f5; 
			padding: 15px;
      margin: 0px;
      height: 15vh;
			flex-direction:row ; /*mobile friendly images size changes creating a flexbox*/
			/* justify-content: space-evenly; */
    }
    /* body{
      height:100vh;
      width: 100vw;
      padding:0px;
      margin:0px;
    } */
    .main{
      height: 100vh;
      /* width: 100vw; */
      padding: 0%;
      margin: 0%;

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
    .table-head{
      background-color: #9f1c33;
      color: #f5f5f5;
    }

</style>
</head>
<body>
  <div class="main">
    <header class="site-header">
      <img src="http://www.dypatil.edu/mumbai/rait/wp-content/uploads/2020/04/logo-1-1-1.png" width="240vh">
      <!-- <div class="text-center"><h1>NSS-RAIT</h1></div> -->
      <img src="http://localhost/quiz/images/sow.png" width="90vh" style="margin-left:25px">
      <div></div>
      <img src="http://localhost/quiz/images/nss_logo.png" width="90vh">
   </header>
  
     <div class="container text-center" >
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="table-head"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

	         <?php
         $counter = 0;
         $Resultans = 0;
            if(isset($_POST['submit_quiz'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            if($checked_count<25)
            {
              header('location:quiz.php');
              
            }
            // print_r($_POST);
            ?>

        	<td>
            <?php
            echo "Out of 3, You have attempt ".$checked_count." option."; ?>
            </td>
        
          	
            <?php
            // Loop to store and display values of individual checked checkbox.
            if(isset($_POST['quizcheck'])){
            $selected = $_POST['quizcheck'];
            }
            if (count($selected)<25)
            {
              
            }
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
            	}
            	?>
            	
    		
    		<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo " Your score is ". $Resultans.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php 

            $name = $_SESSION['username'];
            $finalresult = " insert into score(name,sc) values ('$name','$Resultans') ";
            mysqli_query($con,$finalresult); 
            // if($queryresult){
            // 	echo "successssss";
            // }
            ?>


      </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
      </div>
   </body>
</html>












<!-- 

<?php

// session_start();
// if(!isset($_SESSION['username'])){
// // header('location:login.php');
// }

//  $con = mysqli_connect('localhost','root');
//     if($con){
//       echo"connection";
//     }
   
//     mysqli_select_db($con,'quizdatabases');


//     if(isset($_POST['submit'])){

//       if(!empty($_POST['quizcheck'])){

//         $count = count($_POST['quizcheck']);
//           echo "you count is". $count;

//           $selected = $_POST['quizcheck'];
//           print_r($selected);

//           $q = " select * from question ";
//           $query = mysqli_query($con,$q);

//           $result = 0;
//           $i = 1;
//           while ( $rows = mysqli_fetch_array($query)) {
            
//               print_r($rows['ans_id']);

//               $stored  = $rows['ans_id'] == $selected[$i];

//               if($stored){

//                 $result++;

//               }

//               $i++;

//           }

//           echo $result;

//       }

//     }


?> -->