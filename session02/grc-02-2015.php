<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<?php
// we declare in order all the constants and all the variable first

const STYLESHEET_PATH = "./css/";
const SCRIPTS_PATH = "./js/";

$lessonNumber = 2;
$myCss = "style.css";
// $myCssHighlighter = "prism.css";
// $myJsHighlighter = "prism.js";

?>

	<title>PHP lesson <?php echo $lessonNumber; ?></title>

	<link rel="stylesheet" href="<?php echo STYLESHEET_PATH . $myCss; ?>" type="text/css">
	<link rel="stylesheet" href="<?php //echo STYLESHEET_PATH . $myCssHighlighter; ?>" type="text/css">
	<!-- https://highlightjs.org -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/default.min.css">
</head>
<body>
	<header>
		<h2>Second PHP lesson 2015</h2>
	</header>

	<main>
		<div class="wrapper">
		
			<div class="content">
			</div><!-- end of .content -->

			<div class="content-extra">
			</div><!-- end of .content-extra -->
			
		</div><!-- end of .wrapper -->

	</main>

	<footer>
		<h4>
			TESTING HIGHLIGHT.JS
		</h4>
	</footer>

<pre><code class="php">
	the outcome is pretty much the same as PRISM.JS

	// pre-existing HTML is stripped off in highlight.js as well

	echo '&lt;p>' . 'My PHP name is' . ' ' . $myName . '&lt;/p>';

	echo '&lt;p>and my height [' . $myHeightCm . 'cm] in feet is:&lt;/p>';

	echo $myHeightCm / 30.48 . '\'' . '&lt;br>';

	echo '&lt;pre>&lt;code>{FT = CM/30.48 <---> CM = 30.48*FT}&lt;/code>&lt;/pre>';

	echo '&lt;p>or using "&lt;em>round&lt;/em>" [' . $roundLink . '] is: &lt;br>&lt;br> '	. round ( $myHeightCm / 30.48 ) . '\'&lt;/p>';
</code></pre>

<script src="<?php //echo SCRIPTS_PATH . $myJsHighlighter; ?>"></script>
<!-- https://highlightjs.org -->
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>