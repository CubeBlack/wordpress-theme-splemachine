<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <!-- [wp_head()]  -->
    <?php wp_head(); ?>
    <!-- [wp_head()]  -->
    <link rel="stylesheet" href="<?php css_url()?>caroucel.css">
    <script>
        var pathImg = "<?php img_url()?>";
    </script>
    
</head>

<body>
