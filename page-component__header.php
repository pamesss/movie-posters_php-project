<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Posters | <?php echo $title?></title>
    <link rel="shortcut icon" href="assets/_images/_home/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="./assets/styles/media-queries.css">
    <link rel="stylesheet" href="./assets/styles/animations.css">
    <?php echo "<link rel='stylesheet' type='text/css' href='$pageStyle'>";?>
</head>

<body>
    <div class="layout__flex">
    <?php include ('./page-component__navbar.php');?>
    <section class="content__box"> 
        <header class="header__navbar">
            <button class="header__navbar__hamburger">☰</button>
            <img class="header__logo" src="assets/_images/_home/logo.png" alt="Old movie roll of tape"><h1 class="home__header__title"><b>MOVIE</b> POSTERS</h1>
        </header>
        