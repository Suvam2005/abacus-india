<?php
    require_once __DIR__.'../config/paths.php';

    $url = $_GET['url'] ?? 'home';
    $url = trim($url, '/');

    $routes = [
        "home" => "pages/home.php",
        "reviews" => "pages/reviews.php",
        "landing" => "landing.php",
        "about-us" => "pages/about.php",
        "gallery" => "pages/gallery.php",
        "partner-program" => "pages/partner_program.php",
        "our-leadership" => "pages/our-leadership.php",
        "contact-us" => "pages/contact.php",
        "gallery-code" => "pages/gallery-code.php"
    ];

    if(array_key_exists($url, $routes)){
        require_once $routes[$url];
    }
    else{
        require_once "pages/book_class.php";
    }
?>