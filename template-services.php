<?php
/**
 * Template Name: サービスページ
 * Template Post Type: page
 *
 * サービス内容を紹介するページテンプレート
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="container">
    <div class="services-page">
        <main id="primary" class="content-area full-width">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="page-header">
                        <h1 class="page-title">「聞く」を、設計する。</h1>
                        <p class="page-subtitle">アンケートには、目的があります。<br>
                        ayumiは、単なる集計やフォーム作成ではなく、"なぜ聞くのか""誰に聞くのか"を科学的に設計します。</p>
                    </header>

                    <!-- 調査設計セクション -->
                    <section class="service-overview">
                        <h2>調査設計</h2>
                        <div class="service-design-list">
                            <div class="design-item">
                                <h3>誰に・何を・いつ・どれくらい聞くのか</h3>
                            </div>
                            <div class="design-item">
                                <h3>仮説をもとに調査構造を設計</h3>
                            </div>
                            <div class="design-item">
                                <h3>データの裏づけから次の一手を導く</h3>
                            </div>
                        </div>
                    </section>

                    <!-- 活用領域 -->
                    <section class="service-use-cases">
                        <h2>活用領域</h2>
                        <div class="use-case-grid">
                            <div class="use-case-item">
                                <h4>商品・サービス改善</h4>
                            </div>
                            <div class="use-case-item">
                                <h4>顧客満足度・不満点の抽出</h4>
                            </div>
                            <div class="use-case-item">
                                <h4>広告施策のA/Bテスト検証</h4>
                            </div>
                            <div class="use-case-item">
                                <h4>UI/UXリサーチ・市場調査</h4>
                            </div>
                        </div>
                    </section>

                    <!-- ツール・手法 -->
                    <section class="service-tools">
                        <h2>ツール・手法</h2>
                        <div class="tools-list">
                            <div class="tool-item">
                                <h3>会場調査・オンライン調査</h3>
                            </div>
                            <div class="tool-item">
                                <h3>Googleフォームのプロ設計・分析運用</h3>
                            </div>
                            <div class="tool-item">
                                <h3>スピードと精度を両立するリサーチオペレーション</h3>
                            </div>
                        </div>
                    </section>

                    <!-- セクションコピー -->
                    <section class="service-strengths">
                        <div class="strengths-copy">
                            <p class="copy-main">スピード × ロジック × 信頼性。</p>
                            <p class="copy-sub">オンラインリサーチのプロフェッショナルとして、<br>
                            「小回りが利く体制」と「法人ならではの安心感」で成果を形にします。</p>
                        </div>
                    </section>

                    <!-- CTA -->
                    <section class="service-cta">
                        <div class="cta-box">
                            <h2>アンケート調査のご相談はこちら</h2>
                            <p>まずはお気軽にお問い合わせください。貴社の課題をお聞かせいただき、最適なソリューションをご提案します。</p>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button cta-button">お問い合わせ</a>
                        </div>
                    </section>
                </article>

            <?php endwhile; ?>

        </main>
    </div>
</div>

<style>
.services-page .full-width {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.hero-image {
    margin: 40px 0;
    border-radius: 12px;
    overflow: hidden;
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
    margin-bottom: 30px;
    line-height: 1.4;
}

.page-subtitle {
    font-size: 1.15em;
    color: var(--text-color);
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto;
}

.service-overview,
.service-use-cases,
.service-tools,
.service-strengths,
.service-cta {
    margin: 60px 0;
    padding: 50px 40px;
    background-color: var(--bg-white);
    border-radius: 12px;
}

.service-overview {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
}

.service-overview h2,
.service-use-cases h2,
.service-tools h2,
.service-strengths h2 {
    text-align: center;
    font-size: 2em;
    color: var(--secondary-color);
    margin-bottom: 40px;
    position: relative;
    padding-bottom: 20px;
}

.service-overview h2::after,
.service-use-cases h2::after,
.service-tools h2::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    margin: 15px auto 0;
    border-radius: 2px;
}

.service-design-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.design-item {
    padding: 30px 40px;
    background-color: var(--bg-white);
    border-radius: 12px;
    border-left: 5px solid var(--primary-color);
    transition: all 0.3s ease;
}

.design-item:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.design-item h3 {
    font-size: 1.3em;
    color: var(--secondary-color);
    font-weight: 600;
    margin: 0;
}

.use-case-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 25px;
}

.use-case-item {
    padding: 30px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-left: 4px solid var(--accent-color);
    border-radius: 8px;
    transition: all 0.3s ease;
}

.use-case-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
}

.use-case-item h4 {
    color: var(--secondary-color);
    font-size: 1.2em;
    margin: 0;
    font-weight: 600;
}

.tools-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.tool-item {
    padding: 30px 40px;
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-light) 100%);
    border-radius: 12px;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
}

.tool-item:hover {
    border-color: var(--accent-color);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.tool-item h3 {
    font-size: 1.3em;
    color: var(--secondary-color);
    font-weight: 600;
    margin: 0;
}

.service-strengths {
    background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
    text-align: center;
}

.strengths-copy {
    max-width: 900px;
    margin: 0 auto;
}

.copy-main {
    font-size: 2.2em;
    font-weight: 700;
    color: var(--bg-white);
    margin-bottom: 30px;
    line-height: 1.5;
}

.copy-sub {
    font-size: 1.2em;
    color: var(--bg-light);
    line-height: 1.9;
}

.service-cta {
    background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
    color: var(--bg-white);
    text-align: center;
}

.cta-box h2 {
    color: var(--bg-white);
    margin-bottom: 20px;
}

.cta-box h2::after {
    background: var(--bg-white);
}

.cta-box p {
    font-size: 1.1em;
    margin-bottom: 30px;
    color: var(--bg-light);
}

.cta-button {
    background-color: var(--bg-white);
    color: var(--secondary-color);
    border-color: var(--bg-white);
    font-size: 1.2em;
    padding: 15px 50px;
}

.cta-button:hover {
    background-color: var(--accent-color);
    color: var(--bg-white);
    border-color: var(--accent-color);
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .use-case-grid {
        grid-template-columns: 1fr;
    }

    .page-header {
        padding: 60px 20px 40px;
    }

    .page-title {
        font-size: 2em;
    }

    .page-subtitle {
        font-size: 1em;
    }

    .copy-main {
        font-size: 1.6em;
    }

    .copy-sub {
        font-size: 1em;
    }

    .service-overview,
    .service-use-cases,
    .service-tools,
    .service-strengths,
    .service-cta {
        padding: 40px 20px;
    }
}
</style>

<?php
get_footer();
