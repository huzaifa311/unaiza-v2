<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unaiza City Karachi
        <?php echo isset($title) ? $title : '| Home'; ?>
    </title>
    <link rel="website icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/default.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/register-footer.css">
    <link rel="stylesheet" href="<?php echo isset($css) ? $css : './assets/css/style.css'; ?>">
    <link rel="stylesheet" href="./assets/css/embla.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/css/glightbox.min.css">
</head>

<body>

    <header id="header">
        <div>
            <a href="./">
                <img loading="lazy" src="./assets/img/logo-white.png" class="logo" id="logo-header" alt="Unaiza City" />
            </a>
            <nav>
                <?php
                    $isHome = isset($page) && $page === 'home';
                ?>
                <a href="./" <?=$isHome ? ' class="active-parent"' : ''?>>
                    <h3<?=$isHome ? ' class="active"' : ''?>>Home</h3>
                </a>
                <?php
                    $isAbout = isset($page) && $page === 'about';
                ?>                
                <a href="./about-us.php" <?=$isAbout ? ' class="active-parent"' : ''?>>
                    <h3<?=$isAbout ? ' class="active"' : ''?>>About Us</h3>
                </a>
                <div class="dropdown">
                    <a href="./uraisha-radiance.php">
                        <h3>Projects</h3>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./uraisha-radiance.php">Uraisha Radiance</a></li>
                    </ul>
                </div>

                <?php
                    $isContact = isset($page) && $page === 'contact';
                ?>  
                <a href="./contact-us.php" <?=$isContact ? ' class="active-parent"' : ''?>>
                    <h3<?=$isContact ? ' class="active"' : ''?>>Contact Us</h3>
                </a>
            </nav>
            <div class="right">
                <a class="contact" href="contact-us.php">Contact Us</a>
            </div>
            <div id="menu" class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <aside id="sidebar">
        <div class="sidebar-header">
            <a href="./index.php">
                <img loading="lazy" src="./assets/img/logo.png" class="logo" alt="logo" />
            </a>
            <div id="closemenu" class="close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>

        <nav>
            <h3 class="active">
                <a href="./index.php">
                    Home
                </a>
            </h3>
            <h3>
                <a href="./about-us.php">
                    About Us
                </a>
            </h3>
            <h3>
                <a href="./trips.php">
                    Trips
                </a>
            </h3>
            <h3>
                <a href="./contact-us.php">
                    Contact Us
                </a>
            </h3>
        </nav>
    </aside>