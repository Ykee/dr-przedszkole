<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- Included CSS Files (Uncompressed) --><!--
<link rel="stylesheet" href="css/foundation.css">
-->

	<!-- Included CSS Files (Compressed) -->
	<link rel="stylesheet" href="css/foundation.min.css">

	<script src="scripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags --><!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<!-- Header and Nav -->
<div class="row">
	<div class="three columns">
		<h1><a href=""><img src="css/images/logo.png" alt="Dalej Razem - Multimedia" /></a></h1>
	</div>
</div>
<!-- End Header and Nav -->

<div class="row">
	<!-- Main Content Section -->
	<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
	<div class="nine columns push-three">
		<div class="row">
			<?php echo $content; ?>
		</div>
	</div>

	<!-- Nav Sidebar -->    <!-- This is source ordered to be pulled to the left on larger screens -->
	<div class="three columns pull-nine">
		<ul class="side-nav">
			<li><a href="#">Section 1</a></li>
			<li><a href="#">Section 2</a></li>
			<li><a href="#">Section 3</a></li>
			<li><a href="#">Section 4</a></li>
			<li><a href="#">Section 5</a></li>
			<li><a href="#">Section 6</a></li>
		</ul>
	</div>
</div>

<!-- Footer -->
<footer class="row">
	<div class="twelve columns">
		<hr />
		<div class="row">
			<div class="six columns">
				<p>&copy; Copyright no one at all. Go to town.</p>
			</div>
			<div class="six columns">
				<ul class="link-list right">
					<li><a href="#">Section 1</a></li>
					<li><a href="#">Section 2</a></li>
					<li><a href="#">Section 3</a></li>
					<li><a href="#">Section 4</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
