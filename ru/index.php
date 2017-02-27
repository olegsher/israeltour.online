<?php 
if(isset($_POST['submit'])){
    $to = "admin@vastama.com"; // this is your Email address
    $reqemail = "admin@sher.biz";
    
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
    $phone = $_POST['phone'];
    $whatsapp = $_POST['whatsapp'];
    $viber = $_POST['viber'];
    $skype = $_POST['skype'];
    
    $car_select = $_POST['tour-select'];
    
    
    $message = $_POST['message'];
   
//    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
//    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['Last_name'] . " " . $_POST['tour-select'] . " " . "israeltour.online";    
            $message = '<html lang="ru"><body>';
            $message .= '<hr />';
            $message .= 'Бронирование экскурсии в Израиле на http://www.israeltour.online +972-58-7710101';
            $message .= '<hr />';
$message .= '<img src="http://www.israeltour.online/ru/images/israel.png" alt="Бронирование индивидуальной экскурсии в Израиле +972-58-7710101" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Имя:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Фамилия:</strong> </td><td>" . strip_tags($_POST['Last_name']) . "</td></tr>";
$message .= "<tr><td><strong>Почта:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Телефон:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><td><strong>Whatsapp:</strong> </td><td>" . strip_tags($_POST['whatsapp']) . "</td></tr>";
$message .= "<tr><td><strong>Viber:</strong> </td><td>" . strip_tags($_POST['viber']) . "</td></tr>";
$message .= "<tr><td><strong>Skype:</strong> </td><td>" . strip_tags($_POST['skype']) . "</td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>Tour:</strong> </td><td>" . strip_tags($_POST['tour-select']) . "</td></tr>";
$message .= "<tr><td><strong>Сообщение:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Ваше бронирование экскурсии в Израиле на http://www.israeltour.online +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
header('Location: http://www.israeltour.online/thankyou.php');
    }
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<title>Индивидуальные экскурсии по Израилю | IsraelTour.online</title>
<meta name="keywords" content="" />
<meta  name="description"  content="" />
<meta property="fb:app_id" content="1322511981092474" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="ru_RU" />
<meta property="og:url" content="http://www.israeltour.online" />
<meta property="og:image" content="http://www.israeltour.online/images/thankyoucar.png"/>
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="320" />
<meta property="og:title" content="" />
<meta property="og:description" content="Лучшие цены, нет предоплаты, заказ онлайн, Whatsapp/Viber +972-58-7710101"/>
<?php include("__header.html"); ?>
</head>
<body>
<?php include("x__facebook.html"); ?>
<?php include("x__google.html"); ?>
<?php include("x__mailru.html"); ?>
<?php include("x__yandex.html"); ?>
<?php include("x__shema.html"); ?> 

<?php include("__top.html"); ?>
<?php include("_index.php"); ?>
<?php include("__footer.html"); ?>
</body>
</html>


