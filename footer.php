<?php
$footer_layout = '3,3,3,3';
$columns = explode(',', $footer_layout);
$color_mode = 'dark';
?>


<!-- Footer -->
<footer class="text-center text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        Get connected with us on social networks
    </section>

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

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<?php wp_footer(); ?>
</body>

</html>