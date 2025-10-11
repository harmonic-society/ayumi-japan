<?php
/**
 * Template Name: ダウンロードページ
 * Template Post Type: page
 *
 * 資料ダウンロード用のフォームページ
 *
 * @package Ayumi_Japan
 */

get_header();

// URLパラメータから資料IDとファイルURLを取得
$whitepaper_id = isset($_GET['doc']) ? intval($_GET['doc']) : 0;
$file_url = '';
$doc_title = '';

if ($whitepaper_id) {
    $post = get_post($whitepaper_id);
    if ($post && $post->post_type === 'whitepaper') {
        $doc_title = get_the_title($whitepaper_id);
        $file_url = get_post_meta($whitepaper_id, '_whitepaper_download_url', true);
    }
}
?>

<div class="container">
    <div class="download-page">
        <main id="primary" class="content-area">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="page-header">
                        <h1 class="page-title">資料ダウンロード</h1>
                        <?php if ($doc_title) : ?>
                            <p class="download-doc-title">「<?php echo esc_html($doc_title); ?>」をダウンロード</p>
                        <?php endif; ?>
                    </header>

                    <section class="download-form-section">
                        <div class="form-instruction">
                            <p>以下のフォームにご入力いただくと、資料をダウンロードできます。<br>
                            ご入力いただいた情報は、今後のサービス向上のために使用させていただきます。</p>
                        </div>

                        <div class="download-form-container">
                            <?php
                            // Contact Form 7のショートコードを表示
                            // [contact-form-7 id="xxx"] の形式で使用
                            // 実際のフォームIDは管理画面で作成後に設定
                            if (function_exists('wpcf7_contact_form')) {
                                // フォームが存在する場合
                                echo do_shortcode('[contact-form-7 id="download-form" title="資料ダウンロードフォーム"]');
                            } else {
                                // フォールバック: シンプルなフォーム
                                ?>
                                <form class="download-form" id="simple-download-form">
                                    <input type="hidden" name="document_id" value="<?php echo esc_attr($whitepaper_id); ?>">
                                    <input type="hidden" name="download_url" value="<?php echo esc_attr($file_url); ?>">

                                    <div class="form-group">
                                        <label for="company">会社名 <span class="required">*</span></label>
                                        <input type="text" id="company" name="company" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">お名前 <span class="required">*</span></label>
                                        <input type="text" id="name" name="name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">メールアドレス <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">電話番号</label>
                                        <input type="tel" id="phone" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">ご質問・ご要望</label>
                                        <textarea id="message" name="message" rows="4"></textarea>
                                    </div>

                                    <div class="form-group checkbox-group">
                                        <label>
                                            <input type="checkbox" name="privacy" required>
                                            <span><a href="<?php echo esc_url(home_url('/privacy/')); ?>" target="_blank">プライバシーポリシー</a>に同意する <span class="required">*</span></span>
                                        </label>
                                    </div>

                                    <div class="form-submit">
                                        <button type="submit" class="submit-button">
                                            <i class="fas fa-download"></i> ダウンロード
                                        </button>
                                    </div>
                                </form>

                                <div id="download-message" class="download-message" style="display: none;">
                                    <div class="success-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <h3>ありがとうございます！</h3>
                                    <p>資料のダウンロードを開始します...</p>
                                    <a href="<?php echo esc_url($file_url); ?>" class="download-link" download>
                                        <i class="fas fa-file-download"></i> ダウンロードが開始しない場合はこちらをクリック
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </section>

                    <section class="download-info">
                        <h2>ご利用にあたって</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i> ダウンロードした資料は、社内での利用に限らせていただきます。</li>
                            <li><i class="fas fa-check"></i> ご入力いただいた情報は厳重に管理し、第三者への提供は行いません。</li>
                            <li><i class="fas fa-check"></i> 資料に関するご質問は、<a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせフォーム</a>よりご連絡ください。</li>
                        </ul>
                    </section>
                </article>

            <?php endwhile; ?>

        </main>
    </div>
</div>

<style>
.download-page {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
}

.page-header {
    text-align: center;
    padding: 60px 40px 40px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-radius: 20px;
    margin-bottom: 50px;
}

.page-title {
    font-size: 2.5em;
    color: var(--secondary-color);
    font-weight: 700;
    margin-bottom: 15px;
}

.download-doc-title {
    font-size: 1.3em;
    color: var(--primary-color);
    font-weight: 600;
}

.download-form-section {
    margin-bottom: 50px;
}

.form-instruction {
    text-align: center;
    margin-bottom: 40px;
    padding: 25px;
    background: linear-gradient(135deg, rgba(212, 175, 135, 0.1) 0%, rgba(232, 197, 168, 0.1) 100%);
    border-left: 4px solid var(--primary-color);
    border-radius: 10px;
}

.form-instruction p {
    color: var(--text-primary);
    line-height: 1.8;
    margin: 0;
}

.download-form-container {
    background: linear-gradient(to bottom, var(--bg-white) 0%, var(--bg-light) 100%);
    padding: 50px;
    border-radius: 20px;
    border: 2px solid var(--border-color);
    box-shadow: 0 10px 30px var(--shadow-soft);
}

.download-form .form-group {
    margin-bottom: 25px;
}

.download-form label {
    display: block;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.required {
    color: #d9534f;
    font-weight: 700;
}

.download-form input[type="text"],
.download-form input[type="email"],
.download-form input[type="tel"],
.download-form textarea {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid var(--border-color);
    border-radius: 10px;
    font-size: 1em;
    transition: all 0.3s ease;
    background-color: var(--bg-white);
}

.download-form input:focus,
.download-form textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(212, 175, 135, 0.1);
}

.checkbox-group label {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    cursor: pointer;
}

.checkbox-group input[type="checkbox"] {
    margin-top: 3px;
    width: 18px;
    height: 18px;
    cursor: pointer;
}

.form-submit {
    text-align: center;
    margin-top: 35px;
}

.submit-button {
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
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.submit-button:hover {
    background: linear-gradient(135deg, var(--accent-color) 0%, var(--primary-color) 100%);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(212, 175, 135, 0.4);
}

.download-message {
    text-align: center;
    padding: 50px 30px;
}

.success-icon {
    font-size: 4em;
    color: var(--success-color);
    margin-bottom: 20px;
}

.download-message h3 {
    font-size: 2em;
    color: var(--secondary-color);
    margin-bottom: 15px;
}

.download-message p {
    font-size: 1.1em;
    color: var(--text-secondary);
    margin-bottom: 30px;
}

.download-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 35px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    color: var(--text-primary);
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.download-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(212, 175, 135, 0.4);
}

.download-info {
    background: linear-gradient(135deg, var(--bg-cream) 0%, var(--bg-white) 100%);
    padding: 40px;
    border-radius: 20px;
    border: 2px solid var(--border-color);
}

.download-info h2 {
    font-size: 1.6em;
    color: var(--secondary-color);
    margin-bottom: 25px;
    font-weight: 700;
}

.info-list {
    list-style: none;
    padding: 0;
}

.info-list li {
    padding: 12px 0;
    color: var(--text-primary);
    line-height: 1.8;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.info-list i {
    color: var(--success-color);
    margin-top: 4px;
    flex-shrink: 0;
}

@media (max-width: 768px) {
    .download-form-container {
        padding: 30px 20px;
    }

    .page-title {
        font-size: 1.8em;
    }

    .download-doc-title {
        font-size: 1.1em;
    }

    .submit-button {
        width: 100%;
        justify-content: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('simple-download-form');
    const messageDiv = document.getElementById('download-message');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // フォームデータを取得
            const formData = new FormData(form);
            const downloadUrl = formData.get('download_url');

            // フォームを非表示にしてメッセージを表示
            form.style.display = 'none';
            messageDiv.style.display = 'block';

            // ダウンロードを開始
            setTimeout(function() {
                if (downloadUrl) {
                    window.location.href = downloadUrl;
                }
            }, 1000);

            // ここでフォームデータをサーバーに送信する処理を追加可能
            // 例: fetch APIを使ってデータベースに保存
        });
    }
});
</script>

<?php
get_footer();
