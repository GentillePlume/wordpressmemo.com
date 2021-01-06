<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <?php wp_head(); ?>

</head>


<body <?php body_class('body'); ?>>

  <div class="navigation is-white pv-3-m">

    <div class="container flex-c-xs flex-r-m h-centered-m">

      <div class="menus">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'main-menu',
              'container' => 'nav',
              'container_class' => 'nav',
              'menu_class' => 'nav'
          ));
        ?>
      </div>

      <div class="cta ml-auto">
        <button class="button is-caution is-bordered" onclick="popupSwitch('navigation')">Get menus</button>
      </div>

    </div>

  </div>

  <?php include get_template_directory() . '/includes/popup/navigation/navigation.php'; ?>
