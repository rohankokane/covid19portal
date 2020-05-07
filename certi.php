
<?php
        session_start();
        if (isset($_POST["download"]))
        {
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
        }
    ?>




<!-- to add user_id in score -->

<?php 

$name = $_SESSION['username'];
$email = $_SESSION['email'];

$sql5 = "SELECT `user_id` FROM `user` WHERE `email` = $email ";
$res = mysqli_query($con, $sql5);
$finalresult = " insert into score(name,sc,user_id) values ('$name','$Resultans','$res[0]') ";
$queryresult= mysqli_query($con,$finalresult); 
// if($queryresult){
// 	echo "successssss";
// }
?>
