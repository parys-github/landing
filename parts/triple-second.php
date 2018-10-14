<?php
/**
 * Template Name: Triple Second Page
 */
?>

<div class='ScrollPage PageTripleSecond StepScroll' data-dest='.PageTripleSecond' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);'>
	<div class='align' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='bottom-bottom'>
		<div class='text-cell'>
			<?= $data['text']; ?>
		</div>
		<div class='prin-table'>
			<?php foreach($data['table'] as $item) { ?>
				<div class='prin-row'>
					<div class='prin-cell'>
						<img src='<?= $item['icon']['url']; ?>'>
					</div>
					<div class='prin-cell'>
						<strong><?= $item['column_1']; ?></strong>
						<span><?= $item['column_2']; ?></span>
					</div>
					<div class='prin-cell'>
						<?= $item['column_2']; ?>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class='text-cell last-cell'>
			<?= $data['xtra-text']; ?>
		</div>
	</div>
</div>