<?php
/**
 * Template for single post view
 * @package themify
 * @since 1.0.0
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) :	while ( have_posts() ) : the_post(); ?>

		<!-- layout-container -->
		<div id="layout" class="pagewidth clearfix">

		<?php themify_base_content_before(); // hook ?>
		<!-- content -->
		<div id="content" class="list-post">
			<?php themify_base_content_start(); // hook ?>

			<?php get_template_part( 'includes/loop', 'single' ); ?>

			<?php
			wp_link_pages( array(
				  'before'         => '<p><strong>' . __( 'Pages:', 'themify' ) . ' </strong>',
				  'after'          => '</p>',
				  'next_or_number' => 'number'
			 ));
			?>

			<?php if ( ! is_attachment() ) : ?>

				<?php get_template_part( 'includes/post-nav' ); ?>

				<?php comments_template(); ?>

			<?php endif; ?>

			<?php themify_base_content_end(); // hook ?>
		</div>
		<!-- /content -->
		<?php themify_base_content_after(); // hook ?>

<?php endwhile; endif; ?>

<?php
/////////////////////////////////////////////
// Sidebar							
/////////////////////////////////////////////
get_sidebar(); ?>

</div>
<!-- /layout-container -->

<?php get_footer(); ?>