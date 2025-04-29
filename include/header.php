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
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/embla.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <header id="header">
        <div>
            <a href="./index.php">
                <img loading="lazy" src="./assets/img/logo.png" class="logo" id="logo-header" alt="Unaiza City" />
            </a>
            <nav>
                <a href="./index.php">
                    <h3 class="active">Home</h3>
                </a>
                <a href="./about-us.php">
                    <h3>About</h3>
                </a>
                <a href="./trips.php">
                    <h3>Trips</h3>
                </a>
                <a href="./contact.php">
                    <h3>Contact</h3>
                </a>
            </nav>
            <div class="right">
                <a class="contact" href="login.php">Contact Us</a>
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
                <a href="./contact.php">
                    Contact Us
                </a>
            </h3>
        </nav>
    </aside>