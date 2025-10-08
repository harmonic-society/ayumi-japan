<?php
/**
 * The template for displaying single posts
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="container">
    <div class="site-main">
        <main id="primary" class="content-area">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-meta">
                            <span class="posted-on">
                                <?php echo get_the_date(); ?>
                            </span>
                            <span class="byline">
                                by <?php the_author_posts_link(); ?>
                            </span>
                            <span class="cat-links">
                                <?php the_category( ', ' ); ?>
                            </span>
                            <?php if ( has_tag() ) : ?>
                                <span class="tags-links">
                                    <?php the_tags( '', ', ' ); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>

                        <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ayumi-japan' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>

                    <footer class="entry-footer">
                        <?php
                        // Post navigation
                        the_post_navigation( array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( '前の記事', 'ayumi-japan' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( '次の記事', 'ayumi-japan' ) . '</span> <span class="nav-title">%title</span>',
                        ) );
                        ?>
                    </footer>
                </article>

                <?php
                // If comments are open or we have at least one comment, load the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile;
            ?>

        </main>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php
get_footer();
