<?php get_header(); ?>

<section id="page">
	
	<div class="container_24">

		<div id="content">

	<h1><?php printf( __( 'Category Archives: %s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
	
	<?php echo category_description(); /* displays the category's description from the Wordpress admin */ ?>
	
	<div class="clear"><br /></div>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
			
			</div>
			
		</div>
		
		<?php if (in_category( 'Episodes' )) { ?>
		
		<div class="post-audio">
			<h5>Listen to the Episode</h5>
			
			<?php the_powerpress_content(); ?>
			
		</div>
		
		<?php } ?>
		
		<?php comments_template( '', true ); ?>
		
	</div><!--.post-single-->
	
	
	<?php endwhile; else: ?>
		<div class="no-results">
			<p><strong>There has been an error.</strong></p>
			<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--noResults-->
	<?php endif; ?>
	
	
	<?php if(function_exists('pw_paginate')) { pw_paginate(); } ?>


</div><!--#content-->

		<?php get_sidebar(); ?>

	</div><!-- .container_24 -->

</section>

<?php get_footer(); ?>