<?php if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) ob_start("ob_gzhandler"); else ob_start(); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Best Tour Plan - Hotel Booking</title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
  <link rel="manifest" href="favicon/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />
</head>
<body>
  <header class="navbar navbar_mobile_fixed">
    <div class="container">
      <div class="navbar-top">
        <a href="index.php" class="logo">
          <img src="img/horizontal-logo.svg" alt="Logo: Best Tour Plan" class="logo__image" />
        </a>
        <form action="#" class="search navbar__search navbar__search_mobile_hidden">
          <input type="text" class="search__input" placeholder="Search Location" autofocus />
          <button class="search__button button">
            <img src="img/search.svg" alt="Icon: search" />
          </button>
        </form>
        <a href="#" class="user navbar__user navbar__user_mobile_hidden">
          <img src="img/user-avatar.jpg" alt="Avatar: Nathan" class="user__avatar" />
          <span class="user__name">Nathan</span>
        </a>
        <!-- /.user -->
        <button class="menu-button navbar-top__menu-button">
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
        </button>
      </div>
      <!-- /.navbar-top -->
    </div>
    <!-- /.container -->
    <div class="navbar__nav">
      <nav class="container navbar__container">
        <ul class="navbar__menu">
          <li class="navbar__item navbar__item_mobile_visible">
            <a href="#" class="user navbar__user navbar__user_mobile_visible">
              <img data-src="img/user-avatar.jpg" src="#" alt="Avatar: Nathan" class="user__avatar user__avatar_mobile" />
              <span class="user__name user__name_mobile">Nathan</span>
            </a>
          </li>
          <li class="navbar__item navbar__item_mobile_visible">
            <form action="#" class="search navbar__search navbar__search_mobile_visible">
              <input type="text" class="search__input search__input_mobile" placeholder="Search Location" />
              <button class="search__button">
                <img data-src="img/search.svg" src="#" alt="Icon: search" />
              </button>
            </form>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">All Deals</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Hotels</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Activities</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Hotel Day Packages</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Restaurants</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Events</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Rodrigues</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>