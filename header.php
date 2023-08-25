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

  <header class="sticky top-0 bg-background z-50">
    <div class="flex h-[120px] items-center px-[30px] md:px-[44px] xl:px-[200px]">
      <div class="w-[80%] md:w-3/4">
        <img class="inline-block w-[130px] md:w-[150px] mr-[10px] md:mr-[56px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg " alt="">
        <span class="button"> Join Today! </span>
      </div>
      <?php if (is_front_page()) : ?>
        <div class="w-[20%] md:w-1/2  h-[30px]">
          <ul id="menu-container" class="hidden md:flex gap-[50px] justify-end flex-row absolute items-middle text-[14px]">
            <li><a class="opacity active" href="#about-us" title="About Us">About Us</a></li>
            <li><a class="opacity" href="#features" title="Features">Features</a></li>
            <li><a class="opacity" href="#pricing" title="Pricing">Pricing</a></li>
          </ul>
          <!-- mobile -->
          <ul id="menu-container" class="mobile md:hidden ease-in duration-400 flex gap-[15px] justify-end flex-col  absolute items-end  text-[14px]">
            <li><a class="opacity active" href="#about-us" title="About Us">About Us</a></li>
            <li><a class="opacity" href="#features" title="Features">Features</a></li>
            <li><a class="opacity" href="#pricing" title="Pricing">Pricing</a></li>
          </ul>
        </div>
      <?php endif ?>
    </div>
  </header>