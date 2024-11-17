<?php
session_start(); // Dodaj ovu liniju na početku fajla
?>

<!-- START NAVBAR SECTION -->
<header id="header" class="header-section">
    <div class="container">
        <nav class="navbar">
            <div class="d-flex menu-wrap align-items-center main-menu-container">
                <div class="mainmenu" id="mainmenu">
                    <ul class="nav">
                        <li><a href="./#home-section">POČETNA</a></li>
                        <li><a href="./#about">O NAMA</a></li>
                        <li><a href="./#services">USLUGE</a></li>
                        <li><a href="./#gallery">GALERIJA</a></li>
                        <li><a href="./#pricing">CENOVNIK</a></li>
                        <li><a href="./#contact-us">KONTAKT</a></li>
                    </ul>
                </div>
                <div class="header-btn d-flex align-items-center" style="margin-left:auto;">
                    <a href="https://igor96.inthechair.com/" class="menu-btn">Zakaži šišanje</a>
                </div>
            </div>
            <a class="mob-menu-toggle">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </div>
</header>


<!-- END NAVBAR SECTION -->

<div class="header-height" style="height: 5px;"></div>

<!-- END NAVBAR SECTION -->

<!-- START MOBILE NAVBAR -->

<div id="menu_mobile" class="menu-mobile-menu-container">
    <ul class="mob-menu-top">
        <li class="menu-header">
            <a href="#">MENU</a>
        </li>
        <li style="display: inline-block;">
            <a class="mob-close-toggle" style="cursor: pointer;width: 75px;">
                <i class="fas fa-times" style="color: white;"></i>
            </a>
        </li>
    </ul>
    <div class="menu-tab-div">
        <ul id="mobile-menu" class="menu">
            <li><a href="index.php#home-section" class="a-mob-menu">POČETNA</a></li>
            <li><a href="index.php#about" class="a-mob-menu">O NAMA</a></li>
            <li><a href="index.php#services" class="a-mob-menu">USLUGE</a></li>
            <li><a href="index.php#gallery" class="a-mob-menu">GALERIJA</a></li>
            <li><a href="index.php#pricing" class="a-mob-menu">CENOVNIK</a></li>
            <li><a href="index.php#contact-us" class="a-mob-menu">KONTAKT</a></li>
            <li><a href="https://igor96.inthechair.com" class="a-mob-menu">ZAKAŽI SADA</a></li>
        </ul>
    </div>
</div>

<!-- END NAVBAR MOBILE -->
