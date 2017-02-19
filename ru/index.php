<?php 
if(isset($_POST['submit'])){
    $to = "admin@sher.biz"; // this is your Email address
    $reqemail = "admin@sher.biz";
    
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
   
//    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
//    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['first_name'] . " " . $_POST['last_name'] . " " . $_POST['tour-select'] . " " . "israeltour.online";    
            $message = '<html lang="ru"><body>';
            $message .= '<hr />';
            $message .= 'Бронирование экскурсии в Израиле на http://www.israeltour.online +972-58-7710101';
            $message .= '<hr />';
//				$message .= '<img src="http://www.rentcarisrael.online/images/Thrifty-Israel.jpg" alt="Бронирование экскурсии в Израиле +972-58-7710101" />';
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['first_name']) . "</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['last_name']) . "</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
				$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['telephone']) . "</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Car Category:</strong> </td><td>" . strip_tags($_POST['tour-select']) . "</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Pickup location:</strong> </td><td>" . strip_tags($_POST['pick-up-location']) . "</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Pickup date:</strong> </td><td>" . strip_tags($_POST['pick-up-date']) . "</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Pickup time:</strong> </td><td>" . strip_tags($_POST['pick-up-time']) . "</td></tr>";

				$message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Ваше бронирование персональной экскурсии в Израиле на http://www.israeltour.online +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
header('Location: http://www.rentcarisrael.online/thankyou.php');
    }
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<title>Персональные экскурсии по Израилю | IsraelTour.online</title>
<meta name="keywords" content="" />
<meta  name="description"  content="" />
<meta property="fb:app_id" content="1322511981092474" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="ru_RU" />
<meta property="og:url" content="http://www.rentcarisrael.online" />
<meta property="og:image" content="http://www.rentcarisrael.online/images/thankyoucar.png"/>
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="320" />
<meta property="og:title" content="" />
<meta property="og:description" content="Whatsapp/Viber +972-58-7710101"/>
<?php include("_header.html"); ?>
</head>
 <body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">


<?php include("_top.html"); ?>
<?php include("_index.html"); ?>
<?php include("_teaser.html"); ?>
<?php include("x_services.html"); ?> 

<?php include("x_vehicles.html"); ?> 
<?php include("x_newsletter.html"); ?> 


<?php include("x_contacts.html"); ?> 
<?php include("x_footer.html"); ?> 
<?php include("x_checkout.html"); ?> 
<?php include("_bottom_scripts.html"); ?>

</body>
</html>