<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>

 <header>
    <div class="container">
      <nav class="navbar py-4 px-4 is-gap-2" role="navigation" aria-label="main navigation">

      <div class="navbar-brand">
        <a href="http://localhost/wp_localhost/">
          <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/01/glade-logo.png" alt="Glade branding logo" style="width: 80px; height: 50px;">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

          <a class="navbar-item" href="http://localhost/wp_localhost/services/">
            Services
          </a>

          <a class="navbar-item" href="http://localhost/wp_localhost/category/">
            Blog Categories
          </a>

          <a class="navbar-item" href="http://localhost/wp_localhost/privacy/">
            Our Policy
          </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="custom-btn">
                Sign in
              </a>
              <a class="custom-btn-outlined button">
                Sign Up
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
