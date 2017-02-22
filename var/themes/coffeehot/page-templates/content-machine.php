<?php
/**
 * Template for coffee and snack machine singles
 */
global $post;
?>
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
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <div class="co-article">
                    <div class="co-article__in">
                        <?php
                        if ( post_type_supports(get_post_type( $post->ID ), 'thumbnail') && has_post_thumbnail() ) {
                            the_post_thumbnail( array(200,400) );
                        }?>
                        <h1><?php the_title() ?></h1>
                        <?php
                        $drinksNumber = get_post_meta( $post->ID, 'wpcf-drinks', true );
                        if( $drinksNumber ): ?>
                            <div class="co-article-drinks-number">
                                <p><strong><?= __('Количество напитков:', 'coffeehot'); ?>&nbsp<?= $drinksNumber ?></strong></p>
                            </div>
                        <?php endif ?>
                        <?php the_content() ?>
                        <?php
                        $extraText = get_post_meta( $post->ID, 'wpcf-seo', true );
                        if( $extraText ): ?>
                            <div class="co-article-extra">
                                <?= apply_filters( 'the_content', $extraText ); ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif ?>
    </div>
</div>