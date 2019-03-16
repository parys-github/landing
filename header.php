<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

    <!-- THEME !-->

    <title><?php bloginfo('name'); ?><?php if (wp_title('', false)) {
            echo ' |';
        } ?><?php wp_title(''); ?></title>

    <link rel="shortcut icon" type='image/x-icon'
          href="<?php echo get_stylesheet_directory_uri(
          ); ?>/build/img/icons/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_stylesheet_directory_uri(
          ); ?>/build/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_stylesheet_directory_uri(
          ); ?>/build/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_stylesheet_directory_uri(
          ); ?>/build/img/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(
    ); ?>/build/img/icons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(
    ); ?>/build/img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700&amp;subset=arabic,cyrillic"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            type="text/javascript"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <meta property="og:title" content="<?= SITE()->getMeta('meta_title'); ?>"/>
    <meta property="og:description"
          content="<?= SITE()->getMeta('meta_desc'); ?>"/>
    <meta property="og:image" content="<?= SITE()->getMeta('meta_img'); ?>"/>
    <meta property="og:url" content="http://<?= $_SERVER['HTTP_HOST']
    . $_SERVER['REQUEST_URI']; ?>"/>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
            src="https://www.googletagmanager.com/gtag/js?id=UA-41020127-19"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-41020127-19');
    </script>


    <!-- Custom Scroll 100vh step - REMOVE IF YOU DO NOT WANT TO USE ON ALL DEVICES-->
    <script>
        $(window).ready(function () {
            if ($(window).width() > 767) {
                $.scrollify({
                    section: ".StepScroll",
                    interstitialSection: ".footer",
                    updateHash: false
                });
            }
        });
    </script>
</head>
<body <?php body_class(); ?>>
<?php $data = get_fields(get_options_page_id('site-options')); ?>

<div class='header header-mob'>
    <div class='align'>
        <img class='header-logo' src='<?= $data['logo']['url']; ?>'>
        <div class='header-ham'>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<div class='header header-desk'>
    <div class='align'>
        <img class='header-logo' src='<?= $data['logo']['url']; ?>'>
        <div class='header-blind'>
            <div class='header-menu'>
                <ul>
                    <?php foreach ($data['menu'] as $item) { ?>
                        <li data-target='<?= $item['target']; ?>'><?= $item['title']; ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class='header-social'>
                <a href='<?= $data['github']; ?>' target='_blank'><img
                        class='hs-gh icon-filter'
                        src='<?= SITE()->resource(
                            '../build/img/hs-gh.svg'
                        ); ?>'></a>
                <a href='<?= $data['npm']; ?>' target='_blank'><img
                        class='hs-np icon-filter'
                        src='<?= SITE()->resource(
                            '../build/img/hs-np.svg'
                        ); ?>'></a>
                <!--<a href='<? /*= $data['linked_in']; */ ?>' target='_blank'><img
                        class='hs-li icon-filter'
                        src='<? /*= SITE()->resource('../build/img/hs-li.svg'); */ ?>'></a>-->
                <!--<a href='<? /*= $data['twitter']; */ ?>' target='_blank'><img
                        class='hs-tw icon-filter'
                        src='<? /*= SITE()->resource('../build/img/hs-tw.svg'); */ ?>'></a>-->
                <!--<a href='<? /*= $data['instagram']; */ ?>' target='_blank'><img
                        class='hs-in icon-filter'
                        src='<? /*= SITE()->resource('../build/img/hs-in.svg'); */ ?>'></a>-->
            </div>

            <!-- Custom Lamguage Switcher -->

            <div class='header-lang'>
                <a href='/'><img class='hl-en' src='<?= SITE()->resource(
                        '../build/img/' . ((ICL_LANGUAGE_CODE == 'en')
                            ? 'hl-en-h' : 'hl-en-n') . '.svg'
                    ); ?>'></a>
                <a href='/ar/'><img class='hl-ar' src='<?= SITE()->resource(
                        '../build/img/' . ((ICL_LANGUAGE_CODE == 'ar')
                            ? 'hl-ar-h' : 'hl-ar-n') . '.svg'
                    ); ?>'></a>
            </div>
        </div>
    </div>
</div>