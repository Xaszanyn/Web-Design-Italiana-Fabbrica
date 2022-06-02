
<!DOCTYPE html>
<html class="wide wow-animation" lang="tr">

<head>
    <title>Italiana Fabbrica</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700">
    <link rel="stylesheet" href="css/fabbrica.css">
    <link rel="stylesheet" href="css/novi.css">
    <!--[if lt IE 10]><div style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'><a href='http://-windows.microsoft.com/en-US/internet-explorer/'><img src='images/ie8-panel/warning_bar_0000_us.jpg' border='0' height='42' width='820' alt='You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.'></a></div><script src='js/html5shiv.min.js'></script><![endif]-->
<!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window,document,'script',

'https://connect.facebook.net/en_US/fbevents.js');


fbq('init', '2493121714070764'); 

fbq('track', 'PageView');

</script>

<noscript>

<img height="1" width="1" 

src="https://www.facebook.com/tr?id=2493121714070764&ev=PageView

&noscript=1"/>

</noscript>

<!-- End Facebook Pixel Code -->
</head>
<?php

if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}

function EmailGonder($eposta,$konu,$mesaj){
	require("class.phpmailer.php");
	$imza = ' <hr> Bu Mesaja Cevap Yazmayınız.';
	$mesaj = "$mesaj  $imza";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "italianafabbrica.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "bildirim@italianafabbrica.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "Denizli2021"; // Mail adresimizin sifresi
$mail->SetFrom("bildirim@italianafabbrica.com", "Fabbrica Bildirim"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress($eposta); // Mailin gönderileceği alıcı adres
$mail->Subject = "Basvuru"; // Email konu başlığı
$mail->Body = $mesaj; // Mailin içeriği
$mail->Send();
/*if(!$mail->Send()){
	echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else {
	echo "Email Gonderildi";
}*/

}
//EmailGonder("baris.dokumaci@gmail.com","deneme","deneme mesajı");
echo ' 
<body>
    <div class="page-loader">
        <div class="page-loader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Yükleniyor...</p>
        </div>
    </div>
    <div class="boxed-layout">
        <div class="page text-center">



                    <header class="page-head"  >
                <div class="rd-navbar-wrap rd-navbar-minimal"  style="background-color:#3a3635;">
                    <nav class="rd-navbar novi-background bg-cover" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="100px" data-lg-stick-up-offset="100px">
                        <div class="shell shell-fluid"  style="background-color:#3a3635;">
                            <div class="rd-navbar-inner"  style="background-color:#3a3635;">
                                <div class="rd-navbar-panel"  style="background-color:#3a3635;">
								<div style="background-color:#3a3635;">
								<button class="rd-navbar-toggle" style="color:white;border-color:#fff;" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span style="color:white;"></span></button><a class="rd-navbar-brand brand" href="index.html">
                                        <div class="brand-logo"  style="background-color:#3a3635;"><img src="images/logo.png" width="200" ></div>
                                    </a>
									</div></div>
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav" >
                                        <li><a href="http://italianafabbrica.com" >Anasayfa</a>  </li>
										<li><a href="http://italianafabbrica.com/subelerimiz" >Sipariş</a></li>
                                        <li><a href="http://italianafabbrica.com/menu" >Menü</a></li>
                                        <li><a href="http://italianafabbrica.com/iletisim" >İletişim</a></li>
                                        <li><a href="http://italianafabbrica.com/franchise">Franchıse</a> </li>
										
                                        <li><a href="https://www.instagram.com/italianafabbrica/" target="_blank">Galeri</a></li>
										
										
                                    </ul>';
												/*
                                    <ul class="rd-navbar-shop list-inline">
                                        <li><a class="unit unit-horizontal unit-middle unit-spacing-xxs link-default" href="http://italianafabbrica.com/iletisim">
                                                <div class="unit-left" style="color:#c4161c;"><span class="novi-icon icon icon-md icon-primary thin-icon-phone-call text-middle" style="color:#c4161c;"></span></div>
												
                                                <div class="unit-body"><address class="contact-info" style="color:#c4161c;"><span class="text-bold big" style="color:#c4161c;">0532 240 55 00</span></address></div>
												
                                            </a></li>
                                    </ul>*/
												echo '
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>';


            /*



            <header class="page-head">
                <div class="rd-navbar-wrap rd-navbar-minimal"  style="background-color:#343434;">
                    <nav class="rd-navbar novi-background bg-cover" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="100px" data-lg-stick-up-offset="100px">
                        <div class="shell shell-fluid"  style="background-color:#343434;">
                            <div class="rd-navbar-inner"  style="background-color:#343434;">
                                <div class="rd-navbar-panel"  style="background-color:#343434;">
								<div style="background-color:#343434;">
								<button class="rd-navbar-toggle" style="color:white;" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button><a class="rd-navbar-brand brand" href="index.html">
                                        <div class="brand-logo"  style="background-color:#343434;"><img src="images/logo.png" width="200" ></div>
                                    </a>
									</div></div>
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li><a href="http://italianafabbrica.com" style="color:#fff;">Anasayfa</a>  </li>
                                        <li><a href="http://italianafabbrica.com/menu" style="color:#fff;">Menü</a></li>
                                        <li><a href="http://italianafabbrica.com/iletisim" style="color:#fff;">İletişim</a></li>
                                        <li><a href="http://italianafabbrica.com/franchise" style="color:#fff;">Franchise</a> </li>
										<li><a href="http://italianafabbrica.com/subelerimiz" style="color:#fff;">Şubelerimiz</a></li>
                                        <li><a href="https://www.instagram.com/italianafabbrica/" style="color:#fff;" target="_blank">Galeri</a></li>
                                    </ul>
                                    <ul class="rd-navbar-shop list-inline">
                                        <li><a class="unit unit-horizontal unit-middle unit-spacing-xxs link-default" href="http://italianafabbrica.com/iletisim">
                                                <div class="unit-left"><span class="novi-icon icon icon-md icon-primary thin-icon-phone-call text-middle"></span></div>
                                                <div class="unit-body"><address class="contact-info"><span class="text-bold" style="color:#fff; font-size:15px;">0532 2405500</span></address></div>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>';
*/


?>