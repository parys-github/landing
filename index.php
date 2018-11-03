<?php
/**
 * Template Name: Index Page
 */
?>

<?php get_header(); ?>

<div class='parts'>
    <?php SITE()->dir(); ?>
    <div class="progress-indicator">
        <svg>
            <g><circle cx="0" cy="0" r="11" stroke="black"
                       class="animated-circle" transform="translate(50,50) rotate(-90)"/></g>
            <g><circle cx="0" cy="0" r="19" transform="translate(50,50)
            rotate(-90)"/></g>
        </svg>
        <div class="progress-count"></div>
    </div>
    <?php get_footer(); ?>
