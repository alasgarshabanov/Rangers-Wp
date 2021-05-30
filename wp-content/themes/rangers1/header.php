<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rangers
 */
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soccer | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/fav.png">
    <link rel="profile" href="https://gmpg.org/xfn/11">




    <?php wp_head(); ?>
</head>




<body <?php body_class('home-two'); ?>>
    <?php wp_body_open(); ?>


    <!--Preloader start here-->
    <div id="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!--Preloader area end here-->

    <?php get_template_part('template-parts/common/header-template') ?>