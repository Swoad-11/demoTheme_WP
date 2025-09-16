<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="/wp-content/themes/demoTheme/assets/images/logo.png"> 

    <?php wp_head(); ?>
</head> 

<body>
  <header class="header text-center">
    <a class="site-title pt-lg-4 mb-0 mt-4" href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
    </a>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" 
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">

            <?php if ( function_exists('the_custom_logo') ) { $custom_logo_id = get_theme_mod('custom_logo'); if ( $custom_logo_id ) { $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); if ($logo) { echo '<img class="mb-3 mx-auto logo" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">'; } } } ?>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => '',
                'items_wrap'     => '<ul class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>',
                'fallback_cb'    => false,
            ));
            ?>
        </div>
    </nav>
  </header>

  <div class="main-wrapper">
      <header class="page-title theme-bg-light text-center gradient py-5">
          <h1 class="heading">
              <?php echo is_singular() ? get_the_title() : 'Blog Home'; ?>
          </h1>
      </header>
