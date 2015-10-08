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
$myCssHighlighter = "prism.css";
$myJsHighlighter = "prism.js";

?>

	<title>PHP lesson <?php echo $lessonNumber; ?></title>

	<link rel="stylesheet" href="<?php echo STYLESHEET_PATH . $myCss; ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo STYLESHEET_PATH . $myCssHighlighter; ?>" type="text/css">
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
			<!-- Exercise completed. -->
		</h4>
	</footer>

<script src="<?php echo SCRIPTS_PATH . $myJsHighlighter; ?>"></script>

</body>
</html>