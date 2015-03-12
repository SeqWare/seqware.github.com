<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<title>SeqWare &rsaquo; Page Not Found</title>
<meta content='nanoc 3.7.1' name='generator'>
<link href='/assets/style-v17.css' media='screen' rel='stylesheet' type='text/css'>
<link href='http://feeds.feedburner.com/seqware' rel='alternate' title='The SeqWare Blog' type='application/atom+xml'>
<script type="text/javascript"> var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-34523087-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })(); </script>
</head>
<body>
<div class='wrapper'>
<!-- ***** navigation ***** -->
<div class='nav'>
<ol>
<li><a href="/"><span>Home</span></a></li>
<li><a href="/blog/"><span>News</span></a></li>
<li><a href="/docs/"><span>Documentation</span></a></li>
<li><a href="/community/"><span>Community</span></a></li>
<li><a href="/partners/"><span>Partners</span></a></li>
<li><a href="/about/"><span>About</span></a></li>
</ol>
</div>
<!-- ***** sidebar ***** -->
<div class='side'>
<div class='section odd'>
<a class="twitter-timeline" href="https://twitter.com/SeqWare" data-widget-id="346665526510096385">Tweets by @SeqWare</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<div class='section even'>
<p>The current version of SeqWare is 1.1.0, released on March 12th, 2015. See the <a href="/release-notes/">release notes</a> for details.</p>
</div>
</div>
<!-- ***** body ***** -->
<div class='body'>
<div class='article'>
<div class='header'>
<h1>Page Not Found</h1>
</div>
<p>Unfortunately, the page you requested was not found on the server. It may have have been removed; the site was recently restructured quite a bit and some outdated pages were removed in the process.</p>

<p>If you arrived on this page by entering an address (URL) manually, double-check it to make sure that you did not accidentally mistyped the address.</p>

<?php

########## CONFIGURATION #####################################################

// E-mail settings
$src_email_address = 'webmaster@seqware.github.com';
$dst_email_address = 'briandoconnor@gmail.com';

// The name of the site
$site_name = 'SeqWare';

// Should a mail be sent if there is no referrer?
$send_mail_if_no_referrer = false;

########## DO NOT CHANGE BELOW THIS LINE #####################################

// Get path and URL of this page
$this_path = $_SERVER['REQUEST_URI'];
$this_url  = 'http://' . $_SERVER['SERVER_NAME'] . $this_path;

// Check whether page has referrer
$has_referrer = isset($_SERVER['HTTP_REFERER']);

// Send mail if necessary
$should_send_mail = true;
if(!$has_referrer && !$send_mail_if_no_referrer)
	$should_send_mail = false;
if($should_send_mail)
{
	$subject = '404 @ ' . $site_name . ': ' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$message = 'The following URL caused a 404 error on ' . $site_name . ':' . "\n\n" .
		'URL:      ' . 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "\n" .
		'Referrer: ' . $_SERVER['HTTP_REFERER'];
	$headers = 'From: ' . $src_email_address;

	mail($dst_email_address, $subject, $message, $headers);
}

?>

</div>
</div>
</div>
<!-- ***** footer ***** -->
<div id='footer'>
<p>SeqWare &copy; 2007–2014 Brian O&#8217;Connor. SeqWare is released under the a <a rel="license" href="http://www.gnu.org/licenses/licenses.html">GNU GPL v3</a>. This site is built using the excellent <a href="http://nanoc.ws/">nanoc</a> tool and example site along with the <a href="http://www.fonts.info/info/press/free-fonts-for-font-face-embedding.htm">Graublau</a> and <a href="https://en.wikipedia.org/wiki/Gentium">Gentium</a> fonts.</p>
</div>
</body>
</html>
