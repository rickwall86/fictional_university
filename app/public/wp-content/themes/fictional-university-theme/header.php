<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- dynamically adds language -->
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"> <!-- dynamicaly adds charset meta data -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- required for responsive themes for mobile -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>   <!-- adds different classes to body depending on which page you are on. Great for css -->
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a></h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">

              <!-- <?php 
                wp_nav_menu(array (
                  'theme_location' => 'headerMenuLocation'
                ));
              ?> -->

              <!-- below is what we would use with a static menu for a custom theme - better than nav options with wordpress  -->
              <ul>
                <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 14) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
                <li <?php if(get_post_type() == 'course') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('course'); ?>">Courses</a></li>
                <li <?php if(get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
                <li><a href="#">Campuses</a></li>
                <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"'  ?>><a href="<?php echo get_post_type_archive_link('post'); ?>">Blog</a></li>
              </ul>
            </nav>
            <div class="site-header__util">
              <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
              <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
              <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
      </header>