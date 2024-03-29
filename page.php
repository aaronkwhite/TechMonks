<?php get_header(); ?>

<section id="page">
	
	<div class="container_24">
	
	<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
			
			<article>
				
				<h1><?php the_title(); ?></h1>
				
				<?php edit_post_link('&darr;&nbsp;Edit this entry','',''); ?>
				
				<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
	
				<div class="post-content page-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!--.post-content .page-content -->
			
			</article>
			
		</div><!--#post-# .post-->

	<?php endwhile; ?>
</div><!--#content-->

	<?php get_sidebar(); ?>

	</div><!-- .container_24 -->

</section>

<?php get_footer(); ?>