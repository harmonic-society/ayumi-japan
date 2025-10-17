<?php
/**
 * Template Name: 会社概要ページ
 * Template Post Type: page
 *
 * 会社概要・代表メッセージを紹介するページテンプレート
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="container">
    <div class="about-page">
        <main id="primary" class="content-area full-width">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="page-header">
                        <h1 class="page-title">"データの声を、企業の力に。"</h1>
                    </header>

                    <!-- 代表メッセージセクション -->
                    <section class="message-section">
                        <h2>代表メッセージ</h2>
                        <div class="message-content">
                            <p>アンケートは単なる質問ではなく、<strong>お客様の「理解のツール」</strong>です。<br>
                            私は数多くの企業課題に関わる中で、<br>
                            "仮説をデータで検証し、行動につなげる"重要性を実感してきました。</p>

                            <p>ayumiでは、設計・回収・分析・報告を一貫して行うことで、<br>
                            数字の裏にある「意思決定のヒント」を提供します。</p>

                            <p>常に最適な提案を。<br>
                            貴社のビジネスを深く理解し、結果につながる調査をお約束します。</p>

                            <div class="representative-name">
                                <p>代表　藤田 歩</p>
                            </div>
                        </div>
                    </section>

                    <!-- 企業理念セクション -->
                    <section class="philosophy-section">
                        <h2>企業理念</h2>
                        <div class="philosophy-grid">
                            <div class="philosophy-item">
                                <div class="philosophy-label">Mission</div>
                                <h3>データで人と企業の理解をつなぐ</h3>
                            </div>
                            <div class="philosophy-item">
                                <div class="philosophy-label">Vision</div>
                                <h3>リサーチをもっと身近で実践的な経営ツールに</h3>
                            </div>
                            <div class="philosophy-item">
                                <div class="philosophy-label">Value</div>
                                <h3>正確さ・誠実さ・スピード</h3>
                            </div>
                        </div>
                    </section>

                    <!-- 会社情報セクション -->
                    <section class="company-info-section">
                        <h2>会社情報</h2>
                        <div class="company-info-content">
                            <dl class="info-list">
                                <div class="info-item">
                                    <dt>企業名</dt>
                                    <dd>株式会社あゆみジャパン創造社</dd>
                                </div>
                                <div class="info-item">
                                    <dt>住所</dt>
                                    <dd>千葉県千葉市中央区中央２丁目５番１号<br>千葉中央ツインビル２号館７階ＣＨＩＢＡＬＡＢＯ</dd>
                                </div>
                                <div class="info-item">
                                    <dt>設立</dt>
                                    <dd>2025年1月</dd>
                                </div>
                                <div class="info-item">
                                    <dt>代表取締役</dt>
                                    <dd>藤田 歩</dd>
                                </div>
                                <div class="info-item">
                                    <dt>URL</dt>
                                    <dd><a href="https://ayumi-jp.com" target="_blank" rel="noopener noreferrer">https://ayumi-jp.com</a></dd>
                                </div>
                            </dl>
                        </div>
                    </section>

                    <!-- CTA -->
                    <section class="about-cta">
                        <div class="cta-box">
                            <h2>お問い合わせはこちら</h2>
                            <p>リサーチに関するご相談、お見積もりなど、お気軽にお問い合わせください。</p>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button-contact">お問い合わせ</a>
                        </div>
                    </section>
                </article>

            <?php endwhile; ?>

        </main>
    </div>
</div>

<style>
.about-page .full-width {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.page-header {
    text-align: center;
    padding: 80px 40px 60px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-radius: 12px;
    margin-bottom: 50px;
}

.page-title {
    font-size: 2.8em;
    color: var(--secondary-color);
    font-weight: 700;
    line-height: 1.5;
}

.message-section,
.philosophy-section,
.company-info-section,
.about-cta {
    margin: 60px 0;
    padding: 60px 50px;
    background-color: var(--bg-white);
    border-radius: 12px;
}

.message-section {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
}

.message-section h2,
.philosophy-section h2,
.company-info-section h2 {
    text-align: center;
    font-size: 2em;
    color: var(--secondary-color);
    margin-bottom: 50px;
    position: relative;
    padding-bottom: 20px;
}

.message-section h2::after,
.philosophy-section h2::after,
.company-info-section h2::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    margin: 15px auto 0;
    border-radius: 2px;
}

.message-content {
    max-width: 900px;
    margin: 0 auto;
}

.message-content p {
    font-size: 1.15em;
    line-height: 2;
    color: var(--text-color);
    margin-bottom: 35px;
}

.message-content strong {
    color: var(--secondary-color);
    font-weight: 700;
}

.representative-name {
    text-align: right;
    margin-top: 50px;
    padding-top: 30px;
    border-top: 2px solid var(--border-color);
}

.representative-name p {
    font-size: 1.3em;
    font-weight: 600;
    color: var(--secondary-color);
    margin: 0;
}

.philosophy-section {
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-light) 100%);
}

.philosophy-grid {
    display: flex;
    flex-direction: column;
    gap: 35px;
    max-width: 900px;
    margin: 0 auto;
}

.philosophy-item {
    padding: 40px 45px;
    background-color: var(--bg-white);
    border-radius: 12px;
    border-left: 6px solid var(--primary-color);
    transition: all 0.3s ease;
}

.philosophy-item:nth-child(2) {
    border-left-color: var(--accent-color);
}

.philosophy-item:nth-child(3) {
    border-left-color: var(--secondary-color);
}

.philosophy-item:hover {
    transform: translateX(8px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.philosophy-label {
    font-size: 0.9em;
    font-weight: 700;
    color: var(--primary-color);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.philosophy-item:nth-child(2) .philosophy-label {
    color: var(--accent-color);
}

.philosophy-item:nth-child(3) .philosophy-label {
    color: var(--secondary-color);
}

.philosophy-item h3 {
    font-size: 1.5em;
    color: var(--secondary-color);
    font-weight: 600;
    margin: 0;
    line-height: 1.6;
}

.company-info-section {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-cream) 100%);
}

.company-info-content {
    max-width: 800px;
    margin: 0 auto;
}

.info-list {
    background-color: var(--bg-white);
    border-radius: 12px;
    padding: 40px 50px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.info-item {
    display: grid;
    grid-template-columns: 180px 1fr;
    gap: 30px;
    padding: 25px 0;
    border-bottom: 1px solid var(--border-color);
}

.info-item:last-child {
    border-bottom: none;
}

.info-item dt {
    font-weight: 700;
    color: var(--secondary-color);
    font-size: 1.1em;
    display: flex;
    align-items: flex-start;
    padding-top: 2px;
}

.info-item dd {
    margin: 0;
    color: var(--text-secondary);
    font-size: 1.05em;
    line-height: 1.8;
}

.info-item dd a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.info-item dd a:hover {
    color: var(--secondary-color);
    text-decoration: underline;
}

.about-cta {
    background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
    color: var(--bg-white);
    text-align: center;
}

.cta-box h2 {
    color: var(--bg-white);
    margin-bottom: 20px;
    font-size: 2em;
}

.cta-box p {
    font-size: 1.1em;
    margin-bottom: 30px;
    color: var(--bg-light);
}

.cta-button {
    background-color: var(--bg-white);
    color: var(--secondary-color);
    border: 2px solid var(--bg-white);
    font-size: 1.2em;
    padding: 15px 50px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.cta-button:hover {
    background-color: var(--accent-color);
    color: var(--bg-white);
    border-color: var(--accent-color);
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .page-header {
        padding: 60px 20px 40px;
    }

    .page-title {
        font-size: 2em;
    }

    .message-section,
    .philosophy-section,
    .company-info-section,
    .about-cta {
        padding: 40px 25px;
    }

    .message-content p {
        font-size: 1em;
        line-height: 1.8;
    }

    .representative-name p {
        font-size: 1.1em;
    }

    .philosophy-item {
        padding: 30px 25px;
    }

    .philosophy-item h3 {
        font-size: 1.2em;
    }

    .info-list {
        padding: 30px 20px;
    }

    .info-item {
        grid-template-columns: 1fr;
        gap: 10px;
        padding: 20px 0;
    }

    .info-item dt {
        font-size: 1em;
        padding-top: 0;
    }

    .info-item dd {
        font-size: 0.95em;
    }

    .cta-button {
        font-size: 1em;
        padding: 12px 35px;
    }
}
</style>

<?php
get_footer();
