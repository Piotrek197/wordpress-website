<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Piotr Okrój">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <img src="<?php echo bloginfo("template_directory");?>/assets/images/background-images/logo.png" alt="logo" id="logo">
        
            <img src="<?php echo bloginfo("template_directory");?>/assets/images/background-images/menu.svg" class="hamburger-menu">
        <nav>
            <ul>
                <li><span class="list-number">01</span><a href="/">Start</a></li>
                <li><span class="list-number">02</span><a href="#intro">Kim jesteśmy</a></li>
                <li><span class="list-number">03</span><a href="#projects">Realizacje</a></li>
                <li><span class="list-number">04</span><a href="#contact-form">Kontakt</a></li>
                <li><span class="list-number">05</span><a href="#">Blog</a></li>
            </ul>
        </nav>
        
        <a href="tel:79636544523" class="call-us-link">
            <div class="call-us-icon">
                <img src="<?php echo bloginfo("template_directory");?>/assets/images/background-images/phone.svg" alt="zadzwoń do nas">
            </div>
        </a>
        <div class="call-us-info">Odzwonimy w 19 sekund</div>
    </header>