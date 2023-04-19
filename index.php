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
<img src="img/logo.cdr" alt="">
<span><a href="onas.php">О нас</a></span>
<span><a href="news.php">Новости о компании</a></span>
</div>
</header>
<section id="slider_bl_css">
        <ul class="slides">
            <input type="radio" name="radio-btn" id="img-1" checked />
            <li class="slide-container">
                <div class="slide">
                    <img src="img/baner1.jpg" alt=""/>
                </div>
                <div class="nav">
                    <label for="img-5" class="prev">&#x2039;</label>
                    <label for="img-2" class="next">&#x203a;</label>
                </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-2" />
            <li class="slide-container">
                <div class="slide">
                  <img src="img/baner2.jpg" alt=""/>
                </div>
                <div class="nav">
                    <label for="img-1" class="prev">&#x2039;</label>
                    <label for="img-3" class="next">&#x203a;</label>
                </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-3" />
            <li class="slide-container">
                <div class="slide">
                  <img src="img/baner3.jpg" alt=""/>
                </div>
                <div class="nav">
                    <label for="img-2" class="prev">&#x2039;</label>
                    <label for="img-4" class="next">&#x203a;</label>
                </div>
            </li>
        
            <input type="radio" name="radio-btn" id="img-4" />
            <li class="slide-container">
                <div class="slide">
                  <img src="img/baner4.jpg" alt=""/>
                </div>
                <div class="nav">
                    <label for="img-3" class="prev">&#x2039;</label>
                    <label for="img-5" class="next">&#x203a;</label>
                </div>
            </li>
        
        	<input type="radio" name="radio-btn" id="img-5" />
            <li class="slide-container">
                <div class="slide">
                  <img src="content/image/baner5.jpg" alt=""/>
                </div>
                <div class="nav">
                    <label for="img-4" class="prev">&#x2039;</label>
                    <label for="img-1" class="next">&#x203a;</label>
                </div>
            </li>
        </ul>
        </section>

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
</body>
</html>
