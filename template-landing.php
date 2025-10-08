<?php
/**
 * Template Name: ランディングページ
 * Template Post Type: page
 *
 * サービス・イベント単位で個別展開するLPテンプレート
 *
 * @package Ayumi_Japan
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'landing-page' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="landing-page-wrapper">
    <!-- Minimal Header for LP -->
    <header class="lp-header">
        <div class="container">
            <div class="lp-logo">
                <?php
                if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </header>

    <main class="lp-content">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Hero Section -->
                <section class="lp-hero">
                    <div class="container">
                        <h1 class="lp-title"><?php the_title(); ?></h1>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="lp-hero-image">
                                <?php the_post_thumbnail( 'full' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>

                <!-- Main Content -->
                <section class="lp-main-content">
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                </section>

                <!-- CTA Section (Fixed at bottom on scroll) -->
                <section class="lp-cta-section">
                    <div class="container">
                        <div class="lp-cta-box">
                            <h2 class="lp-cta-title">今すぐお問い合わせ</h2>
                            <p class="lp-cta-text">無料相談・お見積りはこちらから</p>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="lp-cta-button">お問い合わせフォームへ</a>
                        </div>
                    </div>
                </section>
            </article>

        <?php endwhile; ?>
    </main>

    <!-- Minimal Footer for LP -->
    <footer class="lp-footer">
        <div class="container">
            <p class="lp-footer-text">
                &copy; <?php echo date( 'Y' ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </p>
            <nav class="lp-footer-nav">
                <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">利用規約</a>
            </nav>
        </div>
    </footer>
</div>

<style>
/* Landing Page Specific Styles */
.landing-page-wrapper {
    background-color: var(--bg-white);
}

/* Minimal Header */
.lp-header {
    padding: 20px 0;
    background-color: var(--bg-white);
    border-bottom: 2px solid var(--border-color);
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.lp-logo {
    text-align: center;
}

.lp-logo a {
    font-size: 1.8em;
    font-weight: 700;
    color: var(--secondary-color);
}

/* Hero Section */
.lp-hero {
    background: linear-gradient(135deg, var(--secondary-color) 0%, #6B3869 50%, var(--primary-color) 100%);
    color: var(--bg-white);
    padding: 80px 0 60px;
    text-align: center;
}

.lp-title {
    font-size: 3em;
    font-weight: 700;
    margin-bottom: 40px;
    line-height: 1.4;
    color: var(--bg-white);
}

.lp-hero-image {
    max-width: 900px;
    margin: 0 auto;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.3);
}

.lp-hero-image img {
    width: 100%;
    height: auto;
}

/* Main Content */
.lp-main-content {
    padding: 80px 0;
    background-color: var(--bg-white);
}

.lp-main-content .container {
    max-width: 900px;
}

.lp-main-content h2 {
    font-size: 2.2em;
    color: var(--secondary-color);
    margin: 60px 0 30px;
    padding-bottom: 15px;
    border-bottom: 3px solid var(--primary-color);
}

.lp-main-content h3 {
    font-size: 1.8em;
    color: var(--secondary-color);
    margin: 40px 0 20px;
}

.lp-main-content p {
    font-size: 1.1em;
    line-height: 2;
    color: var(--text-primary);
    margin-bottom: 25px;
}

.lp-main-content ul,
.lp-main-content ol {
    font-size: 1.05em;
    line-height: 1.9;
    color: var(--text-primary);
    margin: 25px 0 25px 30px;
}

.lp-main-content li {
    margin-bottom: 12px;
}

/* Highlight Boxes */
.lp-main-content .wp-block-group,
.highlight-box {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    padding: 30px;
    border-radius: 12px;
    border-left: 5px solid var(--accent-color);
    margin: 40px 0;
}

/* CTA Section */
.lp-cta-section {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    padding: 60px 0;
    margin-top: 80px;
}

.lp-cta-box {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.lp-cta-title {
    font-size: 2.5em;
    color: var(--bg-white);
    margin-bottom: 15px;
    font-weight: 700;
}

.lp-cta-text {
    font-size: 1.3em;
    color: var(--bg-white);
    margin-bottom: 35px;
}

.lp-cta-button {
    display: inline-block;
    padding: 20px 60px;
    background-color: var(--bg-white);
    color: var(--secondary-color);
    font-size: 1.3em;
    font-weight: 700;
    border-radius: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    border: 3px solid var(--bg-white);
}

.lp-cta-button:hover {
    background-color: var(--secondary-color);
    color: var(--bg-white);
    transform: scale(1.05);
    box-shadow: 0 6px 25px rgba(0,0,0,0.3);
}

/* Sticky CTA (Optional - activate via JS) */
.lp-cta-section.sticky {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    margin-top: 0;
    padding: 20px 0;
    z-index: 99;
    box-shadow: 0 -4px 15px rgba(0,0,0,0.2);
}

.lp-cta-section.sticky .lp-cta-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 100%;
}

.lp-cta-section.sticky .lp-cta-title {
    font-size: 1.5em;
    margin: 0;
}

.lp-cta-section.sticky .lp-cta-text {
    display: none;
}

.lp-cta-section.sticky .lp-cta-button {
    padding: 15px 40px;
    font-size: 1.1em;
}

/* Footer */
.lp-footer {
    background-color: var(--secondary-color);
    color: var(--bg-white);
    padding: 30px 0;
    text-align: center;
}

.lp-footer-text {
    margin-bottom: 15px;
}

.lp-footer-text a {
    color: var(--primary-color);
}

.lp-footer-text a:hover {
    color: var(--accent-color);
}

.lp-footer-nav {
    display: flex;
    gap: 25px;
    justify-content: center;
    flex-wrap: wrap;
}

.lp-footer-nav a {
    color: var(--bg-light);
    font-size: 0.95em;
}

.lp-footer-nav a:hover {
    color: var(--primary-color);
}

/* Feature Sections */
.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin: 50px 0;
}

.feature-item {
    background-color: var(--bg-white);
    padding: 35px;
    border-radius: 12px;
    border: 2px solid var(--border-color);
    text-align: center;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    border-color: var(--primary-color);
}

.feature-icon {
    font-size: 3em;
    margin-bottom: 20px;
}

.feature-item h3 {
    color: var(--secondary-color);
    font-size: 1.4em;
    margin-bottom: 15px;
}

.feature-item p {
    color: var(--text-secondary);
    font-size: 1em;
}

/* Testimonials */
.testimonial-box {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    padding: 40px;
    border-radius: 12px;
    border-left: 5px solid var(--success-color);
    margin: 40px 0;
}

.testimonial-text {
    font-size: 1.2em;
    font-style: italic;
    color: var(--text-primary);
    line-height: 1.9;
    margin-bottom: 20px;
}

.testimonial-author {
    text-align: right;
    color: var(--text-secondary);
    font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
    .lp-title {
        font-size: 2em;
    }

    .lp-cta-title {
        font-size: 1.8em;
    }

    .lp-cta-button {
        padding: 15px 40px;
        font-size: 1.1em;
    }

    .lp-main-content {
        padding: 50px 0;
    }

    .lp-main-content h2 {
        font-size: 1.7em;
    }

    .feature-grid {
        grid-template-columns: 1fr;
    }

    .lp-cta-section.sticky .lp-cta-box {
        flex-direction: column;
        gap: 15px;
    }
}
</style>

<script>
// Optional: Sticky CTA on scroll
(function() {
    'use strict';

    window.addEventListener('scroll', function() {
        const ctaSection = document.querySelector('.lp-cta-section');
        if (!ctaSection) return;

        const scrollPosition = window.scrollY + window.innerHeight;
        const ctaPosition = ctaSection.offsetTop;

        // Activate sticky CTA when user scrolls past it
        if (scrollPosition < ctaPosition && window.scrollY > 500) {
            ctaSection.classList.add('sticky');
        } else {
            ctaSection.classList.remove('sticky');
        }
    });
})();
</script>

<?php wp_footer(); ?>

</body>
</html>
