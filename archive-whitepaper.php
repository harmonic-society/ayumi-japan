<?php
/**
 * The template for displaying whitepaper archives
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="container">
    <div class="site-main whitepaper-archive">
        <main id="primary" class="content-area full-width">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        if ( is_tax( 'whitepaper_category' ) ) {
                            single_term_title();
                        } else {
                            echo __( 'ホワイトペーパー・資料一覧', 'ayumi-japan' );
                        }
                        ?>
                    </h1>
                    <?php
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        ?>
                        <div class="archive-description"><?php echo $term_description; ?></div>
                        <?php
                    else :
                        ?>
                        <p class="archive-description">
                            アンケート調査・リサーチに関する実践的なノウハウをまとめた資料を無料でダウンロードいただけます。<br>
                            ビジネス課題の解決にお役立てください。
                        </p>
                        <?php
                    endif;
                    ?>
                </header>

                <!-- Category Filter -->
                <?php
                $categories = get_terms( array(
                    'taxonomy'   => 'whitepaper_category',
                    'hide_empty' => true,
                ) );

                if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) :
                    ?>
                    <div class="category-filter">
                        <span class="filter-label">カテゴリー:</span>
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'whitepaper' ) ); ?>" class="filter-item <?php echo ! is_tax() ? 'active' : ''; ?>">
                            全て
                        </a>
                        <?php foreach ( $categories as $category ) : ?>
                            <a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="filter-item <?php echo is_tax( 'whitepaper_category', $category->term_id ) ? 'active' : ''; ?>">
                                <?php echo esc_html( $category->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php
                endif;
                ?>

                <div class="whitepapers-grid">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        $download_url = get_post_meta( get_the_ID(), '_whitepaper_download_url', true );
                        $file_size = get_post_meta( get_the_ID(), '_whitepaper_file_size', true );
                        $categories = get_the_terms( get_the_ID(), 'whitepaper_category' );
                        ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'whitepaper-card' ); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="whitepaper-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'medium_large' ); ?>
                                    </a>
                                    <?php if ( $categories && ! is_wp_error( $categories ) ) : ?>
                                        <div class="whitepaper-category-badge">
                                            <?php echo esc_html( $categories[0]->name ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <div class="whitepaper-content">
                                <header class="whitepaper-header">
                                    <h2 class="whitepaper-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="whitepaper-meta">
                                        <span class="posted-on"><?php echo get_the_date(); ?></span>
                                        <?php if ( $file_size ) : ?>
                                            <span class="file-size">📁 <?php echo esc_html( $file_size ); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </header>

                                <div class="whitepaper-excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 25 ); ?>
                                </div>

                                <div class="whitepaper-actions">
                                    <a href="<?php the_permalink(); ?>" class="view-details">詳細を見る →</a>
                                    <?php if ( $download_url ) : ?>
                                        <?php
                                        // ダウンロードページのURLを生成
                                        $download_page_url = home_url('/download/?doc=' . get_the_ID());
                                        ?>
                                        <a href="<?php echo esc_url( $download_page_url ); ?>" class="download-direct">
                                            <i class="fas fa-download"></i> ダウンロード
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>

                        <?php
                    endwhile;
                    ?>
                </div>

                <?php
                the_posts_navigation( array(
                    'prev_text' => __( '← 前のページ', 'ayumi-japan' ),
                    'next_text' => __( '次のページ →', 'ayumi-japan' ),
                ) );
                ?>

            <?php else : ?>

                <div class="no-results">
                    <h2><?php esc_html_e( '資料が見つかりませんでした', 'ayumi-japan' ); ?></h2>
                    <p><?php esc_html_e( '申し訳ございません。現在、該当する資料はございません。', 'ayumi-japan' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">ホームに戻る</a>
                </div>

            <?php endif; ?>

        </main>
    </div>
</div>

<style>
/* Whitepaper Archive Styles */
.whitepaper-archive .full-width {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.whitepaper-archive .page-header {
    text-align: center;
    padding: 60px 0 40px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-radius: 12px;
    margin-bottom: 50px;
}

.whitepaper-archive .page-title {
    font-size: 2.5em;
    color: var(--secondary-color);
    font-weight: 700;
    margin-bottom: 20px;
}

.archive-description {
    font-size: 1.1em;
    color: var(--text-secondary);
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto;
}

/* Category Filter */
.category-filter {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    align-items: center;
    justify-content: center;
    padding: 25px;
    background-color: var(--bg-white);
    border-radius: 8px;
    margin-bottom: 40px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.filter-label {
    font-weight: 600;
    color: var(--text-primary);
}

.filter-item {
    padding: 8px 20px;
    border-radius: 20px;
    border: 2px solid var(--border-color);
    color: var(--text-primary);
    font-weight: 500;
    transition: all 0.3s ease;
}

.filter-item:hover {
    border-color: var(--primary-color);
    background-color: var(--bg-light);
    color: var(--secondary-color);
}

.filter-item.active {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
    color: var(--bg-white);
}

/* Whitepapers Grid */
.whitepapers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 35px;
    margin-bottom: 50px;
}

.whitepaper-card {
    background-color: var(--bg-white);
    border-radius: 12px;
    overflow: hidden;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.whitepaper-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    border-color: var(--primary-color);
}

.whitepaper-thumbnail {
    position: relative;
    overflow: hidden;
}

.whitepaper-thumbnail img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.whitepaper-card:hover .whitepaper-thumbnail img {
    transform: scale(1.05);
}

.whitepaper-category-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: var(--accent-color);
    color: var(--bg-white);
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 0.85em;
    font-weight: 600;
}

.whitepaper-content {
    padding: 25px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.whitepaper-title {
    font-size: 1.4em;
    color: var(--secondary-color);
    margin-bottom: 15px;
    font-weight: 600;
    line-height: 1.4;
}

.whitepaper-title a {
    color: var(--secondary-color);
}

.whitepaper-title a:hover {
    color: var(--primary-color);
}

.whitepaper-meta {
    display: flex;
    gap: 15px;
    font-size: 0.9em;
    color: var(--text-secondary);
    margin-bottom: 15px;
}

.whitepaper-excerpt {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
    flex-grow: 1;
}

.whitepaper-actions {
    display: flex;
    gap: 15px;
    margin-top: auto;
}

.view-details {
    flex: 1;
    text-align: center;
    padding: 12px 20px;
    background-color: var(--bg-light);
    color: var(--secondary-color);
    border-radius: 6px;
    font-weight: 500;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
}

.view-details:hover {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
    color: var(--bg-white);
}

.download-direct {
    flex: 1;
    text-align: center;
    padding: 12px 20px;
    background-color: var(--primary-color);
    color: var(--bg-white);
    border-radius: 6px;
    font-weight: 600;
    border: 2px solid var(--primary-color);
    transition: all 0.3s ease;
}

.download-direct:hover {
    background-color: var(--accent-color);
    border-color: var(--accent-color);
    color: var(--bg-white);
}

/* No Results */
.no-results {
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-radius: 12px;
}

.no-results h2 {
    font-size: 2em;
    color: var(--secondary-color);
    margin-bottom: 20px;
}

.no-results p {
    font-size: 1.1em;
    color: var(--text-secondary);
    margin-bottom: 30px;
}

/* Pagination */
.posts-navigation {
    display: flex;
    justify-content: space-between;
    margin: 40px 0;
    padding: 25px 0;
    border-top: 2px solid var(--border-color);
}

.posts-navigation a {
    padding: 12px 30px;
    background-color: var(--secondary-color);
    color: var(--bg-white);
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.posts-navigation a:hover {
    background-color: var(--primary-color);
    transform: translateX(0);
}

/* Responsive */
@media (max-width: 768px) {
    .whitepapers-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .category-filter {
        flex-direction: column;
        align-items: flex-start;
    }

    .whitepaper-actions {
        flex-direction: column;
    }

    .whitepaper-archive .page-title {
        font-size: 1.8em;
    }
}
</style>

<?php
get_footer();
