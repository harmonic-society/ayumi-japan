<?php
/**
 * Theme functions and definitions
 *
 * @package Ayumi_Japan
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup
 */
function ayumi_japan_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ayumi-japan' ),
        'footer'  => __( 'Footer Menu', 'ayumi-japan' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add theme support for custom background
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
    ) );

    // Add theme support for custom header (Hero background)
    add_theme_support( 'custom-header', array(
        'default-image'      => '',
        'width'              => 1920,
        'height'             => 1080,
        'flex-width'         => true,
        'flex-height'        => true,
        'default-text-color' => '6B5D52',
        'header-text'        => false,
        'uploads'            => true,
    ) );

    // Make theme available for translation
    load_theme_textdomain( 'ayumi-japan', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ayumi_japan_setup' );

/**
 * Set the content width in pixels
 */
function ayumi_japan_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'ayumi_japan_content_width', 1200 );
}
add_action( 'after_setup_theme', 'ayumi_japan_content_width', 0 );

/**
 * Register widget area
 */
function ayumi_japan_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'ayumi-japan' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'ayumi-japan' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer', 'ayumi-japan' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'ayumi-japan' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ayumi_japan_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function ayumi_japan_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'ayumi-japan-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null );

    // Enqueue theme stylesheet
    wp_enqueue_style( 'ayumi-japan-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue theme JavaScript
    wp_enqueue_script( 'ayumi-japan-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'ayumi_japan_scripts' );

/**
 * Custom excerpt length
 */
function ayumi_japan_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'ayumi_japan_excerpt_length' );

/**
 * Custom excerpt more
 */
function ayumi_japan_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'ayumi_japan_excerpt_more' );

/**
 * Register Custom Post Type: Whitepapers
 */
function ayumi_japan_register_whitepaper_cpt() {
    $labels = array(
        'name'                  => _x( 'ホワイトペーパー', 'Post Type General Name', 'ayumi-japan' ),
        'singular_name'         => _x( 'ホワイトペーパー', 'Post Type Singular Name', 'ayumi-japan' ),
        'menu_name'             => __( 'ホワイトペーパー', 'ayumi-japan' ),
        'name_admin_bar'        => __( 'ホワイトペーパー', 'ayumi-japan' ),
        'archives'              => __( 'アーカイブ', 'ayumi-japan' ),
        'attributes'            => __( '属性', 'ayumi-japan' ),
        'parent_item_colon'     => __( '親アイテム:', 'ayumi-japan' ),
        'all_items'             => __( '全ての資料', 'ayumi-japan' ),
        'add_new_item'          => __( '新規追加', 'ayumi-japan' ),
        'add_new'               => __( '新規追加', 'ayumi-japan' ),
        'new_item'              => __( '新規資料', 'ayumi-japan' ),
        'edit_item'             => __( '編集', 'ayumi-japan' ),
        'update_item'           => __( '更新', 'ayumi-japan' ),
        'view_item'             => __( '表示', 'ayumi-japan' ),
        'view_items'            => __( '資料を表示', 'ayumi-japan' ),
        'search_items'          => __( '資料を検索', 'ayumi-japan' ),
        'not_found'             => __( '見つかりませんでした', 'ayumi-japan' ),
        'not_found_in_trash'    => __( 'ゴミ箱にありません', 'ayumi-japan' ),
        'featured_image'        => __( 'アイキャッチ画像', 'ayumi-japan' ),
        'set_featured_image'    => __( 'アイキャッチ画像を設定', 'ayumi-japan' ),
        'remove_featured_image' => __( 'アイキャッチ画像を削除', 'ayumi-japan' ),
        'use_featured_image'    => __( 'アイキャッチ画像として使用', 'ayumi-japan' ),
        'insert_into_item'      => __( '挿入', 'ayumi-japan' ),
        'uploaded_to_this_item' => __( 'アップロード', 'ayumi-japan' ),
        'items_list'            => __( '資料一覧', 'ayumi-japan' ),
        'items_list_navigation' => __( '資料一覧ナビゲーション', 'ayumi-japan' ),
        'filter_items_list'     => __( '資料をフィルター', 'ayumi-japan' ),
    );

    $args = array(
        'label'                 => __( 'ホワイトペーパー', 'ayumi-japan' ),
        'description'           => __( 'ダウンロード可能な資料・ホワイトペーパー', 'ayumi-japan' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'whitepaper_category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-media-document',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'whitepapers',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type( 'whitepaper', $args );
}
add_action( 'init', 'ayumi_japan_register_whitepaper_cpt', 0 );

/**
 * Register Custom Taxonomy for Whitepapers
 */
function ayumi_japan_register_whitepaper_taxonomy() {
    $labels = array(
        'name'                       => _x( '資料カテゴリー', 'Taxonomy General Name', 'ayumi-japan' ),
        'singular_name'              => _x( '資料カテゴリー', 'Taxonomy Singular Name', 'ayumi-japan' ),
        'menu_name'                  => __( '資料カテゴリー', 'ayumi-japan' ),
        'all_items'                  => __( '全てのカテゴリー', 'ayumi-japan' ),
        'parent_item'                => __( '親カテゴリー', 'ayumi-japan' ),
        'parent_item_colon'          => __( '親カテゴリー:', 'ayumi-japan' ),
        'new_item_name'              => __( '新規カテゴリー名', 'ayumi-japan' ),
        'add_new_item'               => __( '新規カテゴリーを追加', 'ayumi-japan' ),
        'edit_item'                  => __( 'カテゴリーを編集', 'ayumi-japan' ),
        'update_item'                => __( 'カテゴリーを更新', 'ayumi-japan' ),
        'view_item'                  => __( 'カテゴリーを表示', 'ayumi-japan' ),
        'separate_items_with_commas' => __( 'カンマで区切る', 'ayumi-japan' ),
        'add_or_remove_items'        => __( '追加または削除', 'ayumi-japan' ),
        'choose_from_most_used'      => __( 'よく使われているものから選択', 'ayumi-japan' ),
        'popular_items'              => __( '人気のカテゴリー', 'ayumi-japan' ),
        'search_items'               => __( 'カテゴリーを検索', 'ayumi-japan' ),
        'not_found'                  => __( '見つかりませんでした', 'ayumi-japan' ),
        'no_terms'                   => __( 'カテゴリーなし', 'ayumi-japan' ),
        'items_list'                 => __( 'カテゴリー一覧', 'ayumi-japan' ),
        'items_list_navigation'      => __( 'カテゴリー一覧ナビゲーション', 'ayumi-japan' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'show_in_rest'               => true,
    );

    register_taxonomy( 'whitepaper_category', array( 'whitepaper' ), $args );
}
add_action( 'init', 'ayumi_japan_register_whitepaper_taxonomy', 0 );

/**
 * Add custom fields meta box for whitepaper download link
 */
function ayumi_japan_add_whitepaper_meta_box() {
    add_meta_box(
        'whitepaper_download',
        __( 'ダウンロード設定', 'ayumi-japan' ),
        'ayumi_japan_whitepaper_meta_box_callback',
        'whitepaper',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'ayumi_japan_add_whitepaper_meta_box' );

/**
 * Meta box callback function
 */
function ayumi_japan_whitepaper_meta_box_callback( $post ) {
    wp_nonce_field( 'ayumi_japan_save_whitepaper_meta', 'ayumi_japan_whitepaper_nonce' );

    $download_url = get_post_meta( $post->ID, '_whitepaper_download_url', true );
    $file_size = get_post_meta( $post->ID, '_whitepaper_file_size', true );
    ?>
    <p>
        <label for="whitepaper_download_url"><strong><?php _e( 'ダウンロードURL:', 'ayumi-japan' ); ?></strong></label><br>
        <input type="url" id="whitepaper_download_url" name="whitepaper_download_url" value="<?php echo esc_attr( $download_url ); ?>" style="width: 100%;" placeholder="https://example.com/document.pdf">
        <small><?php _e( 'PDFやZIPファイルなどのダウンロードURLを入力してください。', 'ayumi-japan' ); ?></small>
    </p>
    <p>
        <label for="whitepaper_file_size"><strong><?php _e( 'ファイルサイズ:', 'ayumi-japan' ); ?></strong></label><br>
        <input type="text" id="whitepaper_file_size" name="whitepaper_file_size" value="<?php echo esc_attr( $file_size ); ?>" placeholder="例: 2.5MB">
    </p>
    <?php
}

/**
 * Save whitepaper meta data
 */
function ayumi_japan_save_whitepaper_meta( $post_id ) {
    if ( ! isset( $_POST['ayumi_japan_whitepaper_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['ayumi_japan_whitepaper_nonce'], 'ayumi_japan_save_whitepaper_meta' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['whitepaper_download_url'] ) ) {
        update_post_meta( $post_id, '_whitepaper_download_url', esc_url_raw( $_POST['whitepaper_download_url'] ) );
    }

    if ( isset( $_POST['whitepaper_file_size'] ) ) {
        update_post_meta( $post_id, '_whitepaper_file_size', sanitize_text_field( $_POST['whitepaper_file_size'] ) );
    }
}
add_action( 'save_post', 'ayumi_japan_save_whitepaper_meta' );

/**
 * Add custom body classes
 */
function ayumi_japan_body_classes( $classes ) {
    // Add class for pages with sidebar
    if ( is_active_sidebar( 'sidebar-1' ) && ! is_page_template( 'template-landing.php' ) ) {
        $classes[] = 'has-sidebar';
    }

    // Add class for front page
    if ( is_front_page() ) {
        $classes[] = 'is-front-page';
    }

    return $classes;
}
add_filter( 'body_class', 'ayumi_japan_body_classes' );

/**
 * Customize archive title
 */
function ayumi_japan_archive_title( $title ) {
    if ( is_post_type_archive( 'whitepaper' ) ) {
        $title = __( 'ホワイトペーパー・資料一覧', 'ayumi-japan' );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'ayumi_japan_archive_title' );
