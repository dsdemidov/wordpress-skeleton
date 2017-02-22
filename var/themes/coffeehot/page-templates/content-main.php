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
                        <h1><?php the_title() ?></h1>
                        <?php the_content() ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif ?>
    </div>
</div>