<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT.Server Indonesia</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="<?= BASEURL ; ?>/css/all.min.css"> -->
    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= BASEURL ; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ; ?>/css/bootstrap.min.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="<?= BASEURL ; ?>" class="logo text-decoration-none"><i class="fas fa-server" style="margin-right: 5px;"></i>PT. Server </a>

    <nav class="navbar ">
        <a class="text-decoration-none m-2" href="<?= BASEURL ; ?>">home</a>
        <a href="#" class="text-decoration-none m-2">Server</a>
        <a href="#" class="text-decoration-none m-2">Storage</a>
        <a href="#" class="text-decoration-none m-2">Networking</a>
        <a href="#" class="text-decoration-none m-2">Optional</a>
        <a href="<?= BASEURL ; ?>/about" class="text-decoration-none">About Us</a>
        
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>