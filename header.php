<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
	<div class="nav navbar-static-top navbar-inverse">
        <div class="container">
            <div class="row">
                <a href="<?php echo home_url(); ?>" class="navbar-brand">
                    <?php bloginfo('name'); ?>
                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                     <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             =>  2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse navCollapse',
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
                </div>
                
            </div>
        </div>
    </div>