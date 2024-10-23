<?php if (!defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script nonce="et5s+/NYlSFXSYex5cBpYih3HvHFsM1RsQmXlVVCse8=">
        var controller = new ScrollMagic.Controller();
    </script> 

</head>
<style>
#no-mobile {
    display: none; /* No mostrar por defecto */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: white;
    z-index: 9999; 
}
.centered-div {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Desplaza el div para que esté perfectamente centrado */
    width: 300px; /* Ancho opcional */
    height: 200px; /* Alto opcional */
    background-color: #f0f0f0; /* Color de fondo opcional */
    text-align: center; /* Centra el texto dentro del div */
    padding: 20px; /* Espaciado interno */
    border-radius: 10px; /* Bordes redondeados opcionales */
}

@media only screen and (max-width: 768px) {
    #no-mobile {
        display: block;
    }
}
</style>
<div id="no-mobile">
    <div class="centered-div">
    Versión móvil no disponible
    </div>
</div>
<body <?php body_class(); ?>>     
    
    <div id="site-wrapper">

        <div id="site">

            <main class="overflow-hidden">

                <div id="site-nav">
                    <?php get_template_part('partials/common/site-nav'); ?>
                </div><!-- #site-nav -->
