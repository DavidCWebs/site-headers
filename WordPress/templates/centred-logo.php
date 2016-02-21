<?php
/**
 * Bootstrap 3.x header layout
 *
 * Centred logo followed by a justified navbar. The navbar becomes fixed on scroll.
 * Requires JS to add '.navbar-fixed' to the '.navbar' element at the appropriate
 * point when suer scrolls. See `/scripts/sticky-navbar.js` in this repo.
 */

// Include the file that contains the custom nav walker class if necessary
require_once( get_template_directory() . '/lib/nav.php' );
?>
<div class="main-header">
  <header class="header-logo text-center">
    <div class="logo">
      <a id="site-logo" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?= get_template_directory_uri() . '/assets/images/logo.png'; ?>" height="" width="" alt=""/>
      </a>
    </div>
    <h1 id="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
  </header>
  <div id="sticky-nav-wrap">
    <nav class="navbar navbar-static-top">
      <div class="header-nav">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle ghost" data-toggle="collapse" data-target="#top-nav">
                  <span class="pull-left hamburger">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-fw"></i>
                  </span>S
                  <span class="pull-right">
                    &nbsp;MENU
                  </span>
                </button>
              </div>
              <nav id="top-nav" class="collapse navbar-collapse top-nav" role="navigation">
                <?php

                if (has_nav_menu('primary_navigation')) :

                  wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'walker' => new Carawebs\Castleview\Nav\NavWalker(),
                    'menu_class' => 'nav navbar-nav nav-justified dropdown-col page-scroll'
                  ]);

                endif;

                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
