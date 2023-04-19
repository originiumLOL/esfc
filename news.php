<?php
session_start();
require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>ESFC</title>
</head>
<body>
<header>
<div class="menu">
<img src="img/logo.cdr" class="logo">
<span><a href="onas.php">О нас</a></span>
<span><a href="news.php">Новости о компании</a></span>
</div>
</header>
<div class="news">
        <hr>
        <div class="new_news">
        
            <div class="img_news">
            <img src="img/baner5.jpg">
            </div>
            <div class="text_news">
                <div class="img_news">
                </div>
                <div class="main_news_titles">Мы построили крутую пезанскую башню</div>
                <div class="news_text">
                    <i class="ri-calendar-2-line">219.04.20223</i><br><br>
                    <i class="ri-user-2-fill">Богдан</i><br><br>
                    Мы утилизировали столько мусора и получили много денег и мы по построили башню
                </div>
            </div>
        </div>
    </div>
    <footer>
            <div class="footer_baners">
            <div class="footer_info">
                <div class="footer_titles">Контакты</div>
                <br>
                <br><br>
                <i class="ri-smartphone-line">+7 (8182) 46 41 00</i><br><br>
                <i class="ri-map-pin-fill">Архангельск, пр. Ленинградский 38, ТРЦ «Макси», 3 этаж</i>
            </div>

            </div>
    </footer>