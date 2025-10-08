<?php
/**
 * The main template file
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="container">
    <div class="site-main">
        <main id="primary" class="content-area">

            <?php
            if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="entry-meta">
                                <span class="posted-on"><?php echo get_the_date(); ?></span>
                                <span class="byline"> by <?php the_author(); ?></span>
                                <span class="cat-links"><?php the_category(', '); ?></span>
                            </div>
                        </header>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more">続きを読む</a>
                        </footer>
                    </article>

                    <?php
                endwhile;

                the_posts_navigation();

            else :
                ?>

                <p><?php esc_html_e( '投稿が見つかりませんでした。', 'ayumi-japan' ); ?></p>

                <?php
            endif;
            ?>

        </main>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php
get_footer();
