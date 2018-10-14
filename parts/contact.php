<?php
/**
 * Template Name: Contact Page
 */
?>

<div class='ScrollPage PageContact StepScroll'
     style='background-image: url(<?= $data['background']['sizes']['1920']; ?>);'
     data-dest='.PageContact'>
    <div class='align'>
        <div class='text-cell'>
            <?= $data['text']; ?>
        </div>
        <div class='contact-left' data-aos='fade-up' data-aos-duration='1200'>
            <div class='contact-form'>
                <?= do_shortcode("[contact-form-7 id='{$data['form']}']"); ?>
            </div>
        </div>
        <div class='contact-right' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='top-center' data-aos-delay='200'>
            <div class="info-text"><?= $data['contact_info']; ?></div>
            <div class="info-img"><img src='<?= $data['image']['url']; ?>'></div>
        </div>
    </div>
</div>