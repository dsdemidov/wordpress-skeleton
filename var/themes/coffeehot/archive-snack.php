<?php
/**
 * Snack machines post archive template
 */
?>
<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'page',
    'pagename' => 'snack-machines',
    'post_status' => 'publish'
);
$the_query = new WP_Query( $args );
if( $the_query->have_posts() ){
    while ( $the_query->have_posts() ): $the_query->the_post(); ?>
        <div class="co-content">
            <div class="co-content__in">
                <?php if (!is_front_page()): ?>
                    <div class="co-breadcrumbs">
                        <ul typeof="BreadcrumbList" vocab="http://schema.org/">
                            <?php if (function_exists('bcn_display_list')) {
                                bcn_display_list();
                            } ?>
                        </ul>
                    </div>
                <?php endif ?>
                <div class="co-article">
                    <div class="co-article__in">
                        <h1><?php the_title() ?></h1>
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata();
} else {
    status_header( 404 );
    nocache_headers();
    include( get_query_template( '404' ) );
    die();
}

?>

<?php get_footer(); ?>