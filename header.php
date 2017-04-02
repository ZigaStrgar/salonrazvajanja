<!DOCTYPE html>
<?php
include_once './core/session.php';
?>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <!-- page details -->
    <meta name="description" content="Salon razvajanja - ker si zaslužite le najboljše! ">
    <meta name="keywords"
          content="salon, kozmetika, razvajanja, deja, salon razvajanja, razvajanje, kozmetični salon, kozmetični salon Maribor, pedikura, masaša, masaže, nega obraza, depilacija, depiliranje, intimna depilacija, brazilska depilacija, kozmetične storitve">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Salon Razvajanja">

    <!-- visual info -->
    <title>Salon razvajanja</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <meta name="theme-color" content="#ffffff">
    <!-- css -->
    <link href="styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owlcarousel/assets/owl.theme.default.min.css">
</head>
<body>
<main>
    <header class="header">
        <div class="container">
            <div class="flex flex--between flex--middle" style="height: 70px;">
                <a href="index.php"><img src="images/logo.png"></a>
                <nav class="header__links flex flex--middle">
                    <a href="index.php">Domov</a>
                    <a href="storitve.php">Storitve</a>
                    <a href="cenik.php">Cenik</a>
                    <a href="onas.php">O nas</a>
                    <?php
                    if ( $_SESSION["logged"] ) {
                        echo "<a href='admin/logout.php'>Odjava</a>";
                        echo "<a href='admin/index.php'>Urejaj stran</a>";
                    }
                    ?>
                </nav>
                <button type="button" class="header__btn mr15">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>