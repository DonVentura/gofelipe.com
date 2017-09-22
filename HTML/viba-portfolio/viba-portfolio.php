<?php
/**
 * The template for displaying Viba Portfolio for Twenty Thirteen Theme
 */
 
get_header(); ?>
 
    <div id="primary" class="content-area vp-twentythirteen">
        <div id="content" class="site-content" role="main">
 
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
                <div class="entry-content-portfolio">
                    <?php viba_portfolio_content(); ?>
                </div><!-- .entry-content -->
 
            </article><!-- #post -->
 
        </div><!-- #content -->
    </div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>