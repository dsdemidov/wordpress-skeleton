<?php /* Name: CEPostsGridTemplate3 */
global $post;
?>

<article <?php post_class('motopress-thumbnail-left motopress-posts-grid-carousel'); ?>>

    <?php
    if ( post_type_supports($post_type, 'thumbnail') && has_post_thumbnail() && $show_featured_image == 'true') {
        echo '<a class="motopress-posts-grid-thumbnail" href="'. get_permalink() .'">';
        the_post_thumbnail($featured_image_size);
        echo '</a>';
    }

    if (post_type_supports($post_type, 'title') && $title_tag != 'hide') {
        echo '<' . $title_tag . ' class="motopress-posts-grid-title"><a href="'. get_permalink() .'">';
        the_title();
        echo '</a></'. $title_tag . '>';
    } ?>

</article>
