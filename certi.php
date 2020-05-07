
<?php
        session_start();
        
        $createimage =imagecreatefromjpeg( "assets/certi.jpeg");
        $drFont = "assets/akurapoppo.ttf";
        $black = imagecolorallocate($createimage,0,0,0);
        $rotation =0;
        $name = $_SESSION['username'];
        $output ="uploads/certificate_$name.png";
        $origin_x = 450;
        $origin_y=480;
        $font_size = 40;
        $certificate_text = $name;

        //font directory for name
        // $drFont = dirname(_FILE_)."/developer.ttf";

        //function to displaiy name on certificate picture
        $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black, $drFont, $certificate_text);

        imagepng($createimage,$output,3);

        $finalOutput = "uploads\certificate_$name.png";
         $namepng=$name.".png";
        //   echo $output;         
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$namepng.'"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($finalOutput)); //Absolute URL
        ob_clean();
        flush();
        readfile($finalOutput); //Absolute URL
        exit();
        
    ?>



                <!--for user_id in database     
                      <?php

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
                ?> -->




<!--   for back button
                    <SCRIPT type="text/javascript">
                        window.history.forward();
                        function noBack() { window.history.forward(); }
                    </SCRIPT>
                    </HEAD>
                    <BODY onload="noBack();" 
                        onpageshow="if (event.persisted) noBack();"> -->