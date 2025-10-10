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

                    <!-- アンケートの流れ -->
                    <section class="service-flow">
                        <h2>🔍 アンケートの流れ</h2>
                        <div class="flow-container">
                            <!-- STEP 1 -->
                            <div class="flow-step">
                                <div class="step-header">
                                    <div class="step-number">STEP 1</div>
                                    <h3 class="step-title">ヒアリング＆調査設計</h3>
                                </div>
                                <div class="step-content">
                                    <p class="step-lead">"聞く前に、何を明らかにしたいか"を整理します。</p>
                                    <p class="step-description">
                                        ayumiはまず、お客様の課題や目的を丁寧にヒアリング。<br>
                                        「どんな情報を得たいのか」「結果をどう活かしたいのか」を一緒に言語化し、調査のゴールを設定します。
                                    </p>
                                    <p class="step-description">
                                        対象者やサンプル数などの条件も明確にし、信頼できるデータを得るための調査設計を行います。
                                    </p>
                                    <div class="step-point">
                                        <span class="point-icon">🎯</span>
                                        <span class="point-text">ポイント：目的に合った設計が、良いデータを生む最初の一歩です。</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Arrow -->
                            <div class="flow-arrow">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 5L20 35M20 35L10 25M20 35L30 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                            <!-- STEP 2 -->
                            <div class="flow-step">
                                <div class="step-header">
                                    <div class="step-number">STEP 2</div>
                                    <h3 class="step-title">調査票（アンケート）作成</h3>
                                </div>
                                <div class="step-content">
                                    <p class="step-lead">"答えやすい設計"が、良い結果をつくります。</p>
                                    <p class="step-description">
                                        目的に沿った設問設計を行い、回答者の心理に寄り添った構成に。<br>
                                        大きな質問から小さな質問へ、流れるように回答できるストーリーを作ります。
                                    </p>
                                    <p class="step-description">
                                        専門のリサーチャーが、わかりやすく答えやすい質問を設計。回答率の高いアンケートを実現します。
                                    </p>
                                    <div class="step-point">
                                        <span class="point-icon">✍️</span>
                                        <span class="point-text">ポイント：仮説に基づいた設問構成で、知りたいことを的確に引き出します。</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Arrow -->
                            <div class="flow-arrow">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 5L20 35M20 35L10 25M20 35L30 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                            <!-- STEP 3 -->
                            <div class="flow-step">
                                <div class="step-header">
                                    <div class="step-number">STEP 3</div>
                                    <h3 class="step-title">集計＆報告書作成・報告会</h3>
                                </div>
                                <div class="step-content">
                                    <p class="step-lead">"データを、次のアクションにつなげる"。</p>
                                    <p class="step-description">
                                        回収したデータは、ExcelやGoogleスプレッドシートなどご希望の形式で丁寧に集計・分析。
                                    </p>
                                    <p class="step-description">
                                        結果を分かりやすくまとめた報告書を作成し、オンラインまたは対面での報告会でご説明します。<br>
                                        数字の背景までしっかり読み解き、次に活かすヒントをご提案します。
                                    </p>
                                    <div class="step-point">
                                        <span class="point-icon">📊</span>
                                        <span class="point-text">ポイント：アンケートで終わらせず、意思決定に活かせる情報に変える。</span>
                                    </div>
                                </div>
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
.service-flow,
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
.service-flow h2,
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
.service-tools h2::after,
.service-flow h2::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    margin: 15px auto 0;
    border-radius: 2px;
}

/* ========================================
   Flow Section Styles
   ======================================== */

.service-flow {
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--bg-white) 100%);
}

.flow-container {
    max-width: 900px;
    margin: 0 auto;
}

.flow-step {
    background: linear-gradient(to bottom right, var(--bg-white) 0%, var(--bg-light) 100%);
    border-radius: 20px;
    padding: 40px;
    border: 3px solid var(--border-color);
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    position: relative;
    overflow: hidden;
}

.flow-step::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, var(--accent-color) 0%, transparent 70%);
    opacity: 0;
    transition: all 0.6s ease;
}

.flow-step:hover {
    border-color: var(--primary-color);
    transform: translateX(10px);
    box-shadow: -10px 10px 30px rgba(212, 175, 135, 0.2);
}

.flow-step:hover::before {
    opacity: 0.1;
    top: 0;
    right: 0;
}

.step-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 25px;
    position: relative;
    z-index: 1;
}

.step-number {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    color: var(--text-primary);
    font-weight: 700;
    font-size: 0.9em;
    padding: 8px 20px;
    border-radius: 20px;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(212, 175, 135, 0.3);
    flex-shrink: 0;
}

.step-title {
    font-size: 1.6em;
    color: var(--secondary-color);
    font-weight: 700;
    margin: 0;
    flex-grow: 1;
}

.step-content {
    position: relative;
    z-index: 1;
}

.step-lead {
    font-size: 1.3em;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 20px;
    line-height: 1.6;
    font-style: italic;
}

.step-description {
    color: var(--text-secondary);
    line-height: 1.9;
    margin-bottom: 15px;
    font-size: 1.05em;
}

.step-point {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-top: 25px;
    padding: 20px 25px;
    background: linear-gradient(135deg, rgba(212, 175, 135, 0.1) 0%, rgba(232, 197, 168, 0.1) 100%);
    border-left: 4px solid var(--accent-color);
    border-radius: 10px;
}

.point-icon {
    font-size: 1.5em;
    flex-shrink: 0;
    line-height: 1;
}

.point-text {
    color: var(--text-primary);
    font-weight: 600;
    line-height: 1.7;
    font-size: 1.05em;
}

.flow-arrow {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 30px 0;
    color: var(--primary-color);
    opacity: 0.6;
}

.flow-arrow svg {
    animation: bounce-arrow 2s ease-in-out infinite;
}

@keyframes bounce-arrow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(10px);
    }
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
    .service-flow,
    .service-strengths,
    .service-cta {
        padding: 40px 20px;
    }

    .flow-step {
        padding: 30px 20px;
    }

    .step-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .step-title {
        font-size: 1.3em;
    }

    .step-lead {
        font-size: 1.1em;
    }

    .step-description {
        font-size: 1em;
    }

    .flow-step:hover {
        transform: translateY(-5px);
    }
}
</style>

<?php
get_footer();
