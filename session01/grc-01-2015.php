	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<?php

// we declare in order all the constants and all the variable first

const STYLESHEET_PATH = "./css/";
const SCRIPTS_PATH = "./js/";
const INCHES_PER_FOOT = 12;
const CENTIMETERS_PER_INCH = 2.54;
const CENTIMETERS_PER_METER = 100;

$lessonNumber = 1;
$myCss = "style.css";
$myCssHighlighter = "prism.css";
$myJsHighlighter = "prism.js";
$myName = "Giorgio";
$myHeightCm = 182;
$roundLink = "<a href='http://php.net/manual/en/function.round.php' target='_blank'>php.net/manual/en/function.round.php</a>";

?>

	<title>PHP lesson <?php echo $lessonNumber; ?></title>
	<link rel="stylesheet" href="<?php echo STYLESHEET_PATH . $myCss; ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo STYLESHEET_PATH . $myCssHighlighter; ?>" type="text/css">
</head>
<body>
	<header>
		<h2>First PHP lesson 2015</h2>

<pre><code class="language-php line-numbers">
	// we declare in order all the constants and all the variable first

	const STYLESHEET_PATH = "./css/";
	const SCRIPTS_PATH = "./js/";
	const INCHES_PER_FOOT = 12;
	const CENTIMETERS_PER_INCH = 2.54;
	const CENTIMETERS_PER_METER = 100;

	$lessonNumber = 1;
	$myCss = "style.css";
	$myCssHighlighter = "prism.css";
	$myJsHighlighter = "prism.js";
	$myName = "Giorgio";
	$myHeightCm = 182;
	$roundLink = "&lt;a href='http://php.net/manual/en/function.round.php' target='_blank'>http://php.net/manual/en/function.round.php&lt;/a>";

	// pre-existing HTML is stripped off in prism.js
</code></pre>		
	
	</header>

	<main>
		<div class="content">
<?php

	echo '<p>' . 'My PHP name is' . ' ' . $myName . '</p>';
	echo '<p>and my height [' . $myHeightCm . 'cm] in feet is:</p>';
	echo $myHeightCm / 30.48 . '\'' . '<br>';

	echo '<pre><code>{FT = CM/30.48 <---> CM = 30.48*FT}</code></pre>';

	echo '<p>or using "<em>round</em>" [' . $roundLink . '] is: <br><br> '	. round ( $myHeightCm / 30.48 ) . '\'</p>';

?>

<pre><code class="language-php line-numbers">
	echo '&lt;p>' . 'My PHP name is' . ' ' . $myName . '&lt;/p>';

	echo '&lt;p>and my height [' . $myHeightCm . 'cm] in feet is:&lt;/p>';

	echo $myHeightCm / 30.48 . '\'' . '&lt;br>';

	echo '&lt;pre>&lt;code>{FT = CM/30.48 <---> CM = 30.48*FT}&lt;/code>&lt;/pre>';

	echo '&lt;p>or using "&lt;em>round&lt;/em>" [' . $roundLink . '] is: &lt;br>&lt;br> '	. round ( $myHeightCm / 30.48 ) . '\'&lt;/p>';

	// pre-existing HTML is stripped off in prism.js
</code></pre>

		</div>

		<div class="content-extra">
			<h4>Extra tips from <a href="http://www.html.it/pag/53393/il-primo-script-php/" target="_blank">html.it</a></h4>
			<p class="bonus">				
<?php

# comment that I never use

$daughterName = 'Ellen';
//echo "my daughter name is " . $daughterName;

function display_names( $daughterName ) {
	echo "Hello <strong>" . $daughterName . " !</strong>"; // without invoking the function name or return or print this echo here won't work
}

display_names( $daughterName ); 	//this prints all the output
//print $daughterName; 			//this print only the name
//echo $daughterName;			//this echo only the name

?>
			</p>

<pre><code class="language-php line-numbers">
	# comment that I never use

	$daughterName = 'Ellen';
	//echo "my daughter name is " . $daughterName;

	function display_names( $daughterName ) {
		echo "Hello &lt;strong>" . $daughterName . " !&lt;/strong>"; // without invoking the function name or return or print this echo here won't work
	}

	display_names($daughterName); 	//this prints all the output
	//print $daughterName; 			//this print only the name
	//echo $daughterName;			//this echo only the name

	// pre-existing HTML is stripped off in prism.js
</code></pre>

<?php

function addition( $a, $b ) {
	$addition = $a + $b;

	//return $addition;
}

$addition = addition( 5, 8 );

echo '<br>Addition of $a + $b = ' . $addition;

?>

<pre><code class="language-php line-numbers">
	function addition( $a, $b ) {
		$addition = $a + $b;

		return $addition;
	}

	$addition = addition( 5, 8 );

	echo '&lt;br>Addition of $a + $b = ' . $addition;

	// pre-existing HTML is stripped off in prism.js
</code></pre>

		</div>

	</main>

	<footer>
		<h4>
			Exercise completed.
		</h4>
	</footer>

<script src="<?php echo SCRIPTS_PATH . $myJsHighlighter; ?>"></script>

</body>
</html>
