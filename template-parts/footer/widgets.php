<?php
$footer_layout = '3,3,3,3';
$columns = explode(',', $footer_layout);
$color_mode = 'dark';
?>

<section class="">
    <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
            <?php foreach ($columns as $i => $col) : ?>
                <div class="col mx-auto mb-4">
                    <?php if (is_active_sidebar('footer-widget-' . $i + 1)) {
                        dynamic_sidebar('footer-widget-' . $i + 1);
                    }
                    ?>

                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>