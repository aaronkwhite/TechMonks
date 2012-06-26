<?
/*
	Template Name: Articles
*/
?>

<?php get_header(); ?>

<section id="page">
	
	<div class="container_24">

		<div id="content">

			<h1>TechMonks Blog</h1>

			<?php query_posts(array ( 'category_name' => 'Article') ); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php if ( in_category('Article') ) { ?>

			        <div class="post-single">
				
						<div class="post-meta">
						
							<div class="meta-date">
								<span class="meta-day">
									<?php the_time('j'); ?>
								</span>
								
								<span class="meta-year">
									<?php the_time('M'); ?>
									<br />
									<?php the_time('Y'); ?>
								</span>
							</div>
							
							<div class="meta-meta">
								
								<h4>Author</h4>
								<p><?php the_author(); ?></p>
								<? /* <p><?php the_author_posts_link() ?></p> */ ?>
								
								
								<h4>Category</h4>
								<p><?php the_category(', ') ?></p>
								
								<h4>Comments</h4>
								<p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
								
								<h4>Tags</h4>
								<p><?php if (the_tags('', ', ', ' ')); ?></p>
							
							</div>
						</div><!--.postMeta-->
			
			
						<div class="post-content">
							<div class="post-title">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</div>
							
							<div class="post-data">
							
							<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
							
							
							<?php the_content(__('Read more'));?>
							
							</div><!--.post-data-->
							
						</div><!--.post-content-->
				
						<?php comments_template( '', true ); ?>
			
					</div><!--.post-single-->


	 			<?php } else { ?>

				<h1>There was an ERROR in the Matrix</h1>
			
				<?php } ?>

				<?php endwhile; else: ?>
		
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	
			<?php endif; ?>
	
	
			<?php if(function_exists('pw_paginate')) { pw_paginate(); } ?>


		</div><!--#content-->

		<?php get_sidebar(); ?>

	</div><!-- .container_24 -->

</section>

<?php get_footer(); ?>