
<?php
        session_start();
        
        $createimage =imagecreatefromjpeg( "assets/certi.jpeg");
        $drFont = "assets/akurapoppo.ttf";
        $black = imagecolorallocate($createimage,0,0,0);
        $rotation =0;
        $name = $_SESSION['username'];
        $output ="uploads/certificate_$name.png";
        $origin_x =500;
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
        readfile($output); //Absolute URL
        
        readfile($output); //Absolute URL
        if (file_exists($output)) {
            unlink($output);
        }
        
        exit();
        
    ?>



                <!--for user_id in database     
                      <?php

                ?> -->




<!--   for back button
                     -->