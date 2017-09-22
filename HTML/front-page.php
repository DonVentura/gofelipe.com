<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header( 'home' ); ?>

	
        <div id="content" class="site-content" role="main">

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

					<div class="title-content">
                        <div class="video-area">
						<div class="video-container">
                            <iframe width="760" height="420" src="https://www.youtube.com/embed/BtqNcRq0OdI" frameborder="0" allowfullscreen></iframe>
                        </div>
						</div><!-- video-area video outer area -->

					<div class="felipe-content">
                        <?php the_content(); ?>
                        
					</div><!-- .felipe-content -->
                        
				<!-- #post -->
                   <div class="home-portfolio-row">
                        <h2 class="home-portfolio">Just a Taste <a href="/work/" class="button-seeMore">SEE MORE<img src="http://gofelipe.com/wp-content/uploads/2015/05/button-arrow.png" alt="Button Arrow" width="25" height="22"></a></h2>

                        
                   </div>     
					</div><!-- .title-content -->
				
			<?php endwhile; ?>
            <br>
        <!-- .portfolio-content -->
            <?php echo do_shortcode( '[viba_portfolio slug="homepage"]' ) ?>
        <!-- END.portfolio-content -->
            
		</div><!-- #content -->
	<!-- #primary -->


<?php get_footer(); ?>