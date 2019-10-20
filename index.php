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
	<!-- Header -->
	<header class="header">	
		<div class="wrapper">
			<div class="header--box">
				<!-- NAV -->
				<div class="nav">
				<input type="checkbox" class="nav--checkbox" id="nav--checkbox">
				<label for="nav--checkbox" class="nav--label">
					<img alt="navigation button" class="nav--btn" src="<?php echo get_theme_file_uri('assets/icons/menu.svg'); ?>">
				</label>
					<nav class="nav__list">
						<a class="nav__list--link" href="#sale">Sale</a>
						<a class="nav__list--link" href="#new--in">New In</a>
						<a class="nav__list--link" href="#store--locator">Store Locator</a>
					</nav>
				</div>
				<!-- /NAV -->
				<h1 class="header--logo">SHOP LOGO</h1>
				<img alt="Shopping Cart" class="header--cart" src="<?php echo get_theme_file_uri('assets/icons/shopping-bag.svg'); ?>">
			</div> 
		</div>
	</header>
	<!-- /Header -->
	<section class="promo">
		<div class="promo__box">
			<h2 class="promo--heading heading__secondary text--white">15&amp; Off &plus; Free US Delivery</h2>
			<p class="promo--sub heading__secondary--sub">Subscribe To Our Newsletter</p>
		</div>
		<div class="promo__box promo__box--main">
			<h2 class="promo--heading heading__secondary text--white">Free Standard Delivery</h2>
			<p class="promo--sub heading__secondary--sub">Over &dollar;15</p>
		</div>
		<div class="promo__box">
			<h2 class="promo--heading heading__secondary text--white">20&amp; Off Discount</h2>
			<p class="promo--sub heading__secondary--sub">For Students</p>
		</div>
	</section>
 
	<!-- Slider -->
	<section class="banner" id="sale">
		<div class="banner__slider">
		<div>
			<picture>
				<source srcset="<?php echo get_theme_file_uri('assets/images/Bitmap--small.png'); ?>" media="(max-width: 800px)">
				<img alt="UP TO 70% SALE!" class="slick--img" src="<?php echo get_theme_file_uri('assets/images/Bitmap.png'); ?>" />
			</picture>
		</div>
		<div>
			<picture>
				<source srcset="<?php echo get_theme_file_uri('assets/images/Bitmap--small.png'); ?>" media="(max-width: 800px)">
				<img alt="UP TO 70% SALE!" class="slick--img" src="<?php echo get_theme_file_uri('assets/images/Bitmap.png'); ?>" />
			</picture>
		</div>
		<div>
			<picture>
				<source srcset="<?php echo get_theme_file_uri('assets/images/Bitmap--small.png'); ?>" media="(max-width: 800px)">
				<img alt="UP TO 70% SALE!" class="slick--img" src="<?php echo get_theme_file_uri('assets/images/Bitmap.png'); ?>" />
			</picture>
		</div>
		<div>
			<picture>
				<source srcset="<?php echo get_theme_file_uri('assets/images/Bitmap--small.png'); ?>" media="(max-width: 800px)">
				<img alt="UP TO 70% SALE!" class="slick--img" src="<?php echo get_theme_file_uri('assets/images/Bitmap.png'); ?>" />
			</picture>
		</div>
		</div>
	</section>
	<!-- /SLIDER -->

	<!-- Products -->
	<div class="products wrapper" id="new--in">
		<section>
			<h1 class="heading__primary  products--title">NEW IN WOMEN'S FASHION</h1>
			<p class="heading__secondary--sub products--sub text--light">Shop a fresh start to the season and choose your look from our new collection. From the best sellers to brand new arrivals and current seasonal trends, we have all occasions covered. We'll keep your style up to date, all you have to do is shop.</p>
		</section>
		<ul class="products__list">
			<li class="products__list--item">
				<div class="products__list--div">
					<img alt="UP TO 70% SALE!" class="products__list--img" src="<?php echo get_theme_file_uri('assets/images/item-3.png'); ?>" >
						<div class="products__list--text">				
							<h2 class="heading__secondary">Dress</h2>
							<p class="heading__secondary--sub text--light">Dress with a tropical print palms bardot style.</p>
						</div>
					<p class="products__list--price text--white">&dollar;&nbsp;42</p>
				</div>
			</li>

			<li class="products__list--item">
				<div class="products__list--div">
					<img alt="UP TO 70% SALE!" class="products__list--img" src="<?php echo get_theme_file_uri('assets/images/item-3.png'); ?>" >
						<div class="products__list--text">				
							<h2 class="heading__secondary">Dress</h2>
							<p class="heading__secondary--sub text--light">Dress with a tropical print palms bardot style.</p>
						</div>
					<p class="products__list--price text--white">&dollar;&nbsp;42</p>
				</div>
			</li>

			<li class="products__list--item">
				<div class="products__list--div">
					<img alt="UP TO 70% SALE!" class="products__list--img" src="<?php echo get_theme_file_uri('assets/images/item-3.png'); ?>" >
						<div class="products__list--text">				
							<h2 class="heading__secondary">Dress</h2>
							<p class="heading__secondary--sub text--light">Dress with a tropical print palms bardot style.</p>
						</div>
					<p class="products__list--price text--white">&dollar;&nbsp;42</p>
				</div>
			</li>
		</ul>
		<button href="#" class="btn btn--danger">SHOP NOW</button>
</div>
	<!-- Products -->

	<!-- Contact -->
	<div class="contact">
		<div class="wrapper">
			<div class="contact--box">
				<div class="contact__form">
					<h2 class="heading__secondary contact--title">CONTACT US</h2>
					<form id="contact__form" action="#">
						<input type="email" class="contact__form--input" placeholder="Your email">
						<textarea name="Message" id="contact--msg" class="contact__form--msg" placeholder="Message"></textarea>
						<button type="submit" class="btn btn--dark btn--contact">CONTACT</button>
					</form>
				</div>
				<div class="contact__locator" id="store--locator">
				<h2 class="heading__secondary contact--title">STORE LOCATOR</h2>

				<!-- MAP -->
				<div class="mapouter contact__map"><div class="gmap_canvas contact__map--height"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Halmann%20Vella%20Building%2C%20Mosta%20Road%2C%20Lija%2C%20%C4%A6al%20Lija%20LJA%209061&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:250px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:100%;}</style></div>
				</div>
				<!-- /MAP -->

			</div> <!-- /contact--box-->
		</div> <!-- /Wrapper -->
	</div> <!-- /Contact -->
	

	<footer class="footer">
		<div class="wrapper">
			<div class="footer--box">
			<!-- Footer Info -->
				<div class="footer__info">
					<div class="footer__info--box">
						<h2 class="heading__secondary footer__info--header">ABOUT</h2>
							<ul class="footer__info--ul">
								<li class="footer__info--li"><a href="#" class="footer__info--link">Why Us?</a></li>
								<li class="footer__info--li"><a href="#" class="footer__info--link">Store Locator</a></li>
								<li class="footer__info--li"><a href="#" class="footer__info--link">Contact Us</a></li>
							</ul>
					</div>
					<div class="footer__info--box">
						<h2 class="heading__secondary footer__info--header">DELIVERY</h2>
						<ul class="footer__info--ul">
							<li class="footer__info--li"><a href="#" class="footer__info--link">Delivery Info</a></li>
							<li class="footer__info--li"><a href="#" class="footer__info--link">International Delivery</a></li>
							<li class="footer__info--li"><a href="#" class="footer__info--link">Student Discount</a></li>
						</ul>
					</div>
					<div class="footer__info--box">
						<h2 class="heading__secondary footer__info--header">HELP</h2>
						<ul class="footer__info--ul">
							<li class="footer__info--li"><a href="#" class="footer__info--link">Track My Order</a></li>
							<li class="footer__info--li"><a href="#" class="footer__info--link">Returns & Refunds</a></li>
							<li class="footer__info--li"><a href="#" class="footer__info--link">Payments Options</a></li>
						</ul>
					</div>
				</div>	<!-- /Footer Info -->

				<!-- Footer Newsletter -->
				<div class="footer__newsletter">
					<h2 class="header__secondary footer__newsletter--header">NEWSLETTER</h2>
					<p class="heading__secondary--sub footer__newsletter--sub">Want to receive exclusive offers?</p>
					<form action="#" class="footer__newsletter--form clearfix">
						<input type="email" class="footer__newsletter--email" name="newsletter--email" id="newsletter--email" placeholder="Enter your email address">
						<button type="submit" class="footer__newsletter--btn">SUBSCRIBE</button>
					</form>
				</div>	<!-- /Footer Newsletter -->
			</div>  <!-- /Footer--box -->
		</div> 	<!-- /Wrapper -->
	</footer>

	<?php wp_footer(); ?>
	<!-- jQuery & Slick Carousel -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri('js/nav.js'); ?>"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri('js/slider.js'); ?>"></script>

</body>
</html>