<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package lsx
 */

get_header(); ?>

	<section id="primary" class="content-area <?php echo lsx_main_class(); ?>">

		<?php lsx_content_before(); ?>

		<main id="main" class="site-main" role="main">

		<?php lsx_content_top(); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">

				</h1>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php lsx_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		<?php lsx_content_bottom(); ?>

		</main><!-- #main -->

		<?php lsx_content_after(); ?>
		
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
