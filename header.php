<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single product </title>
<?php wp_head(); ?>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo"><img src="http://localhost/single/wp-content/uploads/2023/05/TRANS-01-1.svg" alt="LOGO"></div>
            <div class="push-left">
              <button id="menu-toggler" data-class="menu-active" class="hamburger">
                <span class="hamburger-line hamburger-line-top"></span>
                <span class="hamburger-line hamburger-line-middle"></span>
                <span class="hamburger-line hamburger-line-bottom"></span>
              </button>
             <i  class="bi bi-cart-check-fill cart-icon"></i> <sup id="cart-count" style="font-size: 20px;">0</sup>
          
              <!--  Menu compatible with wp_nav_menu  -->
              <ul id="primary-menu" class="menu nav-menu">
                <li class="menu-item current-menu-item"><a class="nav__link"  href="#">Home</a></li>
                <li class="menu-item dropdown"><a class="nav__link"  href="#">Features</a></li>
                <li class="menu-item dropdown"><a class="nav__link"  href="#">Product</a> </li>
                <li class="menu-item "><a class="nav__link"  href="#">INSTRUCTIONS</a></li>
                <li class="menu-item cart "></li>
              </ul>

          
          
            </div>
          </nav>
          
    </header>