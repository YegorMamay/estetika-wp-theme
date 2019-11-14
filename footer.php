<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="container">
        <div class="copyright">
            <div class="date">&copy; <?php echo date('Y'); ?>. Все права защищены</div>
            <div class="developer">
                <?php _e('Developed by ', 'brainworks') ?><a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>
<script>
    (function ($) {
        let dropDownBtn = $('.js-dropdown');
        let dropDownList = $('.js-phone-list');

        dropDownBtn.on('click', function () {
            $(this).toggleClass('active');
            $(this).siblings('.js-phone-list').fadeToggle(300);
        });

        $(document).click(function (event) {
            if ($(event.target).closest(".js-dropdown, .js-phone-list").length) return;
            dropDownList.fadeOut(300);
            dropDownBtn.removeClass('active');
        });
    })(jQuery);
</script>
</body>
</html>
