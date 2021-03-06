<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page-header">
		<h1 class="page-title"><?php echo get_the_title(); ?></h1>
		<p class="page-intro">Posted <?php echo get_the_date(); ?></p>
	</div>
	<div class="main-body l">
		<div class="l-main lc lc-single">
			<div class="text">
				<?php the_content(); ?>
				
				<div class="post-footer">
					<p>Posted by <?php the_author(); ?> on <?php the_date(); ?> in <?php the_category(', '); ?></p>
					<?php the_tags(); ?>
				</div>
			</div><!--end text-->
		</div><!--end l-main-->
	<?php endwhile; endif; ?>
		<?php include (TEMPLATEPATH . '/includes/well-newsletter.php');  ?>
		<div class="l-sidebar">
			<?php include (TEMPLATEPATH . '/includes/sidebar-blog.php');  ?>
		</div><!--end l-sidebar-->
	</div><!--end main-body-->
<?php get_footer(); ?>