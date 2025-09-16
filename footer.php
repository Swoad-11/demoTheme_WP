<footer class="footer text-center py-2 theme-bg-dark">
    <p class="mb-2">&copy; <?php echo date('Y'); ?> <a href="https://github.com/Swoad-11">Toufiq Islam Swoad</a></p>

    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="footer-widgets">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
    <?php endif; ?>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
