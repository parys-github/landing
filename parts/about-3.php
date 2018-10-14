<?php
/**
 * Template Name: About 3 Page
 */
?>

<div class='swiper-slide'>
	<div class='ScrollPage StyleAbout-3' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);'>
		<div class='align'>
			<div class='text-cell'>
				<h2><?= $data['heading']; ?></h2>
			</div>
			<div class='about-grid ag-smaller'>
				<div class='ag-pull-out'>
					<div class='ag-cell agc-30'>
						<div class='ag-text-cell'>
							<?= $data['text']; ?>
						</div>
					</div>
					<div class='ag-cell agc-70'>
						<?php for($i = 0; $i < count($data['profiles']); $i++) { ?>
							<div class='ag-cell agc-16'>
								<div class='ag-image-cell'>
									<div class='ag-ic-img' style='background-image: url(<?= $data['profiles'][$i]['headshot']['sizes']['large']; ?>'></div>
									<?= $data['profiles'][$i]['bio']; ?>	
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>