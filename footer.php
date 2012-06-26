

	<div class="clear"></div>

	<section>
			<div id="footer"><footer>
					<div class="container">
					
						<div id="footer-content" class="float-left">
						
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '',  'items_wrap' => '<ul id="footer-nav" class="left">%3$s<li></ul>' ) ); ?>
							
						 	<ul id="footer-legal" class="right">
						 		<li>&copy; <?php echo date("Y") ?> The Tech Monks Podcast</li>
						 		<li><a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow">Grab the Feed(RSS)</a></li>
						 		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow">Comments (RSS)</a></li>
						 	</ul>
							
						</div><!--#footer-content-->
					</div><!--.container-->
				</footer>
			</div><!--#footer-->
	</section>

	<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
	
	
	<? /* GOOGLE TRACKING CODE - DO NOT REMOVE EVER! */?>
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-5228613-11']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
	
	
	<script type="text/javascript">
		function doClear(theText) {
				if (theText.value == theText.defaultValue) {
					theText.value = ""
				}
			}
	</script>
	
</body>
</html>