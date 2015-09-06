<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chicago
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

			<?php $getpagecontent = new WP_Query("page_id=148"); 
			while($getpagecontent ->have_posts()) : $getpagecontent ->the_post();?>
			       <h3><?php the_title(); ?></h3>
			       <?php the_content(); ?>
			<?php endwhile; ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
