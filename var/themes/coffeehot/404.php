<?php
/**
 * 404 error page template
 *
 */
?>

<?php get_header(); ?>
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
                    <h1>Страница не найдена</h1>
                    <p>Извините, но данная страница не существует, либо была удалена.</p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>