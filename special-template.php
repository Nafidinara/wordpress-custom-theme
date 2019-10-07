<?php
/*
Template Name: Special Layout
*/
get_header();

    if (have_posts()) :
    while (have_posts()) : the_post();?>

        <article class="post page">
        <h2><?php the_title();?></h2>
        <div class="info-box">
            <h4>This Info Box</h4>
            <p> It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                 publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <?php the_content();?>
        </article>

    <?php endwhile;

    else :
        echo '<p>NOT FOUND</p>';
    endif;

get_footer();

?>