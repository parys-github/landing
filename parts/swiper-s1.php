<?php
/**
 * Template Name: Swiper s1 Page
 */
?>

<div class="swiper-slide">
	<div class='ScrollPage SwiperSlide' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);'>
		<div class='SwiperSlide-top'>
			<?php for($i = 0; ($i < 4 && $i < count($data['images'])); $i++) { ?>
				<div class='SwiperSlide-img' style='background-image: url(<?= $data['images'][$i]['image']['sizes']['large']; ?>);'><span><?= $data['images'][$i]['caption']; ?></span></div>
			<?php } ?>
		</div>
		<div class='align' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='top-center'>
			<div class='text-cell'>
				<?= $data['text']; ?>
			</div>
		</div>
		<div class='SwiperSlide-bottom'>
			<?php for($i = 4; ($i < count($data['images'])); $i++) { ?>
				<div class='SwiperSlide-img' style='background-image: url(<?= $data['images'][$i]['image']['sizes']['large']; ?>);'><span><?= $data['images'][$i]['caption']; ?></span></div>
			<?php } ?>
		</div>
	</div>
</div>