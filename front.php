<?
/*
	Template Name: Landing
*/
?>

<?php get_header(); ?>

<section id="landing">
	
	<div class="container_24">
	
		<div class="grid_14 center">
	
		<img src="<? bloginfo('template_url'); ?>/images/intro_text.png" width="510" height="170" alt="A Weekly Podcast about Technology, Entertainment, and the Local Startup Scene." />
		
		<div class="clear"></div>
		
		<span class="itunes_sub left">
			<a href="itms://itunes.apple.com/us/podcast/tech-monks-podcast/id464899179" onclick="javascript: _gaq.push(['_trackEvent','Click', 'Landing', 'iTunes Subscribe']);"><img src="<? bloginfo('template_url'); ?>/images/itunes_subscribe.png" width="250" height="70" alt="Subscribe to the TechMonks in iTunes" /></a>
		</span>
		
		<span class="stitcher_sub right">
			<a href="http://stitcher.com/listen.php?fid=19062" onclick="javascript: _gaq.push(['_trackEvent','Click', 'Landing', 'Stitcher Listen']);"><img src="<? bloginfo('template_url'); ?>/images/stitcher_listen.png" width="250" height="70" alt="Subscribe to the TechMonks in iTunes" /></a>
		</span>
		
	</div>
	
		<div class="grid_2">&nbsp;</div>
	
		<div class="grid_6 center">
			
			<img src="<? bloginfo('template_url'); ?>/images/mic_blurry.png" width="190" height="261" alt="A Weekly Podcast about Technology, Entertainment, and the Local Startup Scene." />
			
		</div>
	
		<div class="grid_2">&nbsp;</div>
		
		<section id="newsletter" class="grid_24">
			
			<div class="grid_10" id="response">
				
				<?php require_once('inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
				
				<span class="robot">Receive Updates via email...</span>
				
			</div>
			
			<div class="push_1">
				
				<form id="signup" action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
				  <fieldset>
						  
					  <input type="text" name="email" id="email" value="Your email address" onfocus="doClear(this)" />
					  <input type="submit" name="submit" value="Sign Up" class="signup" alt="Join" />
				  </fieldset>
				</form>
				
			</div>
			
		</section>
		
	</div><!-- .container_24 -->

</section><!-- #landing -->




<section id="latest">
	
	<div class="container_24">
	<div class="grid_24">
	
	<h2>Latest Episodes</h2>
	
	<ul id="latest_episodes">
	
	<?php
	    $recentEpisodes = new WP_Query();
	    $recentEpisodes->query('showposts=8&category_name=Episodes'); 
	?>
	
	<?php while ($recentEpisodes->have_posts()) : $recentEpisodes->the_post(); ?>
	    
	    <li>
	    	
	    	<?php if ( get_post_meta($post->ID, 'latest_img', true) ) : ?>
	    	
	    	    <a href="<?php the_permalink() ?>" class="recept_ep"><img src='<?php echo get_post_meta($post->ID, "latest_img", true); ?>' width="210" height="110" alt="<?php the_title(); ?>" /></a>
				
	    	<?php else : ?>
	    	
	    		<a href="<?php the_permalink() ?>" class="recept_ep"><img src="<? bloginfo('template_url'); ?>/images/episode_blank.png" width="210" height="110" alt="<?php the_title(); ?>" /></a>
	    	
	    	<?php endif; ?>

	    	
	    	<h6><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo TruncTitle(get_the_title()); ?></a></h6>
			<span class="recent_ep_date"><?php the_time('F j, Y'); ?></span>
			

	    </li>
	<?php endwhile; ?>

	</ul>
	
	</div><!-- .grid_24 -->
	</div><!--.container_s4 -->
	
</section>


<?php get_footer(); ?>

