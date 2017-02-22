<?php
/**
 * Header template file
 */
?>
<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36170415 = new Ya.Metrika({
                    id:36170415,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36170415" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div class="co-header">
    <div class="co-header__in">
        <div class="co-header-info">
            <div class="co-header-info__phone">+7 (925) 144-00-54</div>
            <div class="co-header-info__orderlink"><a class="co-order-modal" href="#">Оставить заявку</a></div>
        </div>
        <div class="co-header-content">
            <div class="co-logo-wrapper">
                <div class="co-logo">
                    <a href="<?= home_url() ?>">
                        <div class="co-logo__image">
                            <img src="<?= get_template_directory_uri() . '/images/logo-color-80x80.png' ?>"
                                 alt="<?= bloginfo('name') ?>">
                        </div>
                        <div class="co-logo__text">
                            <h1 class="co-logo__title">
                                CoffeeHot
                            </h1>
                            <h2 class="co-logo__slogan">
                                Установка кофейных и снековых автоматов в&nbsp;Москве
                            </h2>
                        </div>
                    </a>
                </div>

            </div>
            <div class="co-header-menu-wrapper">
                <?php wp_nav_menu(array(
                    'menu' => 'primary',
                    'container_class' => 'co-header-menu'
                )) ?>
            </div>
        </div>
    </div>
</div>
