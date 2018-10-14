<?php
/**
 * Template Name: Intro Page
 */
?>

<div class='ScrollPage PageIntro StepScroll' data-dest='.PageIntro'>
	<div class='ScrollPage-bg' style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);'></div>
	<div class='align' id='Introduction'>
		<div class='text-cell'>
			<?= $data['text']; ?>
		</div>
	</div>
</div>
<script>
	AOS.init();
</script>