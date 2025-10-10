<?php
/**
 * The footer template file
 *
 * @package Ayumi_Japan
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            <?php endif; ?>

            <div class="site-info">
                <p>
                    &copy; <?php echo date( 'Y' ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </p>
            </div>

            <?php
            if ( has_nav_menu( 'footer' ) ) :
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'depth'          => 1,
                ) );
            endif;
            ?>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
