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
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="hero-image">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- サービス概要セクション -->
                    <section class="service-overview">
                        <h2>サービス概要</h2>
                        <div class="service-grid">
                            <div class="service-item">
                                <div class="service-icon">📊</div>
                                <h3>調査設計</h3>
                                <p>誰に・何を・いつ・どれくらい聞くのかを綿密に設計します。貴社の課題に合わせた最適な調査手法をご提案します。</p>
                            </div>
                            <div class="service-item">
                                <div class="service-icon">📝</div>
                                <h3>アンケート実施</h3>
                                <p>会場調査、オンライン調査、Googleフォームを活用した大量データ収集まで、様々な手法に対応します。</p>
                            </div>
                            <div class="service-item">
                                <div class="service-icon">📈</div>
                                <h3>データ分析</h3>
                                <p>収集したデータを丁寧に分析し、ビジネスに活かせる洞察を抽出します。</p>
                            </div>
                            <div class="service-item">
                                <div class="service-icon">📄</div>
                                <h3>レポーティング</h3>
                                <p>わかりやすく、実践的なレポートを作成。経営判断に直結する情報をお届けします。</p>
                            </div>
                        </div>
                    </section>

                    <!-- 活用領域 -->
                    <section class="service-use-cases">
                        <h2>活用領域</h2>
                        <div class="use-case-grid">
                            <div class="use-case-item">
                                <h4>宣伝・マーケティング</h4>
                                <p>ターゲット顧客の理解、広告効果測定、ブランド認知度調査</p>
                            </div>
                            <div class="use-case-item">
                                <h4>商品・サービス改善</h4>
                                <p>ユーザーニーズ把握、機能評価、満足度調査</p>
                            </div>
                            <div class="use-case-item">
                                <h4>顧客満足度調査</h4>
                                <p>CS向上のための課題発見、ロイヤルティ測定</p>
                            </div>
                            <div class="use-case-item">
                                <h4>A/Bテスト・検証</h4>
                                <p>広告クリエイティブ比較、価格設定テスト</p>
                            </div>
                        </div>
                    </section>

                    <!-- 強み -->
                    <section class="service-strengths">
                        <h2>Ayumi Japanの強み</h2>
                        <div class="strengths-list">
                            <div class="strength-item">
                                <div class="strength-number">01</div>
                                <div class="strength-content">
                                    <h3>オンラインリサーチのプロフェッショナル</h3>
                                    <p>専門的な経歴とノウハウで、精度の高い調査を実現します。</p>
                                </div>
                            </div>
                            <div class="strength-item">
                                <div class="strength-number">02</div>
                                <div class="strength-content">
                                    <h3>設計からレポーティングまで一気通貫</h3>
                                    <p>調査の全工程を一貫してサポート。情報の断絶がありません。</p>
                                </div>
                            </div>
                            <div class="strength-item">
                                <div class="strength-number">03</div>
                                <div class="strength-content">
                                    <h3>法人としての信頼性と体制力</h3>
                                    <p>フリーランスが多い業界で、安定した体制でサービスを提供します。</p>
                                </div>
                            </div>
                            <div class="strength-item">
                                <div class="strength-number">04</div>
                                <div class="strength-content">
                                    <h3>小回りと柔軟な対応</h3>
                                    <p>大手にはない機動力で、貴社のニーズに迅速に対応します。</p>
                                </div>
                            </div>
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
    padding: 60px 0 40px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-radius: 12px;
    margin-bottom: 50px;
}

.page-title {
    font-size: 2.5em;
    color: var(--secondary-color);
    font-weight: 700;
}

.service-overview,
.service-use-cases,
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
.service-strengths h2::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    margin: 15px auto 0;
    border-radius: 2px;
}

.service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.service-item {
    text-align: center;
    padding: 30px 20px;
    background-color: var(--bg-white);
    border-radius: 12px;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    border-color: var(--primary-color);
}

.service-icon {
    font-size: 3em;
    margin-bottom: 15px;
}

.service-item h3 {
    font-size: 1.3em;
    color: var(--secondary-color);
    margin-bottom: 15px;
}

.use-case-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 25px;
}

.use-case-item {
    padding: 25px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-left: 4px solid var(--accent-color);
    border-radius: 8px;
}

.use-case-item h4 {
    color: var(--secondary-color);
    font-size: 1.2em;
    margin-bottom: 10px;
}

.strengths-list {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.strength-item {
    display: flex;
    gap: 30px;
    align-items: flex-start;
    padding: 30px;
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-light) 100%);
    border-radius: 12px;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
}

.strength-item:hover {
    border-color: var(--primary-color);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.strength-number {
    font-size: 2.5em;
    font-weight: 700;
    color: var(--primary-color);
    min-width: 80px;
    text-align: center;
}

.strength-content h3 {
    font-size: 1.4em;
    color: var(--secondary-color);
    margin-bottom: 10px;
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
    .service-grid,
    .use-case-grid {
        grid-template-columns: 1fr;
    }

    .strength-item {
        flex-direction: column;
        text-align: center;
    }

    .page-title {
        font-size: 1.8em;
    }
}
</style>

<?php
get_footer();
