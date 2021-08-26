<!DOCTYPE html>
<html lang="en">
<head>
<?php if ( is_home() ) {?>
<title><?php bloginfo('name') ?></title>
<?php } else { ?> 
<title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name') ?> </title>
<?php } ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta name=”title” content=”<?php wp_title('|',true,'right'); ?>  <?php bloginfo('name') ?> ” />
<meta name="description" content= "<?php bloginfo('description') ?>">
<meta name="robots" content="Index,Follow">
<meta name="Author" content="">
<meta name="Generator" content="Wordpress">
<meta name="Lenguage" content="<?php bloginfo('language') ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head() ?>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
<![endif]-->

<!-- [if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<?php wp_head(); ?>
<body>
    <header>
        <div class="container">
            <div class="row">
             <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container-fluid">

                         <!--Logo -->
                        <a class="col-6 col-md-2 col-lg-2" href="<?php echo HOMELINK ?>">
                            <div class="navbar-brand  logo_box">
                                <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    if ( has_custom_logo() ) {
                                            echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '" class="img-fluid">';
                                    } else {
                                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                    }
                                ?>
                            </div>
                        </a>
                        
                        <!--button Menu / Responsive-->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <!--Main Menú -->
                        <div class="col-6 col-md-6 col-lg-6 menu_box">
                            <div class="collapse navbar-collapse text-uppercase" id="main-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary_menu',
                                    'container' => false,
                                    'menu_class' => '',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="%1$s" class="navbar-nav m-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                            </div>
                        </div>

                        <!--Search -->
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 px-0 mt-2 mb-2 mt-md-0 mb-md-0 mt-lg-0 mb-lg-0 search_box">
                                        <?php get_search_form(); ?> 
                                    </div>
                                    
                                    <!--Social -->
                                    <div class="col-12 col-md-6 col-lg-6 text-center social_box">
                                        <!--Facebook Icon-->
                                        <?php if ( get_theme_mod( 'url_facebook' ) ) : ?>
                                            <a href="<?php echo get_theme_mod( "url_facebook" ); ?>"><img src="<?php echo IMAGES ?>/facebook_icon.png" alt="Facebook" class="img-fluid" /></a>
                                        <?php endif; ?>

                                        <!--Twitter Icon-->
                                        <?php if ( get_theme_mod( 'url_twitter' ) ) : ?>
                                            <a href="<?php echo get_theme_mod( "url_twitter" ); ?>"><img src="<?php echo IMAGES ?>/twitter_icon.png" alt="Twitter" class="img-fluid" /></a>
                                        <?php endif; ?>
                                        
                                        <!--Youtube Icon-->
                                        <?php if ( get_theme_mod( 'url_youtube' ) ) : ?>
                                            <a href="<?php echo get_theme_mod( "url_youtube" ); ?>"><img src="<?php echo IMAGES ?>/youtube_icon.png" alt="Youtube" class="img-fluid" /></a>
                                        <?php endif; ?>
                                        
                                        <!--Instagram Icon-->
                                        <?php if ( get_theme_mod( 'url_instagram' ) ) : ?>
                                            <a href="<?php echo get_theme_mod( "url_instagram" ); ?>"><img src="<?php echo IMAGES ?>/instagram_icon.png" alt="Instagram" class="img-fluid" /></a>
                                        <?php endif; ?>
                                        
                                    </div><!--/Social -->
                                </div><!--/row -->
                            </div><!--/container-fluid -->
                        </div>

                    </div>
                </nav>
               
                
            </div>
        </div>


      
    </header>
    