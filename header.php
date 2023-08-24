<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Foliomix</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open();
  $primaryNav = wp_get_nav_menu_items("2");

  ?>
  <header>
    <div class="flex h-[120px] items-center px-[200px]">
      <div class="w-1/2">
        <img class="inline-block w-[150px] mr-[56px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg " alt="">
        <span class="button"> Join Today! </span>
      </div>
      <?php if(is_front_page()): ?>
        <div class="w-1/2">
          <ul class="flex gap-[50px] justify-end">
            <?php foreach ($primaryNav as $navItem) {
              echo '<li><a href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
            } ?>
          </ul>
        </div>
      <?php endif ?>
    </div>
  </header>
