<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>
    <?php wp_title(' | ',true,'right'); ?>
    <?php bloginfo('name') ?>
  </title>

  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/sexymenustyle.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<div id="container">

<div class="navbar navbar-fixed-top">
<div id="header">
  <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
  <p><?php bloginfo('description') ?></p>
<div id="search-form"><?php echo get_search_form(); ?></div>
</div>


<?php wp_nav_menu(array(
    'theme_location'  => 'navigation'
)); ?>

</div>



