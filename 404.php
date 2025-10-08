<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="container">
    <div class="site-main">
        <main id="primary" class="content-area">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'ページが見つかりませんでした', 'ayumi-japan' ); ?></h1>
                </header>

                <div class="page-content">
                    <p><?php esc_html_e( 'お探しのページは見つかりませんでした。検索をお試しください。', 'ayumi-japan' ); ?></p>

                    <?php get_search_form(); ?>

                    <h2><?php esc_html_e( '最近の投稿', 'ayumi-japan' ); ?></h2>
                    <ul>
                        <?php
                        $recent_posts = wp_get_recent_posts( array(
                            'numberposts' => 5,
                            'post_status' => 'publish',
                        ) );

                        foreach ( $recent_posts as $recent ) :
                            ?>
                            <li>
                                <a href="<?php echo get_permalink( $recent['ID'] ); ?>">
                                    <?php echo esc_html( $recent['post_title'] ); ?>
                                </a>
                            </li>
                            <?php
                        endforeach;
                        wp_reset_query();
                        ?>
                    </ul>

                    <h2><?php esc_html_e( 'カテゴリー', 'ayumi-japan' ); ?></h2>
                    <ul>
                        <?php
                        wp_list_categories( array(
                            'orderby'    => 'count',
                            'order'      => 'DESC',
                            'show_count' => 1,
                            'title_li'   => '',
                            'number'     => 10,
                        ) );
                        ?>
                    </ul>
                </div>
            </section>

        </main>
    </div>
</div>

<?php
get_footer();
