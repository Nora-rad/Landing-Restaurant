<?php
/**
 * Template part for displaying popular-dishes section
 */

?>
<?php $flexible_content = get_field('popular_dishes'); ?>
<?php if ($flexible_content) {  ?>
<section class="o-section o-section-popular-dishes pt-0" data-scroll="#section-popular-dishes">
	<div class="o-section__wrapper">
		<div class="bg-dark js-tabs no-gutters u-flex--cross-center c-popular-dishes row">
			<div class="col-lg-6 col-12">
				<h3 class="c-title c-popular-dishes__title mb-0">The Most Popular Dishes</h3>
			</div>
			<div class="col-lg-6 col-12">
				<p class="carousel-status"></p>
			</div>
			<div class="c-popular-dishes__wrapper">
				<div class="carousel js-carousel" >
					<?php  foreach ($flexible_content as $layout) { ?>
					<div class="carousel-cell">
						<div class="row no-gutters full-width">
							<div class="col-12 col-lg-7">
 								<img src="<?php echo $layout['image']['url']; ?>" width="547" height="361" class="c-popular-dishes__img" alt="<?php echo $layout['image']['description'] ? $layout['image']['description'] : $layout['title']  ; ?>" loading="lazy"/>
							</div>
							<div class="col-12 col-lg-5">
								<div class="p-2">
									<h3 class="c-popular-dishes__title"><?php echo $layout['title']; ?></h3>
									<div class="c-popular-dishes__note">
										<?php echo $layout['description']; ?>
 									</div>
									<span class="c-popular-dishes__pay"><?php echo $layout['price']; ?></span>
								</div>
							</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php }  ?>
