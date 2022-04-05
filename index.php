<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Assg2
 */


get_header(); 
?>





<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/img-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1><?php echo get_the_title();?></h1>
                <?php
           while ( have_posts() ) : the_post(); ?>
           <div class="entry-content-page tm-mb-6">
             <?php the_content(); ?>

           </div>
           <?php 
           endwhile;
           ?>
                 <a href="./about.html" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    
                    <h2><?php echo get_the_title();?></h2>
                <?php
                    while ( have_posts() ) : the_post(); ?>
           <div class="entry-content-page tm-mb-6">
             <?php the_content(); ?>

           </div>
           <?php 
           endwhile;
           ?>
                </div>
            </div>
        </div>
     </div>
 </div>


 <?php wp_footer(); ?>