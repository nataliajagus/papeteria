<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        <?php echo get_bloginfo('name'); ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin-ext" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <a class="logo" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Zaproszenia ślubne i dodatki" class="img-repsonsive" /></a>
            </div>
            <div class="col-lg-8 col-md-12">
                <button class="hamburger" id="hamburger"></button>
                <button class="cross">&#735;</button>
                <nav class="main-nav expand" id="main-nav">
                    <?php wp_nav_menu ([
                        'menu' => 'Main menu',
                        'menu_class' => 'nav'
                    ]); ?>
                </nav>
            </div>


        </div>
    </div>
</header>