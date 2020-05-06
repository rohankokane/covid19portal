<?php session_start(); ?>
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
    <style>
    .site-header{
			background-color:#f5f5f5; 
			/* height: 15vh; */
			padding: 10px;
            
			display: flex;
			flex-direction:row ; /*mobile friendly images size changes creating a flexbox*/
			justify-content: space-evenly;
			/* align-items: center; */
			}
    .main{
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .vid{
        display: flex;
        flex-direction: row;
        justify-content:space-evenly;
        flex-wrap: wrap;
    }



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
    <br>
    <div class="main">
        <div class="content">
        <h2>Thank you for participating!</h2>
        <p>This is a small initiative under the Awareness campaign against CoronaVirus (Covid-19) pandemic started by NSS unit of Ramrao adik institute of technology.
        Here are the glimpse of some of the activities condcuted by NSS-RAIT during this lockdown period.</p>
    <br>
        <div class="vid">
        <iframe width="400" height="250" src="https://www.youtube.com/embed/p2H31SJ3Fg0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
        <iframe width="400" height="250" src="https://www.youtube.com/embed/knGTkX-S6dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>
        In this difficult time we are doing all we can to serve the nation. As our respected prime minister mentioned national service scheme volunteers to come forward and contribute in this fight against the pandemic.
        If you or your unit is also conducting any such activities we invite you all to post your work for on this wall...
        </p>
        </div>
    <script>
    function add_post($userid,$body){
    $sql = "insert into posts (user_id, body, stamp) 
            values ($userid, '". mysql_real_escape_string($body). "',now())";
    $result = mysql_query($sql);
    }
    </script>
    <?php
$_SESSION['userid'] = 1;
?>

<?php
if (isset($_SESSION['message'])){
    echo "<b>". $_SESSION['message']."</b>";
    unset($_SESSION['message']);
}
?>
<form method='post' action='add.php'>
<p>Your status:</p>
<textarea name='body' rows='5' cols='40' wrap=VIRTUAL></textarea>
<p><input type='submit' value='submit'/></p>
</form>
 
</body>
</html>

    </div> 
</body>
</html>