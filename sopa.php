<?php
/*
	Template Name: sopa
*/
?>



<!DOCTYPE html>
<html>
	<head>
		<script src="//cdn.optimizely.com/js/21249520.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Strike Against SOPA & PIPA</title>
		<meta property="og:title" content="Strike Against Sopa!">
		<meta property="og:description" content="Internet goes on strike — blackout everywhere. On Wed Jan 18, many of your favorites sites will be unavailable to you to stop web censorship. Call your congressperson today.">
		<meta property="og:image" content="http://sopastrike.com/images/newspaper-folded.jpg">
		<meta property="og:url" content="http://sopastrike.com/strike">
		<link rel="stylesheet" type="text/css" href="http://sopastrike.com/strike/strike.css">
		<script src="http://sopastrike.com/strike/jquery.js"></script>
		<script src="http://sopastrike.com/strike/jquery.placeholder.js"></script>
		<script type="text/javascript">
		
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26978317-4']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		
		$(document).ready(function() {
		    $('input[placeholder],textarea[placeholder]').placeholder();
		    if(document.referrer != "")
		    {
		    	$('#strike-topper').html("<p>The page <strong>"+document.referrer+"</strong> is on strike today to fight SOPA and PIPA.</p>");
		    	$('#strike-topper').delay(500).slideDown();
		    }
		});
		
		</script>
	</head>
	<body>
		<div id="strike-topper"></div>
		<div id="strike-wrapper">
			<h1>Today, we are striking against <a href="http://fightforthefuture.org/pipa">censorship</a></h1>
			<h2><strong>Join the largest online protest in history</strong>: tell Congress to stop this bill now!</h2>

			<div>
				<img src="http://sopastrike.com/strike/strike-paper-new.jpg" width="800" height="323" id="paper">
			</div>
			<form action="http://act.fightforthefuture.org/page/s/sopa-strike-modal" method="post" id="write-congress">
				<div id="info">
					<input size="16" id="firstname" name="firstname" type="text"  placeholder="Name">
					<input type="email" class="text" size="48" id="email" name="email" placeholder="Email">
					
					<input size="48" id="addr1" name="addr1" type="text"  placeholder="Address">
					<input size="5" id="zip" name="zip" type="text"  placeholder="Zipcode">
					<button type="submit" class="green"><span>Write Congress Now!</span></button>
					<p style="margin-top: 20px; font-size: 16px;"><a href="http://americancensorship.org/modal/state-dept-petition/index.html">Not In The US? Petition The State Department.</a></p>
				</div>
				<div id="letter">
					<textarea id="custom-285" name="custom-285">I am writing to you as a voter in your district. I urge you to vote "no" on cloture for S. 968, the PROTECT IP Act, on Jan. 24th. The PROTECT IP Act is dangerous, ineffective, and short-sighted. It does not deserve floor consideration.  I urge my representative to vote "no" on SOPA, the corresponding House bill. 

Over coming days you'll be hearing from the many businesses, advocacy organizations, and ordinary Americans who oppose this legislation because of the myriad ways in which it will stifle free speech and innovation.  We hope you'll take our concerns to heart and oppose this legislation by voting "no" on cloture.
</textarea>
				</div>
				
			</form>
			
			<h1><a href="/">Join The Strike!</a> and <a href="/#how-to-strike">add this to your site</a></h1>
			<p>Fight For The Future may contact you about future campaigns. We will never share your email with anyone. <a href="http://fightforthefuture.org/privacy">Privacy Policy</a></p>
			
			<h2 style="margin-top: 20px; margin-bottom: -40px; font-size: 30px;">Learn More:</h2>
			
			<p class="learn-more"><a href="http://fightforthefuture.org/pipa">Watch the video</a> &middot;
    <a href="http://americancensorship.org/">American Censorship page</a> &middot;
    <a href="http://americancensorship.org/infographic.html">View the Infographic</a> <br>
    <a href="http://www.opencongress.org/bill/112-h3261/show">Read SOPA on OpenCongress</a> &middot;
    <a href="http://www.opencongress.org/bill/112-s968/show">Read PIPA on OpenCongress</a></p>
			
			<p class="learn-more">The three most definitive articles on SOPA and PIPA: <a href="http://ammori.org/2011/12/08/controversial-copyright-bills-would-violate-first-amendment-letters-to-congress-by-laurence-tribe-and-me/">Free Speech</a>, <a href="http://www.techdirt.com/articles/20111122/04254316872/definitive-post-why-sopa-protect-ip-are-bad-bad-ideas.shtml">Problems</a>, <a href="http://www.heritage.org/research/reports/2012/01/online-piracy-sopa-and-internet-security-pipa-bills-in-congress">Security</a></p>

<p><a href="http://www.fightforthefuture.org">Fight for the Future</a> is a non-profit organization fighting for people's freedoms in a new digital age.</p>
		</div>
		<script>
		// Setup tracking for form submisison on #censor
		    var trackingFn = function() {
		      window.optimizely = window.optimizely || [];
		      window.optimizely.push(["trackEvent", "SubmittedForm"]);
		    }

		    $('#write-congress').submit(function() {
		      trackingFn();
		    });		
		</script>
		
	</body>
</html>