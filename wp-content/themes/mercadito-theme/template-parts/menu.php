<?php
/**
 * Template part for displaying menu section
 */
?>
<?php $flexible_content = get_field('menu_head'); ?>
<?php if ($flexible_content) {  ?>
<section class="o-section o-section-menu" data-scroll="#section-menu">
	<div class="o-section__wrapper">
		<div class="bg-dark js-tabs no-gutters u-flex--cross-center c-menu row">
			<div class="col-lg-6 col-12">
				<h2 class="c-title c-menu__title mb-0">Our Menu</h2>
			</div>
			<div class="col-lg-6 col-12 c-tab-button__wrapper u-flex">
				<?php  foreach ($flexible_content as $key=>$layout) { ?>
					<button class="js-tab-button <?php if($key===0) echo 'active'?> upper-case"   data-id="<?php echo $layout['head_title']?>">  <?php echo $layout['head_title']?></button>
 				<?php } ?>
			</div>
			<div class="col-12">
				<div class="tab-content__wrapper">
					<?php  foreach ($flexible_content as $key=>$layout) { ?>
					<div class="c-tab-content js-tab-content <?php if($key===0) echo 'active'?> " id="<?php echo $layout['head_title']?>">
						<?php
							$heads= $layout["head-Items"] ;
							if ($heads) {
						?>
						<ul class="c-menu__list">
							<?php   foreach ($heads as $item) { ?>
							<li>
								<div class="u-flex c-menu__item">
									<div>
										<p class="c-menu__title"><?php echo $item['title']?></p>
										<small class="c-menu__desc"><?php echo $item['description']?></small>
									</div>
									<div class="c-menu__pay"><?php echo $item['price']?></div>
								</div>
							</li>
							<?php } ?>
						</ul>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }  ?>
