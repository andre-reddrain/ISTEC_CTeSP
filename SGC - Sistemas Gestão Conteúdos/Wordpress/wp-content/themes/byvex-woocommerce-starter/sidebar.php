<?php

/**
 * @package byvex-woocommerce-starter
 */

?>

<?php if ( is_active_sidebar('sidebar-1') ){ ?>
    <section class="bg-light">
        <div class="container-xxl py-4">
            <aside class="widget-area row gy-3 justify-content-between">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </aside>
        </div>
    </section>
<?php }
