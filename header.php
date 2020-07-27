<?php
    session_start();
    
    /*if(!isset($_SESSION['page']))
        $_SESSION['page'] = "home";
    else if (isset($_GET['page']) && $_SESSION['page'] != $_GET['page'] && !empty($_GET['page'])) {
        if($_GET['page'] == "home")
            $_SESSION['page'] = "home";
        else if($_GET['page'] == "shop")
            $_SESSION['page'] = "shop";
        else if($_GET['page'] == "about")
            $_SESSION['page'] = "about";
        else if($_GET['page'] == "contact")
            $_SESSION['page'] = "contact";
        else if($_GET['page'] == "login")
            $_SESSION['page'] = "login";
        else if($_GET['page'] == "cart")
            $_SESSION['page'] = "cart";
    }
    */
    include_once('utilities.php');
    include_once('db/database_utilities.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PEAR STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, 
        initial-scale=1, maximum-scale=1, minimum-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <!-- CSS here -->
        <link rel="stylesheet" href="CSS/owl.carousel.min.css">
        <link rel="stylesheet" href="CSS/slicknav.css">
        <link rel="stylesheet" href="CSS/animate.min.css">
        <link rel="stylesheet" href="CSS/magnific-popup.css">
        <link rel="stylesheet" href="CSS/slick.css">
        <link rel="stylesheet" href="CSS/nice-select.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link href="CSS/header-footer.css" rel="stylesheet">
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/a7b3ea38a5.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Optional JavaScript -->
        
    </head>
    <body>
        <!--? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="IMG/pear.png" style="width: 30px;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php">
                                <img src="IMG\pear.png" style="height: 25px;" alt="">
                            </a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Inicio</a></li>
                                    <li class="hot"><a href="shop.php">Tienda</a></li>
                                    <li><a href="about.php">Nosotros</a></li>
                                    <li><a href="contact.php">Contáctanos</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li> <a href="login.php"><span class="fas fa-user"></span></a></li>
                                <li><a href="cart.php"><span class="fas fa-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>