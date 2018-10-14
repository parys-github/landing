<?php
/**
 * Template Name: About Page
 */
?>

<div class="swiper-container sc-blue-arrows PageAboutSwiper StepScroll" data-dest='.PageAboutSwiper'>
	<div class="swiper-wrapper">
		<?php SITE()->dir($page->ID); ?>
	</div>
	<div class="swiper-pagination"></div>
	<div class="swiper-button-prev">
		<div class='sb-left'>
			<?= SITE()->svg('../build/img/arrow-left-w.svg'); ?>
		</div>
		<div class='sb-right'>
			<?= SITE()->svg('../build/img/arrow-right-w.svg'); ?>
		</div>
	</div>
	<div class="swiper-button-next">
		<div class='sb-left'>
			<?= SITE()->svg('../build/img/arrow-left-w.svg'); ?>
		</div>
		<div class='sb-right'>
			<?= SITE()->svg('../build/img/arrow-right-w.svg'); ?>
		</div>
	</div>
</div>