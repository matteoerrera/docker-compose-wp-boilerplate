<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php if(is_front_page()): ?>
        <title><?php bloginfo( 'name' ); echo ' | '; bloginfo('description');  ?></title>
    <?php else: ?>
    <title><?php bloginfo( 'name' ); echo ' | '; wp_title('');  ?></title>
    <?php endif; ?>
    <meta name="theme-color" content="#232843" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" type="text/css">
    <link rel="icon" href="<?php echo get_template_directory_uri().'/favicon.png' ?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<?php get_template_part('template-parts/head'); ?>
