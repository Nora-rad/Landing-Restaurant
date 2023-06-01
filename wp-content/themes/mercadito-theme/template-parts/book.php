<?php
/**
 * Template part for displaying book section
 */

?>
<section class="o-section o-section-book c-book pt-0" data-scroll="#section-book">
	<div class="o-section__wrapper">
		<div class="row no-gutters">
			<div class="col-12 col-lg-6">
				<div class="bg-dark bg-transparent">
					<h4 class="c-title c-book__title mb-0">Book a Table</h4>
					<p class="c-book__desc">When we first opened our restaturant, it didn't take a long time for us to prove our diffrence. </p>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="bg-dark">
					<form action="">
						<div class="form__group">
							<label for="form-name" class="upper-case">your name</label>
							<input type="text" id="form-name" class="form-control">
						</div>
						<div class="form__group">
							<label for="form-phone" class="upper-case">your phone</label>
							<input type="text" id="form-phone" class="form-control">
						</div>
						<div class="form__group">
							<label for="form-email" class="upper-case">your email</label>
							<input type="text" id="form-email" class="form-control">
						</div>
						<div class="form__group">
							<label for="form-date" class="upper-case">Date</label>
							<input type="date" id="form-date" class="form-control" >
						</div>
						<div class="form__group">
							<label for="form-time" class="upper-case">time</label>
							<input type="time" id="form-time" class="form-control">
						</div>
						<div class="form__group relative">
							<label for="form-number" class="upper-case">number of people</label>
							<input type="number" id="form-number" value="0" class="text-center form-control" min="0">
							<button type="button" id="incrementButton" aria-label="increment">+</button>
							<button type="button" id="decrementButton" aria-label="decrement">-</button>
						</div>
						<div class="form__group">
							<button type="submit" class="c-btn c-btn--primary ">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
