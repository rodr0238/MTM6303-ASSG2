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


 <div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page.jpg">
            </div>
        </div>
    </div>
</div>


<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1>Type something</h1>
                     </div>   
                        <p class="section-container-spacer">Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. Odio tempor
                            orci dapibus ultrices in iaculis. Lacus luctus accumsan tortor posuere ac ut consequat semper.
                            Tincidunt ornare massa eget egestas purus viverra accumsan. Odio euismod lacinia at quis. Sit
                            amet nulla facilisi morbi. At varius vel pharetra vel turpis nunc eget lorem dolor. Feugiat vivamus
                            at augue eget. Feugiat nisl pretium fusce id velit ut. Venenatis tellus in metus vulputate eu
                            scelerisque felis imperdiet. Ut placerat orci nulla pellentesque. Laoreet suspendisse interdum
                            consectetur libero id.
                        </p>
                        <h1><?php //echo get_the_title();?></h1>
               
               <div class="entry-content-page tm-mb-6">
                 <?php //the_content(); ?>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>