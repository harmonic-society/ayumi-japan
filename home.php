<?php
/**
 * The blog home template file
 *
 * ブログ一覧ページ - 調査事例やノウハウを発信
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="blog-page">
    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">調査事例・ノウハウ</h1>
                <p class="blog-hero-description">
                    アンケート調査の実践的なノウハウ、事例、業界トレンドなど、<br>
                    ビジネスに役立つ情報を発信しています。
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="blog-content">
        <div class="container">
            <div class="blog-layout">
                <main class="blog-main">
                    <?php if ( have_posts() ) : ?>

                        <div class="blog-posts">
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post-card' ); ?>>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="blog-post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'large' ); ?>
                                            </a>
                                            <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) :
                                                ?>
                                                <div class="blog-post-category">
                                                    <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
                                                        <?php echo esc_html( $categories[0]->name ); ?>
                                                    </a>
                                                </div>
                                                <?php
                                            endif;
                                            ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="blog-post-content">
                                        <div class="blog-post-meta">
                                            <span class="blog-post-date">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 2H3C2.44772 2 2 2.44772 2 3V11C2 11.5523 2.44772 12 3 12H11C11.5523 12 12 11.5523 12 11V3C12 2.44772 11.5523 2 11 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.5 1V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M4.5 1V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M2 5H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                            <?php if ( get_the_author() ) : ?>
                                                <span class="blog-post-author">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 6.5C8.24264 6.5 9.25 5.49264 9.25 4.25C9.25 3.00736 8.24264 2 7 2C5.75736 2 4.75 3.00736 4.75 4.25C4.75 5.49264 5.75736 6.5 7 6.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M11.5 12C11.5 10.067 9.433 8.5 7 8.5C4.567 8.5 2.5 10.067 2.5 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <?php the_author(); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>

                                        <h2 class="blog-post-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>

                                        <div class="blog-post-excerpt">
                                            <?php echo wp_trim_words( get_the_excerpt(), 60, '...' ); ?>
                                        </div>

                                        <div class="blog-post-footer">
                                            <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                                続きを読む
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <?php
                            endwhile;
                            ?>
                        </div>

                        <!-- Pagination -->
                        <div class="blog-pagination">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> 前へ',
                                'next_text' => '次へ <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            ) );
                            ?>
                        </div>

                    <?php else : ?>

                        <div class="no-posts">
                            <p>まだ投稿がありません。</p>
                        </div>

                    <?php endif; ?>
                </main>

                <!-- Sidebar -->
                <aside class="blog-sidebar">
                    <!-- Search -->
                    <div class="sidebar-widget sidebar-search">
                        <h3 class="widget-title">記事を探す</h3>
                        <?php get_search_form(); ?>
                    </div>

                    <!-- Categories -->
                    <?php
                    $categories = get_categories( array(
                        'orderby' => 'count',
                        'order'   => 'DESC',
                        'number'  => 10,
                    ) );
                    if ( ! empty( $categories ) ) :
                        ?>
                        <div class="sidebar-widget sidebar-categories">
                            <h3 class="widget-title">カテゴリー</h3>
                            <ul class="category-list">
                                <?php foreach ( $categories as $category ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                                            <?php echo esc_html( $category->name ); ?>
                                            <span class="category-count"><?php echo esc_html( $category->count ); ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php
                    endif;
                    ?>

                    <!-- Recent Posts -->
                    <?php
                    $recent_posts = new WP_Query( array(
                        'posts_per_page' => 5,
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ) );
                    if ( $recent_posts->have_posts() ) :
                        ?>
                        <div class="sidebar-widget sidebar-recent-posts">
                            <h3 class="widget-title">最新の記事</h3>
                            <ul class="recent-posts-list">
                                <?php
                                while ( $recent_posts->have_posts() ) :
                                    $recent_posts->the_post();
                                    ?>
                                    <li class="recent-post-item">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <div class="recent-post-thumbnail">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="recent-post-info">
                                            <h4 class="recent-post-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <span class="recent-post-date"><?php echo get_the_date(); ?></span>
                                        </div>
                                    </li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                        <?php
                    endif;
                    ?>

                    <!-- CTA Widget -->
                    <div class="sidebar-widget sidebar-cta">
                        <h3 class="widget-title">お問い合わせ</h3>
                        <p>アンケート調査のご相談はお気軽にお問い合わせください。</p>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sidebar-cta-button">
                            お問い合わせ
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<style>
/* Blog Page Styles */
.blog-page {
    background-color: var(--bg-white);
}

/* Blog Hero */
.blog-hero {
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--accent-color) 50%, var(--primary-color) 100%);
    padding: 80px 0 60px;
    text-align: center;
    position: relative;
    border-bottom: 3px solid var(--primary-color);
    overflow: hidden;
}

.blog-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
        repeating-linear-gradient(45deg, transparent, transparent 35px, var(--border-color) 35px, var(--border-color) 36px),
        repeating-linear-gradient(-45deg, transparent, transparent 35px, var(--border-color) 35px, var(--border-color) 36px);
    opacity: 0.15;
}

.blog-hero-content {
    position: relative;
    z-index: 1;
}

.blog-hero-title {
    font-size: 3em;
    font-weight: 700;
    color: var(--secondary-color);
    margin-bottom: 20px;
    text-shadow:
        2px 2px 4px rgba(255,255,255,0.5),
        0 0 20px rgba(255,255,255,0.3);
}

.blog-hero-description {
    font-size: 1.2em;
    color: var(--text-primary);
    line-height: 1.9;
    font-weight: 500;
    text-shadow:
        1px 1px 3px rgba(255,255,255,0.5),
        0 0 15px rgba(255,255,255,0.3);
}

/* Blog Content */
.blog-content {
    padding: 60px 0;
}

.blog-layout {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 50px;
}

/* Blog Posts */
.blog-posts {
    display: grid;
    gap: 40px;
}

.blog-post-card {
    background: linear-gradient(to bottom, var(--bg-white) 0%, var(--bg-cream) 100%);
    border-radius: 16px;
    overflow: hidden;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px var(--shadow-soft);
    display: grid;
    grid-template-columns: 320px 1fr;
    gap: 0;
}

.blog-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px var(--shadow-medium);
    border-color: var(--primary-color);
}

.blog-post-thumbnail {
    position: relative;
    overflow: hidden;
}

.blog-post-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.blog-post-card:hover .blog-post-thumbnail img {
    transform: scale(1.1);
}

.blog-post-category {
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 2;
}

.blog-post-category a {
    display: inline-block;
    padding: 6px 16px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    color: var(--text-primary);
    font-size: 0.85em;
    font-weight: 600;
    border-radius: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
}

.blog-post-category a:hover {
    background: linear-gradient(135deg, var(--accent-color) 0%, var(--primary-color) 100%);
    transform: translateY(-2px);
}

.blog-post-content {
    padding: 30px 35px;
    display: flex;
    flex-direction: column;
}

.blog-post-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
    font-size: 0.9em;
    color: var(--text-secondary);
    flex-wrap: wrap;
}

.blog-post-meta span {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.blog-post-meta svg {
    color: var(--primary-color);
}

.blog-post-title {
    font-size: 1.6em;
    font-weight: 600;
    margin-bottom: 15px;
    line-height: 1.5;
}

.blog-post-title a {
    color: var(--secondary-color);
    transition: color 0.3s ease;
}

.blog-post-title a:hover {
    color: var(--primary-color);
}

.blog-post-excerpt {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
    flex-grow: 1;
}

.blog-post-footer {
    margin-top: auto;
}

.blog-read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--accent-color);
    font-weight: 600;
    font-size: 0.95em;
    transition: all 0.3s ease;
}

.blog-read-more:hover {
    color: var(--secondary-color);
    gap: 12px;
}

.blog-read-more svg {
    transition: transform 0.3s ease;
}

.blog-read-more:hover svg {
    transform: translateX(3px);
}

/* Pagination */
.blog-pagination {
    margin-top: 60px;
}

.blog-pagination .nav-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}

.blog-pagination .page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 45px;
    height: 45px;
    padding: 0 15px;
    background: var(--bg-white);
    color: var(--text-primary);
    border: 2px solid var(--border-color);
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.blog-pagination .page-numbers:hover {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    border-color: var(--primary-color);
    color: var(--text-primary);
    transform: translateY(-2px);
}

.blog-pagination .page-numbers.current {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    border-color: var(--primary-color);
    color: var(--text-primary);
}

.blog-pagination .page-numbers.dots {
    border: none;
    background: transparent;
}

.blog-pagination .prev,
.blog-pagination .next {
    gap: 8px;
}

/* Sidebar */
.blog-sidebar {
    position: sticky;
    top: 100px;
    align-self: start;
}

.sidebar-widget {
    background: linear-gradient(to bottom, var(--bg-white) 0%, var(--bg-cream) 100%);
    border: 2px solid var(--border-color);
    border-radius: 16px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px var(--shadow-soft);
}

.widget-title {
    font-size: 1.3em;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid var(--border-color);
}

/* Search */
.sidebar-search .search-form {
    position: relative;
}

.sidebar-search .search-field {
    width: 100%;
    padding: 12px 45px 12px 15px;
    border: 2px solid var(--border-color);
    border-radius: 25px;
    font-size: 0.95em;
    background-color: var(--bg-white);
    transition: all 0.3s ease;
}

.sidebar-search .search-field:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(212, 175, 135, 0.1);
}

.sidebar-search .search-submit {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    border: none;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
    transition: all 0.3s ease;
    color: var(--text-primary);
    font-weight: 600;
}

.sidebar-search .search-submit:hover {
    transform: translateY(-50%) scale(1.1);
}

/* Categories */
.category-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.category-list li {
    margin-bottom: 12px;
}

.category-list a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
    background-color: var(--bg-white);
    border-radius: 8px;
    color: var(--text-primary);
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
}

.category-list a:hover {
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--accent-color) 100%);
    border-color: var(--primary-color);
    transform: translateX(5px);
}

.category-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 28px;
    height: 28px;
    padding: 0 8px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    color: var(--text-primary);
    font-size: 0.85em;
    font-weight: 600;
    border-radius: 14px;
}

/* Recent Posts */
.recent-posts-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.recent-post-item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid var(--border-color);
}

.recent-post-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.recent-post-thumbnail {
    flex-shrink: 0;
    width: 70px;
    height: 70px;
    border-radius: 8px;
    overflow: hidden;
}

.recent-post-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.recent-post-item:hover .recent-post-thumbnail img {
    transform: scale(1.1);
}

.recent-post-info {
    flex-grow: 1;
}

.recent-post-title {
    font-size: 0.95em;
    font-weight: 600;
    margin-bottom: 5px;
    line-height: 1.5;
}

.recent-post-title a {
    color: var(--text-primary);
}

.recent-post-title a:hover {
    color: var(--primary-color);
}

.recent-post-date {
    font-size: 0.8em;
    color: var(--text-secondary);
}

/* CTA Widget */
.sidebar-cta {
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--accent-color) 100%);
    border-color: var(--primary-color);
    text-align: center;
}

.sidebar-cta p {
    margin-bottom: 20px;
    color: var(--text-primary);
    line-height: 1.7;
}

.sidebar-cta-button {
    display: inline-block;
    padding: 12px 30px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    color: var(--bg-white);
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid var(--bg-white);
}

.sidebar-cta-button:hover {
    background: var(--bg-white);
    color: var(--secondary-color);
    border-color: var(--secondary-color);
    transform: translateY(-2px);
}

/* No Posts */
.no-posts {
    text-align: center;
    padding: 80px 20px;
    color: var(--text-secondary);
}

/* Responsive */
@media (max-width: 1024px) {
    .blog-layout {
        grid-template-columns: 1fr 280px;
        gap: 35px;
    }

    .blog-post-card {
        grid-template-columns: 250px 1fr;
    }

    .blog-sidebar {
        top: 80px;
    }
}

@media (max-width: 768px) {
    .blog-hero {
        padding: 50px 0 40px;
    }

    .blog-hero-title {
        font-size: 2em;
    }

    .blog-hero-description {
        font-size: 1em;
    }

    .blog-content {
        padding: 40px 0;
    }

    .blog-layout {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .blog-post-card {
        grid-template-columns: 1fr;
    }

    .blog-post-thumbnail {
        height: 200px;
    }

    .blog-post-content {
        padding: 25px;
    }

    .blog-sidebar {
        position: static;
    }

    .sidebar-widget {
        padding: 25px;
    }
}
</style>

<?php
get_footer();
