<?php
/**
 * The template for displaying all single posts and attachments
*/

get_header();
while ( have_posts() ) : the_post();

?>
<div class="post">
    <h1><?php the_title()?></h1>
    <p class="date"><?php the_date() ?></p>
    <div class="featured">
        <?php the_post_thumbnail(); ?>
    </div>
    <p><?php the_content() ?></p>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
