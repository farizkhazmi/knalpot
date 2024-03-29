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
 * @package Veal
 */

get_header(); 
do_action('veal_before_blog'); ?>
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if($count == 0)
						echo "<div class='row rowa'>" ;
					elseif($count%3 == 0)
						echo "</div><!--.row--><div class='row rowa'>";
					 
					if (isset($option_setting['logo'])) :
						get_template_part( 'grid' );
					else :
						get_template_part( 'defaults/content', 'grid3-d' );
					endif;		
					
					$count++;
				?>
			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php veal_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php do_action('veal_after_blog'); ?>
<?php get_footer(); ?>