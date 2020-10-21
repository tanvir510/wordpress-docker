<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-99252444-7"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-99252444-7');
        </script>
        <script>
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                location = '<?php echo home_url( '/contact-complete' ); ?>';
            }, false );
        </script>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-fabbit_favicon-32x32.png" sizes="32x32" />
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-fabbit_favicon-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-fabbit_favicon-180x180.png" />
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-fabbit_favicon-270x270.png" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <header id="site-header" class="site-header" role="banner">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">Logo</div>
                    <div class="menu">Menu</div>
                </div>
            </div>
        </header>
