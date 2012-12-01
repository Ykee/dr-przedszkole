<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pl"> <!--<![endif]-->
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
	<link rel="stylesheet" href="css/app.css?ver=<?php echo time(); ?>">

	<script src="scripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags --><!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<header class="header">
	<div class="row">
		<div class="four columns">
			<a class="logo" id="logo" href="<?php echo $this->createUrl("backend/index"); ?>"> <img src="css/images/logo.png" alt="Dalej Razem - Multimedia" /> </a>
		</div>
		<div class="eight columns">
			<blockquote>
				Kiedy podchodzę do dziecka, wzbudza ono we mnie dwa rodzaje uczuć: czułość wobec tego, kim jest i
				szacunek dla tego, kim może się stać. <cite>Ludwig Pasteur</cite>
			</blockquote>
		</div>
		<div class="main-menu">
			<?php
			$this->widget('zii.widgets.CMenu', array(
				'htmlOptions' => array('class' => "nav-bar"),
				'items' => array(
					array('label' => 'Główna', 'url' => array('/site/index')),
					array('label' => 'Informacje', 'url' => array('/site/info')),
					array('label' => 'Zapisy', 'url' => array('/site/page', 'view' => 'registration')),
					array('label' => 'Galeria', 'url' => array('/site/gallery')),
					array('label' => 'Kontakt', 'url' => array('/site/page', 'view' => 'contact')),
					//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			));
			?>
		</div>
	</div>
</header>

<!-- Nav Bar --><!--<div class="row">
	
</div>--><!-- End Nav -->

<div class="row">
	<?php echo $content; ?>
</div>

<!-- Footer -->
<footer>
	<div class="row">
		<div class="twelve columns">
			<?php
			$this->widget('zii.widgets.CMenu', array(
				'htmlOptions' => array('class' => "link-list"),
				'items' => array(
					array('label' => 'Główna', 'url' => array('/site/index')),
					array('label' => 'Informacje', 'url' => array('/site/info')),
					array('label' => 'Zapisy', 'url' => array('/site/page', 'view' => 'registration')),
					array('label' => 'Galeria', 'url' => array('/site/gallery')),
					array('label' => 'Kontakt', 'url' => array('/site/page', 'view' => 'contact')),
					//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			));
			?>
			<p>Adres: SPOA Dalej Razem, ul. Sienkiewicza, 55-555 Zielona Góra</p>
		</div>
	</div>
</footer>
<!-- End Footer -->

<!-- Included JS Files (Uncompressed) --><!--

<script src="scripts/jquery.js"></script>

<script src="scripts/jquery.foundation.mediaQueryToggle.js"></script>

<script src="scripts/jquery.foundation.forms.js"></script>

<script src="scripts/jquery.foundation.reveal.js"></script>

<script src="scripts/jquery.foundation.orbit.js"></script>

<script src="scripts/jquery.foundation.navigation.js"></script>

<script src="scripts/jquery.foundation.buttons.js"></script>

<script src="scripts/jquery.foundation.tabs.js"></script>

<script src="scripts/jquery.foundation.tooltips.js"></script>

<script src="scripts/jquery.foundation.accordion.js"></script>

<script src="scripts/jquery.placeholder.js"></script>

<script src="scripts/jquery.foundation.alerts.js"></script>

<script src="scripts/jquery.foundation.topbar.js"></script>

-->

<!-- Included JS Files (Compressed) -->
<script src="scripts/jquery.js"></script>
</body>
</html>
