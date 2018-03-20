<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php  wp_head(); ?>
    <title><?php the_title(); ?> | <?php echo bloginfo('name'); ?></title>
  </head>
  <body>
    <div class="container">
    <?php echo get_template_directory_uri(); ?>
