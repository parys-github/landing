<?php
/**
 * Template Name: Location Page
 */
?>

<div class='ScrollPage PageLocation StepScroll' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);' data-dest='.PageLocation'>
	<div class='align'>
		<div class='fsp-loc-pull'>
			<div class='fsp-loc-left'>
				<div class='text-cell' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='bottom-bottom'>
					<?= $data['text']; ?>
				</div>
				<img class='fsp-loc-world' src='<?= $data['world']['url']; ?>' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='bottom-bottom' data-aos-delay='200'>
			</div><div class='fsp-loc-right'>
				<img class='fsp-loc-map' src='<?= $data['map']['url']; ?>' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='bottom-bottom' data-aos-delay='400'>
			</div>
		</div>
	</div>
</div>