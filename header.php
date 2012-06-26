<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' '; bloginfo( 'name' );
	} ?></title>
	
	
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/mailing-list.js"></script>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/960_24_col.css" />
	
</head>

<body <?php body_class(); ?>>

	<section>
		<div id="header">
			<div class="container">
			<!--
				<? /* Fighting SOPA */ ?>
				<a style="width:600px;height:100px;vertical-align:middle;text-align:center;background-color:#000;position:absolute;z-index:1001;top:20px;right:280px;background-image:url(http://americancensorship.org/images/stop-censorship-small.png);background-position:center center;background-repeat:no-repeat;" href="http://americancensorship.org"></a>
				
				<script type="text/javascript" src="http://americancensorship.org/js"></script>
			-->
				<img src="<?php header_image(); ?>" width="<?php echo header_image_width; ?>" class="right" height="<?php echo header_image_height; ?>" alt="<?php bloginfo('name'); ?>" />
				
				<ul id="social">
					<li>
						<a href="http://www.facebook.com/techmonks" class="facebook"></a>
					</li>
					<li>
						<a href="http://twitter.com/TheTechMonks" class="twitter" title="@thetechmonks"></a>
					</li>
					<li>
						<a href="<?php bloginfo('rss2_url'); ?>" class="rss" rel="nofollow"></a>
					</li>
				</ul>
				
				
			</div>
		</div>
	</section>
	
	<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
	
	<section>
		<div id="navigation">
			<div class="container">
			<!--
				<ul id="main-nav" class="pills">
					<li><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">The Hosts</a></li>
					<li><a href="">Episodes</a></li>
					<li><a href="">Merchandise</a></li>
					<li><a href="">Schedule</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			-->
			
			
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '',  'items_wrap' => '<ul id="main-nav" class="pills">%3$s</ul>' ) ); ?>
			
			</div><!-- .container -->
		</div><!-- #navigation -->
	</section>
	
	
	

			


			
			
			
			
			
			
			
			