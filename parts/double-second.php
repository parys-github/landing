<?php
/**
 * Template Name: Double Second Page
 */
?>

<div class='ScrollPage PageDoubleSecond StepScroll' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);' data-dest='.PageDoubleSecond'>
	<div class='align' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='center-bottom'>
		<div class='text-cell'>
			<?= $data['text']; ?>
		</div>
		<table class='list-table'>
			<?php for($i = 0; $i < count($data['table']); $i++) { ?>
				<?php if ($i == 0) { echo "<tr>"; } ?>
				<?php if ($i != 0 && $i % 2 == 0) { echo "</tr><tr>"; } ?>
				<td><img src='<?= $data['table'][$i]['icon']['url']; ?>'></td>
				<td><?= $data['table'][$i]['column_1']; ?></td>
				<?php if ($i == count($data['table'])-1) { echo "</tr>"; } ?>
			<?php } ?>
		</table>
		<div class='text-cell last-cell'>
			<?= $data['xtra-text']; ?>
		</div>
	</div>
</div>