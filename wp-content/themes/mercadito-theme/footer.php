<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>
<footer class="o-section section--footer pt-0"  data-scroll="#section-footer">
	<div class="o-section__wrapper">
		<div class="bg-dark bg-transparent">
			<h4 class="c-title c-title--center c-footer mb-0">Contact Us</h4>
			<ul class="section--footer__list">
				<li>
					<svg class="icon icon-contact-phone" width="35" height="35">
						<use xlink:href="#contact-phone"></use>
					</svg>
					<a href="tel:2125744682" title="Contact Us">(212) 574-4682</a>
				</li>
				<li>
					<svg class="icon icon-map" width="35" height="35">
						<use xlink:href="#map"></use>
					</svg>
					<p>219 W 43rd St, NY 10036</p>
				</li>
				<li>
					<svg class="icon icon-email" width="35" height="35">
						<use xlink:href="#icon-email"></use>
					</svg>
					<a href="mailto:info@mercaditofood.com" title="Mail US">info@mercaditofood.com</a>
				</li>
			</ul>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/assets/images/map.webp" width="1132" height="450" loading="lazy" alt="contact us" class="section--footer__map">
		<p class="text-center section--footer__hours"> Open Hours </p>
		<p class="text-center">Every Day 8am–12am</p >
		<div class="section--footer__copy-right">
			<p class="footer__copyright__text">All rights are reserved for Mercadito Restaurant © 2019</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
