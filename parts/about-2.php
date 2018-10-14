<?php
/**
 * Template Name: About 2 Page
 */
?>

<div class='swiper-slide'>
	<div class='ScrollPage StyleAbout-2' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);'>
		<div class='align'>
			<div class='text-cell'>
				<h2><?= $data['heading']; ?></h2>
			</div>
			<div class='about-grid'>
				<div class='ag-pull-out'>
					<div class='ag-cell agc-30'>
						<div class='ag-image-cell'>
							<div class='ag-ic-img' style='background-image: url(<?= $data['profiles'][0]['headshot']['sizes']['large']; ?>);'></div>
							<?= $data['profiles'][0]['bio']; ?>	
						</div>
					</div>
					<div class='ag-cell agc-70'>
						<?php for($i = 1; $i < count($data['profiles']); $i++) { ?>
							<div class='ag-cell agc-25'>
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