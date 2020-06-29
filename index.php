<?php
    session_start();
    
    if(!isset($_SESSION['page']))
        $_SESSION['page'] = "resolution";
    else if (isset($_GET['page']) && $_SESSION['page'] != $_GET['page'] && !empty($_GET['page'])) {
        if($_GET['page'] == "home")
            $_SESSION['page'] = "resolution";
        else if($_GET['page'] == "nosotros")
            $_SESSION['page'] = "nosotros";
        else if($_GET['page'] == "resolution")
            $_SESSION['page'] = "resolution";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BRUTAL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, 
        initial-scale=1, maximum-scale=1, minimum-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/header-footer.css">
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/a7b3ea38a5.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Optional JavaScript -->
        <script src="JS/menu.js"></script>
    </head>
    <body>
        <?php require_once "header.php";?>
        <main>
            <?php require_once $_SESSION['page'] . ".php";?>
        </main>
        <?php require_once "footer.php";?>
    </body>
    <!-- Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
