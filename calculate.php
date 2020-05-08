<?php
session_start();
   $conn = mysqli_connect('localhost','root');
   	// if($conn){
   	// 	echo"connection";
   	// }
   	mysqli_select_db($conn,'quizdb');

         $counter = 0;
         $Resultans = 0;
        //  if(!isset($_POST['submit_post'])){ -->
         if(isset($_POST['submit_quiz'])){
            if(!empty($_POST['quizcheck'])) {
        
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            echo $checked_count;
             print_r($_POST);
     
            // Loop to store and display values of individual checked checkbox.
            // $selected = $_POST['quizcheck'];
            
            // $q1= " select q_ans from questions ";
            // $ansresults = mysqli_query($conn,$q1);
            // $i = 1;
            // while($rows = mysqli_fetch_array($ansresults)) {
            //    print_r($rows);
            // 	$flag = ($rows['q_ans'] == $selected[$i])
            // 	        .if($flag){
            // 				// echo "correct ans is ".$rows['ans']."<br>";				
            // 				$counter++;
            // 				$Resultans++;
            // 				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            // 			}else{
            // 				$counter++;
            // 				// echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            // 			}					
            // 		$i++;		
            // 	}}} 
            // // echo $Resultans;
            // $name = $_SESSION['username'];
            // $email = $_SESSION['email'];
                    
            //         $sql5 = "SELECT `user_id` FROM `user` WHERE `email` = '$email' ";
                
            //         $res = mysqli_query($conn, $sql5);
            //         //echo mysqli_num_rows($res); 

            //         if (mysqli_num_rows($res) > 0) {
            //             // output data of each row
            //             while($row = mysqli_fetch_assoc($res)) {
            //             // echo "id: " . $row["user_id"];
            //             $user_id = $row["user_id"];
            //             }
            //         } else {
            //             echo "0 results";
            //         }
            //         // echo "user_id :::: $user_id";
            //         $finalresult = " insert into score(name,sc,user_id) values ('$name','$Resultans','$user_id') ";
            //         $queryresult= mysqli_query($conn,$finalresult); 

            ?>