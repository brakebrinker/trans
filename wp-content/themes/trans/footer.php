        <footer>
            <div class="container">
                <div class="row">
                    <?php if (!dynamic_sidebar("footer-widget-area") ) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
    <!-- jquery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="<?php bloginfo('template_url'); ?>/slider/jquery.bxslider.min.js"></script>
    <!-- браузерные префиксы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- JS -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script> 
    <script src="<?php bloginfo('template_url'); ?>/js/1.js"></script> 
</body>
</html>