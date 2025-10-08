<?php
/**
 * The front page template file
 *
 * TOPページ - 事業全体の概要と導線整理
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="front-page">
    <!-- Hero Section -->
    <section class="hero-section" <?php if ( get_header_image() ) : ?>style="background-image: url('<?php header_image(); ?>');"<?php endif; ?>>
        <?php if ( get_header_image() ) : ?>
            <div class="hero-overlay"></div>
        <?php endif; ?>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    アンケートの力で、<br>
                    <span class="accent">ビジネスを正しく動かす。</span>
                </h1>
                <p class="hero-subtitle">
                    設計から分析・レポーティングまで。<br>
                    オンラインリサーチに特化した専門家が、御社の仮説を検証し、確かな意思決定を支えます。
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="button button-primary">サービス詳細</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button button-secondary">お問い合わせ</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Message Section -->
    <section class="core-message">
        <div class="container">
            <h2 class="section-title">「アンケート外注」とは？</h2>
            <div class="message-content">
                <p class="lead-text">
                    名刺交換後、「どんな事業をしているの？」とよく聞かれます。<br>
                    私たちは<strong>「アンケートのプロフェッショナル」</strong>です。
                </p>
                <p>
                    調査設計・データ収集・分析・レポーティングまで、アンケートに関わる全ての工程を一貫してサポート。<br>
                    コンサルティングファーム出身の論理的な設計力と、オンラインリサーチ専門の豊富な経験で、<br>
                    貴社のビジネス課題解決を支援します。
                </p>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview">
        <div class="container">
            <h2 class="section-title">提供サービス</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🎯</div>
                    <h3>調査設計</h3>
                    <p>誰に・何を・いつ・どれくらい聞くのか。貴社の課題に合わせた最適な調査を設計します。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3>データ収集</h3>
                    <p>会場調査、オンライン調査、Googleフォームなど、様々な手法で大量データを収集。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>データ分析</h3>
                    <p>収集したデータを丁寧に分析し、ビジネスに活かせる洞察を抽出します。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📄</div>
                    <h3>レポーティング</h3>
                    <p>経営判断に直結する、わかりやすく実践的なレポートを作成します。</p>
                </div>
            </div>
            <div class="section-cta">
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="button">サービス詳細を見る →</a>
            </div>
        </div>
    </section>

    <!-- Use Cases -->
    <section class="use-cases">
        <div class="container">
            <h2 class="section-title">活用領域</h2>
            <div class="use-cases-grid">
                <div class="use-case-card">
                    <h4>宣伝・マーケティング</h4>
                    <ul>
                        <li>ターゲット顧客の深い理解</li>
                        <li>広告効果測定・A/Bテスト</li>
                        <li>ブランド認知度調査</li>
                    </ul>
                </div>
                <div class="use-case-card">
                    <h4>商品・サービス改善</h4>
                    <ul>
                        <li>ユーザーニーズ把握</li>
                        <li>機能・UX評価</li>
                        <li>満足度・NPS調査</li>
                    </ul>
                </div>
                <div class="use-case-card">
                    <h4>顧客満足度調査</h4>
                    <ul>
                        <li>CS向上のための課題発見</li>
                        <li>ロイヤルティ測定</li>
                        <li>継続率改善施策の検証</li>
                    </ul>
                </div>
                <div class="use-case-card">
                    <h4>市場調査</h4>
                    <ul>
                        <li>一般消費者向けアンケート</li>
                        <li>市場規模・トレンド把握</li>
                        <li>競合分析</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Strengths -->
    <section class="strengths">
        <div class="container">
            <h2 class="section-title">Ayumi Japanが選ばれる理由</h2>
            <div class="strengths-grid">
                <div class="strength-card">
                    <div class="strength-number">01</div>
                    <h3>専門性</h3>
                    <p>オンラインリサーチ専門の経歴と、コンサル出身の論理的設計力</p>
                </div>
                <div class="strength-card">
                    <div class="strength-number">02</div>
                    <h3>一気通貫</h3>
                    <p>設計からレポーティングまで、情報の断絶なく一貫サポート</p>
                </div>
                <div class="strength-card">
                    <div class="strength-number">03</div>
                    <h3>信頼性</h3>
                    <p>フリーランスが多い業界で、法人としての安定した体制とノウハウ</p>
                </div>
                <div class="strength-card">
                    <div class="strength-number">04</div>
                    <h3>柔軟性</h3>
                    <p>大手にはない小回りと、貴社ニーズに合わせた柔軟な対応力</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Blog Posts -->
    <section class="recent-posts">
        <div class="container">
            <h2 class="section-title">最新の調査事例・ノウハウ</h2>
            <div class="posts-grid">
                <?php
                $recent_posts = new WP_Query( array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ) );

                if ( $recent_posts->have_posts() ) :
                    while ( $recent_posts->have_posts() ) :
                        $recent_posts->the_post();
                        ?>
                        <article class="post-card">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'medium' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
                                </div>
                                <h3 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="post-excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more-link">続きを読む →</a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p>投稿がまだありません。</p>
                    <?php
                endif;
                ?>
            </div>
            <div class="section-cta">
                <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="button">ブログ一覧を見る →</a>
            </div>
        </div>
    </section>

    <!-- Whitepapers -->
    <section class="whitepapers">
        <div class="container">
            <h2 class="section-title">ホワイトペーパー・資料</h2>
            <p class="section-description">アンケート設計や活用方法について、実践的なノウハウをまとめた資料を無料でダウンロードいただけます。</p>
            <div class="section-cta">
                <a href="<?php echo esc_url( home_url( '/whitepapers/' ) ); ?>" class="button">資料一覧を見る →</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>アンケート調査のご相談はこちら</h2>
                <p>まずはお気軽にお問い合わせください。貴社の課題をお聞かせいただき、最適なソリューションをご提案します。</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button button-primary button-large">お問い合わせ</a>
                    <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="button button-outline button-large">会社概要</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Front Page Styles */
.front-page {
    background-color: var(--bg-white);
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--accent-color) 50%, var(--primary-color) 100%);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: var(--text-primary);
    padding: 140px 0 120px;
    text-align: center;
    position: relative;
    overflow: hidden;
    border-bottom: 3px solid var(--primary-color);
    min-height: 600px;
    display: flex;
    align-items: center;
}

/* Hero Overlay - 背景画像がある場合のオーバーレイ */
.hero-overlay {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
        135deg,
        rgba(249, 246, 241, 0.85) 0%,
        rgba(232, 197, 168, 0.75) 50%,
        rgba(212, 175, 135, 0.85) 100%
    );
    z-index: 1;
}

.hero-section::before {
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
    z-index: 2;
}

.hero-section::after {
    content: '✦ ❖ ✦ ❖ ✦';
    position: absolute;
    top: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: var(--primary-color);
    font-size: 1.5em;
    letter-spacing: 30px;
    opacity: 0.4;
    z-index: 3;
}

.hero-section .container {
    position: relative;
    z-index: 4;
}

.hero-content {
    position: relative;
    z-index: 5;
}

.hero-title {
    font-size: 3.2em;
    font-weight: 700;
    margin-bottom: 30px;
    line-height: 1.4;
    text-shadow:
        2px 2px 4px rgba(255,255,255,0.5),
        0 0 20px rgba(255,255,255,0.3);
}

.hero-title .accent {
    color: var(--secondary-color);
    position: relative;
    display: inline-block;
    background: linear-gradient(to bottom, transparent 60%, var(--primary-color) 60%);
    padding: 0 10px;
    text-shadow:
        2px 2px 4px rgba(255,255,255,0.7),
        0 0 30px rgba(255,255,255,0.5);
}

.hero-subtitle {
    font-size: 1.4em;
    margin-bottom: 45px;
    line-height: 1.9;
    color: var(--text-primary);
    font-weight: 500;
    text-shadow:
        1px 1px 3px rgba(255,255,255,0.5),
        0 0 15px rgba(255,255,255,0.3);
}

.hero-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.button-primary {
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-cream) 100%);
    color: var(--secondary-color);
    padding: 16px 45px;
    font-size: 1.15em;
    font-weight: 700;
    border: 3px solid var(--secondary-color);
    box-shadow: 0 6px 20px var(--shadow-medium);
}

.button-primary:hover {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    border-color: var(--primary-color);
    color: var(--text-primary);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px var(--shadow-medium);
}

.button-secondary {
    background-color: transparent;
    color: var(--text-primary);
    padding: 16px 45px;
    font-size: 1.15em;
    font-weight: 700;
    border: 3px solid var(--secondary-color);
    backdrop-filter: blur(10px);
}

.button-secondary:hover {
    background-color: var(--bg-white);
    color: var(--secondary-color);
    box-shadow: 0 6px 20px var(--shadow-medium);
}

/* Sections */
section {
    padding: 80px 0;
}

.section-title {
    text-align: center;
    font-size: 2.8em;
    color: var(--secondary-color);
    margin-bottom: 60px;
    font-weight: 700;
    position: relative;
    padding-bottom: 30px;
}

.section-title::before {
    content: '✦';
    display: block;
    color: var(--primary-color);
    font-size: 0.5em;
    margin-bottom: 15px;
    opacity: 0.6;
}

.section-title::after {
    content: '';
    display: block;
    width: 120px;
    height: 3px;
    background: linear-gradient(to right, transparent, var(--primary-color), var(--accent-color), var(--primary-color), transparent);
    margin: 25px auto 0;
    border-radius: 2px;
    box-shadow: 0 2px 8px var(--shadow-soft);
}

.section-description {
    text-align: center;
    font-size: 1.1em;
    color: var(--text-secondary);
    margin-bottom: 40px;
}

.section-cta {
    text-align: center;
    margin-top: 50px;
}

/* Core Message */
.core-message {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
}

.message-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.lead-text {
    font-size: 1.3em;
    line-height: 2;
    margin-bottom: 30px;
    color: var(--text-primary);
}

.message-content p {
    font-size: 1.05em;
    line-height: 2;
    color: var(--text-secondary);
}

/* Services Overview */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.service-card {
    background: linear-gradient(to bottom, var(--bg-white) 0%, var(--bg-cream) 100%);
    padding: 45px 35px;
    border-radius: 20px;
    border: 2px solid var(--border-color);
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px var(--shadow-soft);
    position: relative;
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, var(--accent-color) 0%, transparent 70%);
    opacity: 0;
    transition: all 0.5s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px var(--shadow-medium);
    border-color: var(--primary-color);
}

.service-card:hover::before {
    opacity: 0.1;
    top: 0;
    right: 0;
}

.service-icon {
    font-size: 3.5em;
    margin-bottom: 20px;
}

.service-card h3 {
    font-size: 1.5em;
    color: var(--secondary-color);
    margin-bottom: 15px;
    font-weight: 600;
}

.service-card p {
    color: var(--text-secondary);
    line-height: 1.8;
}

/* Use Cases */
.use-cases {
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-light) 100%);
}

.use-cases-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}

.use-case-card {
    background-color: var(--bg-white);
    padding: 30px;
    border-radius: 12px;
    border-left: 5px solid var(--accent-color);
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.use-case-card:hover {
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    transform: translateX(5px);
}

.use-case-card h4 {
    color: var(--secondary-color);
    font-size: 1.3em;
    margin-bottom: 15px;
    font-weight: 600;
}

.use-case-card ul {
    list-style: none;
    padding: 0;
}

.use-case-card li {
    padding: 8px 0;
    color: var(--text-secondary);
    position: relative;
    padding-left: 25px;
}

.use-case-card li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--success-color);
    font-weight: bold;
}

/* Strengths */
.strengths-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 30px;
}

.strength-card {
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-light) 100%);
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
}

.strength-card:hover {
    border-color: var(--primary-color);
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.strength-number {
    font-size: 2.5em;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.strength-card h3 {
    font-size: 1.4em;
    color: var(--secondary-color);
    margin-bottom: 15px;
    font-weight: 600;
}

.strength-card p {
    color: var(--text-secondary);
    line-height: 1.8;
}

/* Recent Posts */
.recent-posts {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
}

.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.post-card {
    background-color: var(--bg-white);
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
}

.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.post-thumbnail img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.post-content {
    padding: 25px;
}

.post-meta {
    font-size: 0.9em;
    color: var(--text-secondary);
    margin-bottom: 10px;
}

.post-card .post-title {
    font-size: 1.3em;
    color: var(--secondary-color);
    margin-bottom: 15px;
    font-weight: 600;
}

.post-card .post-title a {
    color: var(--secondary-color);
}

.post-card .post-title a:hover {
    color: var(--primary-color);
}

.post-excerpt {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 15px;
}

.read-more-link {
    color: var(--accent-color);
    font-weight: 500;
}

.read-more-link:hover {
    color: var(--secondary-color);
}

/* Whitepapers */
.whitepapers {
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--accent-color) 50%, var(--primary-color) 100%);
    color: var(--text-primary);
    position: relative;
    overflow: hidden;
}

.whitepapers::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
        radial-gradient(circle at 20% 30%, var(--bg-white) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, var(--bg-white) 0%, transparent 50%);
    opacity: 0.3;
}

.whitepapers .container {
    position: relative;
    z-index: 1;
}

.whitepapers .section-title {
    color: var(--text-primary);
}

.whitepapers .section-title::before {
    color: var(--secondary-color);
}

.whitepapers .section-title::after {
    background: linear-gradient(to right, transparent, var(--secondary-color), var(--text-primary), var(--secondary-color), transparent);
}

.whitepapers .section-description {
    color: var(--text-primary);
    font-weight: 500;
}

.whitepapers .button {
    background: linear-gradient(135deg, var(--bg-white) 0%, var(--bg-cream) 100%);
    color: var(--secondary-color);
    border-color: var(--secondary-color);
    border-width: 3px;
}

.whitepapers .button:hover {
    background: var(--bg-white);
    color: var(--secondary-color);
    border-color: var(--text-primary);
    transform: translateY(-3px);
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
}

.cta-box {
    text-align: center;
    padding: 70px 50px;
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--accent-color) 100%);
    border-radius: 30px;
    color: var(--text-primary);
    box-shadow: 0 15px 40px var(--shadow-medium);
    border: 3px solid var(--primary-color);
    position: relative;
    overflow: hidden;
}

.cta-box::before {
    content: '✦';
    position: absolute;
    top: 25px;
    left: 50%;
    transform: translateX(-50%);
    color: var(--primary-color);
    font-size: 2em;
    opacity: 0.4;
}

.cta-box::after {
    content: '';
    position: absolute;
    bottom: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, var(--bg-white) 0%, transparent 70%);
    opacity: 0.3;
}

.cta-box h2 {
    font-size: 2.5em;
    margin-bottom: 25px;
    color: var(--secondary-color);
    position: relative;
    z-index: 1;
}

.cta-box p {
    font-size: 1.2em;
    margin-bottom: 45px;
    color: var(--text-primary);
    font-weight: 500;
    position: relative;
    z-index: 1;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.button-large {
    padding: 18px 50px;
    font-size: 1.2em;
}

.button-outline {
    background-color: transparent;
    color: var(--bg-white);
    border: 2px solid var(--bg-white);
}

.button-outline:hover {
    background-color: var(--bg-white);
    color: var(--secondary-color);
}

/* Responsive */
@media (max-width: 768px) {
    .hero-section {
        padding: 80px 0 60px;
    }

    .hero-title {
        font-size: 2em;
    }

    .hero-subtitle {
        font-size: 1.1em;
    }

    .section-title {
        font-size: 1.8em;
    }

    .services-grid,
    .use-cases-grid,
    .strengths-grid,
    .posts-grid {
        grid-template-columns: 1fr;
    }

    .hero-buttons,
    .cta-buttons {
        flex-direction: column;
        align-items: stretch;
    }

    section {
        padding: 50px 0;
    }
}
</style>

<?php
get_footer();
