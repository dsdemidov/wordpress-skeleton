<?php
/**
 * template for displaying coffee and snacks machine grid
 */
function extendPostGridTemplate($motopressCELibrary) {
    // get Post Grid from the library
    $postGridObj = &$motopressCELibrary->getObject(MPCEShortcode::PREFIX . 'posts_grid');
    if ($postGridObj) {
        $template = &$postGridObj->getParameter('template');
        // add custom template to the list
        $template['list']['themes/coffeehot/motopress/templates/machine_post_grid.php'] = __('Machine Post Grid', 'coffeehot');
        $template['list']['themes/coffeehot/motopress/templates/machine_post_grid_carousel.php'] = __('Machine Post Grid Carousel', 'coffeehot');
    }
}
add_action('mp_library', 'extendPostGridTemplate', 11, 1);