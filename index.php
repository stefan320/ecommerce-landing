<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
	<?php wp_head(); ?>
	<title>wp_title();</title>
</head>
<body>
	<header class="header">
	<img alt="navigation" class="nav--btn" src="<?php echo get_theme_file_uri('assets/icons/menu.svg'); ?>">
		<nav class="nav">
			<a class="nav--link" href="#">Sale</a>
			<a class="nav--link" href="#">New In</a>
			<a class="nav--link" href="#">Store Locator</a>
		</nav>
		<h1 class="header--logo">SHOP LOGO</h1>
		<img alt="Shopping Cart" class="header--cart" src="<?php echo get_theme_file_uri('assets/icons/shopping-bag.svg'); ?>">
	</header>
	<section class="promo">
		<div class="promo__box">
			<h3 class="promo__box--heading">15&amp; Off &plus; Free US Delivery</h3>
			<h6 class="promo__box--sub">Subscribe To Our Newsletter</h6>
		</div>
		<div class="promo__box promo__box--main">
			<h3 class="promo__box--heading">Free Standard Delivery</h3>
			<h6 class="promo__box--sub">Over &dollar;25</h6>
		</div>
		<div class="promo__box">
			<h3 class="promo__box--heading">20&amp; Off Discount</h3>
			<h6 class="promo__box--sub">For Students</h6>
		</div>
	</section>
 
	<!-- Slider -->
	<section class="banner">
		<div class="banner__slider">
		<div><img alt="UP TO 70% SALE!" src="<?php echo get_theme_file_uri('assets/images/Bitmap.png'); ?>" ></div>
		<div><img alt="UP TO 70% SALE!" src="<?php echo get_theme_file_uri('assets/images/Bitmap.png'); ?>" ></div>
		<div><img alt="UP TO 70% SALE!" src="<?php echo get_theme_file_uri('assets/images/Bitmap.png'); ?>" ></div>
		</div>
	</section>

	<section class="products">
		<h3 class="heading__secondary">NEW IN WOMAEN'S FASHION</h3>
		<p class="heading__tertiary--sub">Shop a fresh start to the season and choose your look from our new collection. From the best sellers to brand new arrivals and current seasonal trends, we have all occasions covered. We'll keep your style up to date, all you have to do is shop.</p>
		<ul class="products__list">
			<li class="products__list--item">
				<div class="products__list--div">
					<div class="products__list--img"></div>
					<h2 class="heading__secondary">Dress</h2>
					<p class="heading__secondary--sub">Dress with a tropical print palms</p>
					<div class="products__list--price">&dollar;&nbsp;42</div>
				</div>
			</li>
			<li class="products__list--item">
				<div class="products__list--div">
					<div class="products__list--img"></div>
					<h2 class="heading__secondary">Dress</h2>
					<p class="heading__secondary--sub">Dress with a tropical print palms</p>
					<div class="products__list--price">&dollar;&nbsp;42</div>
				</div>
			</li>
			<li class="products__list--item">
				<div class="products__list--div">
					<div class="products__list--img"></div>
					<h2 class="heading__secondary">Dress</h2>
					<p class="heading__secondary--sub">Dress with a tropical print palms</p>
					<div class="products__list--price">&dollar;&nbsp;42</div>
				</div>
			</li>
		</ul>
		<button href="#" class="btn">SHOP NOW</button>
	</section>

	<section class="contact">
		<h3 class="heading__tertiary">CONTACT US</h3>
		<form class="contact__form" action="#">
			<input type="email" class="contact__form--email">
			<textarea name="Message" id="contact--msg" class="contact__form--msg"></textarea>
			<button type="submit" class="btn">CONTACT</button>
		</form>
		<div class="contact__locator">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Halmann%20Vella%20Building%2C%20Mosta%20Road%2C%20Lija%2C%20%C4%A6al%20Lija%20LJA%209061&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
		</div>
	</section>

	<footer class="footer">
		<div class="footer__info">
			<h3 class="heading__tertiary footer__info--header">ABOUT</h3>
			<ul class="footer__info--ul">
				<li class="footer__info--li"><a href="#" class="footer__info--link">Why Us?</a></li>
				<li class="footer__info--li"><a href="#" class="footer__info--link">Store Locator</a></li>
				<li class="footer__info--li"><a href="#" class="footer__info--link">Contact Us</a></li>
			</ul>
			<h3 class="heading__tertiary footer__info--header">DELIVERY</h3>
			<ul class="footer__info--ul">
				<li class="footer__info--li"><a href="#" class="footer__info--link">Delivery Info</a></li>
				<li class="footer__info--li"><a href="#" class="footer__info--link">International Delivery</a></li>
				<li class="footer__info--li"><a href="#" class="footer__info--link">Student Discount</a></li>
			</ul>
			<h3 class="heading__tertiary footer__info--header">HELP</h3>
			<ul class="footer__info--ul">
				<li class="footer__info--li"><a href="#" class="footer__info--link">Track My Order</a></li>
				<li class="footer__info--li"><a href="#" class="footer__info--link">Returns & Refunds</a></li>
				<li class="footer__info--li"><a href="#" class="footer__info--link">Payments Options</a></li>
			</ul>
		</div>
		<div class="footer__newsletter">
			<h3 class="header__tertiary">NEWSLETTER</h3>
			<p class="header__tertiary--sub">Want to receive exclusive offers?</p>
			<form action="#" class="footer__newsletter--form">
				<input type="email" name="newsletter--email" id="newsletter--email">
				<button type="submit">SUBSCRIBE</button>
			</form>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<!-- jQuery & Slick Carousel -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri('js/slider.js'); ?>"></script>
</body>
</html>