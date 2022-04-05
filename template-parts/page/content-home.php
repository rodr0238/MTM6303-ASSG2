<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
  *  @package WordPress
 * @subpackage MTM6303_Assg2
 * @since MTM6303 Assg2 1.0
 * 
 */

?>
<?php echo get_the_ID(); ?>
<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/<?php echo get_the_ID(); ?>-home.jpg')">
<div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <div class="text-center">
                <h1>Posuere lorem Ipsum</h1>
             
               <?php //the_content(); ?>
               
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 
               <a href="./about.html" title="" class="btn btn-lg btn-primary">About Us</a>
             
                </div>

        </div>
</div></div></div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                <h2><?php // echo get_the_title();?></h2>
             
             <div class="entry-content-page tm-mb-6">
               <?php the_content(); ?>
                  
                </div>
            </div>
        </div>
     </div>
 </div>
</div>
   
