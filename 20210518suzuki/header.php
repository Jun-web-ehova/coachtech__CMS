<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estra.inc.media</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/estramedia__logo.png"></a></div>
    <div class="header__list">
      <a href="<?php echo get_category_link(4); ?>">HTML</a>
      <a href="<?php echo get_category_link(5); ?>">css</a>
      <a href="<?php echo get_category_link(6); ?>">JavaScript</a>
      <a href="<?php echo get_category_link(7); ?>">PHP</a>
      <a href="<?php echo get_category_link(3); ?>">MySQL</a>
    </div>
  </header>