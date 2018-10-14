<?php
/**
 * Template Name: Components Page
 */
?>

<div class='ScrollPage PageComponents StepScroll' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);' data-dest='.PageComponents'>
	<div class='PageComponents-mob'>
		<?php for($i = 0; $i < count($data['images']); $i++) { ?>
			<div class='PageComponents-img' style='background-image: url(<?= $data['images'][$i]['image']['sizes']['large']; ?>);'></div>
		<?php } ?>
	</div>
	<div class='PageComponents-top'>
		<?php for($i = 0; ($i < 3 && $i < count($data['images'])); $i++) { ?>
			<div class='PageComponents-img'  data-aos="fade-up" data-aos-easing="ease-in-sine" style='background-image: url(<?= $data['images'][$i]['image']['sizes']['large']; ?>);'></div>
		<?php } ?>
	</div>
	<div class='align' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='top-center'>
		<div class='text-cell'>
			<?= $data['text']; ?>
		</div>
	</div>
	<div class='PageComponents-bottom'>
		<?php for($i = 3; $i < count($data['images']); $i++) { ?>
			<div class='PageComponents-img' data-aos="fade-down"  style='background-image: url(<?= $data['images'][$i]['image']['sizes']['large']; ?>);'></div>
		<?php } ?>
	</div>
</div>