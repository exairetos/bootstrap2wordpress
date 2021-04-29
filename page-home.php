<?php
/*
    Template Name: Home Page
 */


get_header(); ?>

	<!-- HERO 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'hero'); ?>

    <!-- OPT IN SECTION 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'optin'); ?>

    <!-- BOOST YOUR INCOME 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'boost'); ?>

    <!-- WHO BENEFITS 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'benefits'); ?>

    <!-- COURSE FEATURES 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'coursefeatures'); ?>

    <!-- PROJECT FEATURES 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'projectfeatures'); ?>

    <!-- VIDEO FEATURETTE 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'featurette'); ?>

    <!-- INSTRUCTOR 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'instructor'); ?>

    <!-- TESTIMONIALS 
    =========================================================== -->
    <?php get_template_part('template-parts/content', 'testimonials'); ?>

<?php get_footer(); ?>
