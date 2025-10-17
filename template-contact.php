<?php
/**
 * Template Name: お問い合わせページ
 * Template Post Type: page
 *
 * お問い合わせフォームページテンプレート
 *
 * @package Ayumi_Japan
 */

get_header();
?>

<div class="container">
    <div class="contact-page">
        <main id="primary" class="content-area full-width">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="page-header">
                        <h1 class="page-title">お問い合わせ</h1>
                        <p class="page-subtitle">
                            アンケート調査に関するご相談、お見積もりなど、お気軽にお問い合わせください。<br>
                            内容を確認次第、担当者より折り返しご連絡いたします。
                        </p>
                    </header>

                    <!-- お問い合わせフォーム -->
                    <section class="contact-form-section">
                        <div class="form-container">
                            <?php
                            // Contact Form 7のショートコードを表示
                            // 実際のフォームIDは管理画面で作成後に設定
                            if ( function_exists( 'wpcf7_contact_form' ) ) {
                                // フォームが存在する場合
                                echo do_shortcode( '[contact-form-7 id="contact" title="お問い合わせフォーム"]' );
                            } else {
                                // フォールバック: Contact Form 7が未インストールの場合
                                ?>
                                <div class="notice-box">
                                    <p><strong>Contact Form 7をインストールしてください</strong></p>
                                    <p>このページを機能させるには、Contact Form 7プラグインをインストールし、フォームを作成してください。</p>
                                </div>
                                <?php
                            }
                            ?>

                            <!-- 注意事項 -->
                            <div class="contact-notice">
                                <p>※当社の営業時間は平日9:00〜18:00となります。<br>
                                営業時間外、土日祝日、年末年始などにつきましては、翌営業日以降の対応となりますのでご了承ください。</p>

                                <p>※メールアドレス、電話番号の記入に誤りがありますと、当社よりご連絡ができない場合がございますので、ご注意ください。受付完了メールが届かない場合は恐れ入りますが再度お問い合わせください。</p>

                                <p>※このお問合せフォームはお客様専用です。営業及び勧誘目的でのご利用は固くお断りします。<br>
                                営業メールには返信いたしかねますのであらかじめご了承ください。</p>
                            </div>
                        </div>
                    </section>

                    <!-- よくあるご質問 -->
                    <section class="faq-section">
                        <h2>よくあるご質問</h2>
                        <div class="faq-list">
                            <div class="faq-item">
                                <h3 class="faq-question">
                                    <i class="fas fa-question-circle"></i>
                                    調査にかかる費用はどのくらいですか？
                                </h3>
                                <div class="faq-answer">
                                    <p>調査内容、サンプル数、調査手法によって異なります。まずはお気軽にご相談ください。お客様のご予算に合わせた最適なプランをご提案いたします。</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-question">
                                    <i class="fas fa-question-circle"></i>
                                    調査にはどのくらいの期間が必要ですか？
                                </h3>
                                <div class="faq-answer">
                                    <p>調査規模によりますが、設計から報告まで最短で2週間程度から対応可能です。お急ぎの場合もご相談ください。</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-question">
                                    <i class="fas fa-question-circle"></i>
                                    少人数のアンケートでも対応できますか？
                                </h3>
                                <div class="faq-answer">
                                    <p>はい、対応可能です。小規模な調査から大規模な調査まで、幅広く対応しております。</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>

            <?php endwhile; ?>

        </main>
    </div>
</div>

<style>
.contact-page .full-width {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.page-header {
    text-align: center;
    padding: 80px 40px 60px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-radius: 20px;
    margin-bottom: 60px;
}

.page-title {
    font-size: 2.8em;
    color: var(--secondary-color);
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 20px;
}

.page-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    margin: 20px auto 0;
    border-radius: 2px;
}

.page-subtitle {
    font-size: 1.15em;
    color: var(--text-secondary);
    line-height: 1.9;
    max-width: 800px;
    margin: 0 auto;
}

/* Contact Form Section */
.contact-form-section {
    margin-bottom: 80px;
}

.form-container {
    max-width: 800px;
    margin: 0 auto;
    background: linear-gradient(to bottom, var(--bg-white) 0%, var(--bg-light) 100%);
    padding: 60px 50px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border: 2px solid var(--border-color);
}

/* Contact Form 7 Styles */
.wpcf7 {
    margin: 0;
}

.wpcf7-form p {
    margin-bottom: 25px;
}

.wpcf7-form label {
    display: block;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 8px;
    font-size: 1.05em;
}

.wpcf7-form input[type="text"],
.wpcf7-form input[type="email"],
.wpcf7-form input[type="tel"],
.wpcf7-form textarea {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid var(--border-color);
    border-radius: 10px;
    font-size: 1em;
    transition: all 0.3s ease;
    background-color: var(--bg-white);
    font-family: 'Noto Sans JP', sans-serif;
}

.wpcf7-form input:focus,
.wpcf7-form textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(212, 175, 135, 0.15);
}

.wpcf7-form textarea {
    min-height: 180px;
    resize: vertical;
}

.wpcf7-form .wpcf7-submit {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    color: var(--text-primary);
    border: none;
    padding: 16px 50px;
    font-size: 1.2em;
    font-weight: 700;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 20px rgba(212, 175, 135, 0.3);
    display: block;
    margin: 30px auto 0;
}

.wpcf7-form .wpcf7-submit:hover {
    background: linear-gradient(135deg, var(--accent-color) 0%, var(--primary-color) 100%);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(212, 175, 135, 0.4);
}

.wpcf7-form .wpcf7-not-valid-tip {
    color: #d9534f;
    font-size: 0.9em;
    margin-top: 5px;
}

.wpcf7-response-output {
    margin: 25px 0 0;
    padding: 15px 20px;
    border-radius: 10px;
    text-align: center;
}

.wpcf7-validation-errors {
    border: 2px solid #d9534f;
    background-color: #f8d7da;
    color: #721c24;
}

.wpcf7-mail-sent-ok {
    border: 2px solid var(--success-color);
    background-color: #d4edda;
    color: #155724;
}

.notice-box {
    padding: 30px;
    background-color: #fff3cd;
    border: 2px solid #ffc107;
    border-radius: 12px;
    text-align: center;
}

.notice-box strong {
    color: #856404;
    font-size: 1.2em;
}

.notice-box p {
    color: #856404;
    margin: 10px 0 0;
}

/* Contact Notice */
.contact-notice {
    margin-top: 40px;
    padding: 30px;
    background: linear-gradient(135deg, rgba(212, 175, 135, 0.05) 0%, rgba(232, 197, 168, 0.05) 100%);
    border-left: 4px solid var(--primary-color);
    border-radius: 8px;
}

.contact-notice p {
    color: var(--text-secondary);
    font-size: 0.95em;
    line-height: 1.8;
    margin-bottom: 15px;
}

.contact-notice p:last-child {
    margin-bottom: 0;
}

/* FAQ Section */
.faq-section {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    padding: 60px 40px;
    border-radius: 20px;
}

.faq-section h2 {
    text-align: center;
    font-size: 2em;
    color: var(--secondary-color);
    margin-bottom: 50px;
    font-weight: 700;
    position: relative;
    padding-bottom: 20px;
}

.faq-section h2::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    margin: 15px auto 0;
    border-radius: 2px;
}

.faq-list {
    max-width: 900px;
    margin: 0 auto;
}

.faq-item {
    background-color: var(--bg-white);
    margin-bottom: 20px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
}

.faq-question {
    padding: 25px 30px;
    margin: 0;
    font-size: 1.2em;
    color: var(--secondary-color);
    font-weight: 600;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    background: linear-gradient(to right, rgba(212, 175, 135, 0.05) 0%, transparent 100%);
}

.faq-question i {
    color: var(--primary-color);
    font-size: 1.1em;
    margin-top: 3px;
    flex-shrink: 0;
}

.faq-answer {
    padding: 0 30px 25px 60px;
}

.faq-answer p {
    color: var(--text-secondary);
    line-height: 1.9;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .page-header {
        padding: 60px 20px 40px;
    }

    .page-title {
        font-size: 2em;
    }

    .page-subtitle {
        font-size: 1em;
    }

    .form-container {
        padding: 40px 25px;
    }

    .contact-notice {
        padding: 20px;
        margin-top: 30px;
    }

    .contact-notice p {
        font-size: 0.9em;
    }

    .faq-section {
        padding: 40px 20px;
    }

    .faq-question {
        padding: 20px;
        font-size: 1.1em;
    }

    .faq-answer {
        padding: 0 20px 20px 50px;
    }

    .wpcf7-form .wpcf7-submit {
        width: 100%;
        padding: 14px 30px;
    }
}
</style>

<?php
get_footer();
