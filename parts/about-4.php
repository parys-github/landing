<?php
/**
 * Template Name: About Doks Page
 */
?>

<div class='swiper-slide'>
	<div class='ScrollPage StyleAbout-4' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);'>
		<div class='align'>
			<div class='text-cell'>
				<?= $data['text']; ?>
			</div>
			<div class='dl-chart'>
				<div class='dl-table'>
					<table>
						<thead>
							<tr>
								<td><?= $data['file_heading']; ?></td>
								<td><?= $data['icon_heading']; ?></td>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data['files'] as $file) { ?>
								<tr>
									<td><a href='<?= $file['file']['url']; ?>' target='_blank'><?= $file['title']; ?></a></td>
									<td><a href='<?= $file['file']['url']; ?>' target='_blank' class='dwnl-icon'><img src='<?= SITE()->resource('../build/img/file.svg'); ?>'></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class='dl-chart'>
				<div class='dl-table'>
					<table>
						<thead>
							<tr>
								<td><?= $data['press_heading']; ?></td>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data['press'] as $press) { ?>
								<tr>
									<td><a href='<?= $press['file']['url']; ?>' target='_blank'><?= $press['title']; ?></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>