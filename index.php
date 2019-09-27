<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
	<title>wp_title();</title>
</head>
<body>
	<header class="header">
		<nav class="nav">
		<img class="nav--btn" src="<?php echo get_theme_file_uri('assets/icons/menu.svg'); ?>">
			<a class="nav--link" href="#">Sale</a>
			<a class="nav--link" href="#">New In</a>
			<a class="nav--link" href="#">Store Locator</a>
		</nav>
		<h1 class="header--logo">SHOP LOGO</h1>
		<img class="header--cart" src="<?php echo get_theme_file_uri('assets/icons/shopping-bag.svg'); ?>">
	</header>
	<?php wp_footer(); ?>
</body>
</html>