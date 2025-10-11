<?php
/**
 * The template for displaying single whitepaper posts
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

                $download_url = get_post_meta( get_the_ID(), '_whitepaper_download_url', true );
                $file_size = get_post_meta( get_the_ID(), '_whitepaper_file_size', true );
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'whitepaper-single' ); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-meta">
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                            <?php
                            $categories = get_the_terms( get_the_ID(), 'whitepaper_category' );
                            if ( $categories && ! is_wp_error( $categories ) ) :
                                ?>
                                <span class="categories">
                                    <?php
                                    $cat_links = array();
                                    foreach ( $categories as $category ) {
                                        $cat_links[] = '<a href="' . esc_url( get_term_link( $category ) ) . '">' . esc_html( $category->name ) . '</a>';
                                    }
                                    echo implode( ', ', $cat_links );
                                    ?>
                                </span>
                            <?php endif; ?>
                            <?php if ( $file_size ) : ?>
                                <span class="file-size">📁 <?php echo esc_html( $file_size ); ?></span>
                            <?php endif; ?>
                        </div>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Download CTA Box -->
                    <?php if ( $download_url ) : ?>
                        <div class="download-cta-box">
                            <div class="download-icon"><i class="fas fa-file-download"></i></div>
                            <h2>この資料をダウンロード</h2>
                            <p>アンケート調査に関する実践的なノウハウをまとめた資料です。フォームに必要事項をご入力いただくと、無料でダウンロードいただけます。</p>
                            <?php
                            // ダウンロードページのURLを生成
                            $download_page_url = home_url('/download/?doc=' . get_the_ID());
                            ?>
                            <a href="<?php echo esc_url( $download_page_url ); ?>" class="download-button">
                                <span class="button-icon"><i class="fas fa-download"></i></span>
                                <span class="button-text">フォーム入力してダウンロード</span>
                                <?php if ( $file_size ) : ?>
                                    <span class="button-size">(<?php echo esc_html( $file_size ); ?>)</span>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- Bottom Download CTA -->
                    <?php if ( $download_url ) : ?>
                        <div class="download-cta-bottom">
                            <p>この資料が役に立ちましたら、ぜひダウンロードしてご活用ください。</p>
                            <a href="<?php echo esc_url( $download_page_url ); ?>" class="download-button-bottom">
                                フォーム入力してダウンロード <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    <?php endif; ?>

                    <footer class="entry-footer">
                        <?php
                        // Related whitepapers
                        $related_args = array(
                            'post_type'      => 'whitepaper',
                            'posts_per_page' => 3,
                            'post__not_in'   => array( get_the_ID() ),
                            'orderby'        => 'rand',
                        );

                        // Get same category if exists
                        if ( $categories && ! is_wp_error( $categories ) ) {
                            $cat_ids = array();
                            foreach ( $categories as $category ) {
                                $cat_ids[] = $category->term_id;
                            }
                            $related_args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'whitepaper_category',
                                    'field'    => 'term_id',
                                    'terms'    => $cat_ids,
                                ),
                            );
                        }

                        $related_query = new WP_Query( $related_args );

                        if ( $related_query->have_posts() ) :
                            ?>
                            <section class="related-whitepapers">
                                <h2>関連資料</h2>
                                <div class="related-grid">
                                    <?php
                                    while ( $related_query->have_posts() ) :
                                        $related_query->the_post();
                                        $related_download = get_post_meta( get_the_ID(), '_whitepaper_download_url', true );
                                        ?>
                                        <article class="related-item">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <div class="related-thumbnail">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail( 'medium' ); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <h3 class="related-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div class="related-excerpt">
                                                <?php echo wp_trim_words( get_the_excerpt(), 15 ); ?>
                                            </div>
                                            <?php if ( $related_download ) : ?>
                                                <a href="<?php the_permalink(); ?>" class="related-link">詳細を見る →</a>
                                            <?php endif; ?>
                                        </article>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </section>
                            <?php
                        endif;
                        ?>
                    </footer>
                </article>

                <?php
            endwhile;
            ?>

        </main>

        <?php get_sidebar(); ?>
    </div>
</div>

<style>
/* Whitepaper Single Styles */
.whitepaper-single .entry-header {
    text-align: center;
    margin-bottom: 40px;
}

.whitepaper-single .entry-title {
    font-size: 2.2em;
    color: var(--secondary-color);
    margin-bottom: 20px;
}

.whitepaper-single .entry-meta {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    font-size: 0.95em;
    color: var(--text-secondary);
}

.whitepaper-single .entry-meta span {
    display: inline-flex;
    align-items: center;
}

/* Download CTA Box */
.download-cta-box {
    background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
    color: var(--bg-white);
    padding: 50px;
    border-radius: 16px;
    text-align: center;
    margin: 40px 0;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.download-icon {
    font-size: 4em;
    margin-bottom: 20px;
}

.download-cta-box h2 {
    font-size: 2em;
    color: var(--bg-white);
    margin-bottom: 15px;
}

.download-cta-box p {
    font-size: 1.1em;
    margin-bottom: 30px;
    color: var(--bg-light);
}

.download-button {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 18px 50px;
    background-color: var(--bg-white);
    color: var(--secondary-color);
    font-size: 1.3em;
    font-weight: 700;
    border-radius: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    border: 3px solid var(--bg-white);
}

.download-button:hover {
    background-color: var(--accent-color);
    border-color: var(--accent-color);
    color: var(--bg-white);
    transform: scale(1.05);
}

.button-icon {
    font-size: 1.2em;
}

.button-size {
    font-size: 0.7em;
    opacity: 0.8;
}

/* Bottom Download CTA */
.download-cta-bottom {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    margin: 50px 0 40px;
    border: 2px solid var(--border-color);
}

.download-cta-bottom p {
    font-size: 1.1em;
    color: var(--text-primary);
    margin-bottom: 25px;
}

.download-button-bottom {
    display: inline-block;
    padding: 15px 40px;
    background-color: var(--primary-color);
    color: var(--bg-white);
    font-size: 1.2em;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.download-button-bottom:hover {
    background-color: var(--accent-color);
    color: var(--bg-white);
    transform: translateY(-2px);
}

/* Related Whitepapers */
.related-whitepapers {
    margin-top: 60px;
    padding-top: 50px;
    border-top: 3px solid var(--border-color);
}

.related-whitepapers h2 {
    font-size: 2em;
    color: var(--secondary-color);
    margin-bottom: 30px;
    text-align: center;
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.related-item {
    background-color: var(--bg-white);
    border-radius: 12px;
    overflow: hidden;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
}

.related-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    border-color: var(--primary-color);
}

.related-thumbnail img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.related-item h3,
.related-item .related-excerpt,
.related-item .related-link {
    padding: 0 20px;
}

.related-title {
    font-size: 1.2em;
    margin: 20px 0 15px;
}

.related-title a {
    color: var(--secondary-color);
}

.related-title a:hover {
    color: var(--primary-color);
}

.related-excerpt {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 15px;
}

.related-link {
    display: inline-block;
    color: var(--accent-color);
    font-weight: 500;
    margin-bottom: 20px;
}

.related-link:hover {
    color: var(--secondary-color);
}

/* Responsive */
@media (max-width: 768px) {
    .download-cta-box {
        padding: 30px 20px;
    }

    .download-cta-box h2 {
        font-size: 1.5em;
    }

    .download-button {
        padding: 15px 30px;
        font-size: 1.1em;
    }

    .related-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
get_footer();
