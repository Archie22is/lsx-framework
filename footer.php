<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lsx
 */
?>

		</div><!-- .content -->
	</div><!-- wrap -->

	<?php lsx_footer_before(); ?>

	<footer class="content-info container" role="contentinfo">
	  	<div class="row">
	    	<div class="col-sm-12">

	    		<?php lsx_footer_top(); ?>

	      		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>

	      		<?php lsx_footer_bottom(); ?>
	      		
	    	</div>
	  	</div>
	</footer>

	<?php lsx_footer_after(); ?>

<?php wp_footer(); ?>

<?php /*wp_footer(); TODO */ ?>
<?php lsx_body_bottom(); ?>
</body>
</html>