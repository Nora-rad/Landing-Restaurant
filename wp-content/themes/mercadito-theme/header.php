<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="theme-color" content="#D14800">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Mercadito">
	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Mercadito">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png?v=1.0.0">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon-32x32.png?v=1.0.0">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon-16x16.png?v=1.0.0">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/site.webmanifest?v=1.0.0">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico?v=1.0.0">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/manifest.json">
	<link rel="preload" fetchpriority="high" as="image" href="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" type="image/svg+xml">
	<link rel="preload" fetchpriority="high" as="image" href="<?php bloginfo('template_url'); ?>/assets/images/header-bg.webp" type="image/webp">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<svg aria-hidden="true"  class="d-none"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<defs>
		<symbol id="icon-hamburger"  viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M34 28.3337H0V24.5559H34V28.3337ZM34 18.8892H0V15.1114H34V18.8892ZM34 5.66699V9.44477H0V5.66699H34Z" fill="white"/>
		</symbol>
		<symbol id="icon-close" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)">
				<path d="M24 1.413 22.609.024 12 10.613 1.391.024 0 1.413 10.609 12 0 22.59l1.391 1.388L12 13.39l10.609 10.588L24 22.59 13.39 12 24 1.413Z" fill="#fff"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs>
		</symbol>
		<symbol id="arrow-down"  fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M5.40768 24.809L9.8313 19.8134C10.0562 19.5596 10.0562 19.1526 9.8313 18.8988C9.60637 18.6451 9.24555 18.6451 9.02062 18.8988L5.5717 22.7896L5.5717 0.650226C5.5717 0.290751 5.31396 -2.04833e-07 4.99531 -2.18762e-07C4.67666 -2.3269e-07 4.41893 0.290751 4.41893 0.650226L4.41893 22.7896L0.979381 18.8988C0.754452 18.6451 0.393627 18.6451 0.168697 18.8988C0.0562323 19.0257 2.96575e-07 19.1896 2.89181e-07 19.3588C2.81787e-07 19.5279 0.0562323 19.6918 0.168697 19.8187L4.597 24.8143C4.81724 25.0628 5.18275 25.0628 5.40768 24.809Z" fill="white"/>
		</symbol>
		<symbol id="icon-email" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path xmlns="http://www.w3.org/2000/svg" d="M29.4715 4.32676C26.342 1.44225 22.4493 0 17.8005 0C12.9136 0 8.7479 1.63829 5.31029 4.92186C1.87269 8.20543 0.150391 12.2871 0.150391 17.174C0.150391 21.8578 1.78868 25.8835 5.05825 29.2581C8.34183 32.6327 12.7526 34.32 18.3046 34.32C21.6512 34.32 24.9347 33.6339 28.1553 32.2546C29.2055 31.8066 29.7166 30.6023 29.2895 29.5452C28.8484 28.453 27.6022 27.9489 26.517 28.411C23.7165 29.6152 20.972 30.2173 18.2976 30.2173C14.0408 30.2173 10.7432 28.9221 8.40484 26.3246C6.07343 23.7341 4.90422 20.6886 4.90422 17.195C4.90422 13.4003 6.15744 10.2358 8.65688 7.69434C11.1493 5.1599 14.2229 3.88568 17.8635 3.88568C21.2171 3.88568 24.0526 4.92886 26.363 7.01523C28.6734 9.10159 29.8286 11.727 29.8286 14.8916C29.8286 17.055 29.2965 18.8613 28.2393 20.2965C27.1821 21.7388 26.0829 22.4529 24.9417 22.4529C24.3256 22.4529 24.0176 22.1239 24.0176 21.4587C24.0176 20.9197 24.0596 20.2895 24.1366 19.5614L25.4388 8.91256H20.958L20.671 9.95574C19.5298 9.02458 18.2766 8.5555 16.9183 8.5555C14.762 8.5555 12.9136 9.41665 11.3804 11.1319C9.84009 12.8472 9.07695 15.0596 9.07695 17.7621C9.07695 20.4016 9.75607 22.5369 11.1213 24.1542C12.4866 25.7785 14.1248 26.5836 16.0432 26.5836C17.7585 26.5836 19.2217 25.8625 20.4399 24.4273C21.3571 25.8065 22.7083 26.4926 24.4937 26.4926C27.1191 26.4926 29.3875 25.3514 31.2988 23.062C33.2102 20.7796 34.1694 18.0211 34.1694 14.7936C34.1694 10.7049 32.6081 7.21126 29.4715 4.32676ZM19.1517 20.4366C18.3606 21.5008 17.4154 22.0399 16.3162 22.0399C15.5671 22.0399 14.965 21.6478 14.5099 20.8636C14.0478 20.0795 13.8168 19.1063 13.8168 17.9371C13.8168 16.4949 14.1388 15.3327 14.783 14.4505C15.4271 13.5684 16.2252 13.1203 17.1774 13.1203C18.0035 13.1203 18.7386 13.4494 19.3828 14.1145C20.0269 14.7796 20.3489 15.6617 20.3489 16.7679C20.3419 18.1472 19.9429 19.3654 19.1517 20.4366Z" fill="white"/>
		</symbol>
		<symbol id="map" xmlns="http://www.w3.org/2000/svg" fill="none">
			<g clip-path="url(#a)"><path d="M17.16 0C10.306 0 4.73 5.576 4.73 12.43c0 8.505 11.124 20.991 11.597 21.519a1.12 1.12 0 0 0 1.666 0c.473-.528 11.596-13.014 11.596-21.52C29.59 5.577 24.013 0 17.16 0Zm0 18.683a6.26 6.26 0 0 1-6.254-6.253 6.26 6.26 0 0 1 6.254-6.254 6.26 6.26 0 0 1 6.253 6.254 6.26 6.26 0 0 1-6.253 6.253Z" fill="#fff"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h34.32v34.32H0z"/></clipPath></defs>
		</symbol>
		<symbol id="contact-phone" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#a)" fill="#fff"><path d="M26.092 22.703c-1.12-1.107-2.52-1.107-3.635 0-.85.843-1.7 1.686-2.535 2.543-.229.236-.421.286-.7.128-.55-.3-1.135-.542-1.664-.87-2.464-1.55-4.528-3.543-6.356-5.786-.907-1.114-1.714-2.306-2.278-3.649-.114-.271-.093-.45.128-.671.85-.822 1.679-1.664 2.514-2.507 1.164-1.171 1.164-2.542-.007-3.72-.664-.672-1.328-1.33-1.992-2-.686-.686-1.364-1.379-2.057-2.057C6.389 3.02 4.989 3.02 3.875 4.12c-.857.843-1.679 1.707-2.55 2.535-.807.764-1.214 1.7-1.3 2.792-.135 1.779.3 3.457.914 5.092 1.257 3.386 3.171 6.392 5.492 9.149 3.136 3.728 6.878 6.677 11.256 8.806 1.97.957 4.013 1.692 6.234 1.814 1.529.085 2.857-.3 3.921-1.493.729-.814 1.55-1.557 2.321-2.335 1.143-1.157 1.15-2.557.014-3.7a1098.326 1098.326 0 0 0-4.085-4.078ZM24.728 17.012l2.635-.45a11.779 11.779 0 0 0-3.292-6.357 11.715 11.715 0 0 0-6.713-3.349l-.371 2.65a9.089 9.089 0 0 1 5.199 2.592 9.087 9.087 0 0 1 2.542 4.914ZM28.849 5.556A19.431 19.431 0 0 0 17.708 0l-.372 2.65a16.849 16.849 0 0 1 9.627 4.799 16.836 16.836 0 0 1 4.721 9.105l2.635-.45a19.574 19.574 0 0 0-5.47-10.548Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h34.32v34.32H0z"/></clipPath></defs>
		</symbol>
	</defs>
</svg>
<header class="o-section  o-section-header">
	<div class="o-section__wrapper">
		<nav class="header__nav u-flex u-flex--cross-center">
			<div class="nav__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Mercadito"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" width="208" height="113" alt="Mercadito"  ></a>
			</div>
			<div class="nav__menu">
				<ul class="c-nav u-flex">
					<li class="c-nav__items js-nav-item"><button data-scroll="section-why-us" title="why us" class="active c-nav__items__link upper-case">why us</button></li>
					<li class="c-nav__items js-nav-item"><button data-scroll="section-menu" title="menu" class="c-nav__items__link upper-case">menu</button></li>
					<li class="c-nav__items js-nav-item"><button data-scroll="section-popular-dishes" title="c-nav__items__link popular dishes" class="upper-case">popular dishes</button></li>
					<li class="c-nav__items js-nav-item"><button data-scroll="section-book" title="book" class="c-nav__items__link upper-case">book</button></li>
					<li class="c-nav__items js-nav-item"><button data-scroll="section-footer" title="contact" class="c-nav__items__link upper-case">contact</button></li>
				</ul>
				<button class="nav__menu--close  js-nav-menu-close" type="button" aria-label="Close menu">
					<svg class="icon icon-close" width="24" height="24">
						<use xlink:href="#icon-close"></use>
					</svg>
				</button>
			</div>
			<button class="c-header__toggle  hide--tablet js-header-toggle" type="button" aria-label="Hamburger menu">
				<svg class="icon icon-hamburger" width="34" height="34">
					<use xlink:href="#icon-hamburger"></use>
				</svg>
			</button>
		</nav>
	</div>
	<div class="o-section__wrapper c-hero text u-flex ">
		<h1 class="c-hero__title">
			Book a table in the best Mexican restaturant
		</h1>
		<p class="c-hero__off">30% off for the Christmas</p>
		<div class="u-flex c-hero__links">
			<button  class="c-btn c-btn--primary js-scroll-book" data-scroll="section-book" aria-label="Book Now" title="Book Now">Book Now</button>
			<button class="c-btn c-btn--dark js-scroll-menu" data-scroll="section-menu" aria-label="See Menu" title="See Menu">See Menu</button>
		</div>
		<button type="button" class="c-btn c-btn__scroll js-scroll-down" data-scroll="section-why-us" aria-label="Scroll Down">
			<svg class="icon icon-arrow-down" width="10" height="25">
				<use xlink:href="#arrow-down"></use>
			</svg>
		</button>
	</div>
</header>
