<?php
/**
 * The header template file
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="site-branding">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                        ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo esc_html( $description ); ?></p>
                            <?php
                        endif;
                    endif;
                    ?>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="menu-icon"></span>
                        <span class="menu-text">メニュー</span>
                    </button>
                    <?php
                    // メニューが設定されていない場合のフォールバック
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'nav-menu',
                            'container'      => false,
                        ) );
                    } else {
                        // デフォルトメニュー
                        ?>
                        <ul id="primary-menu" class="nav-menu">
                            <li class="<?php echo is_front_page() ? 'current-menu-item' : ''; ?>">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
                            </li>
                            <li class="<?php echo is_page( 'services' ) ? 'current-menu-item' : ''; ?>">
                                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">サービス</a>
                            </li>
                            <li class="<?php echo is_page( 'about' ) ? 'current-menu-item' : ''; ?>">
                                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">会社概要</a>
                            </li>
                            <li class="<?php echo is_home() || is_singular( 'post' ) ? 'current-menu-item' : ''; ?>">
                                <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a>
                            </li>
                            <li class="<?php echo is_post_type_archive( 'whitepaper' ) || is_singular( 'whitepaper' ) ? 'current-menu-item' : ''; ?>">
                                <a href="<?php echo esc_url( home_url( '/whitepapers/' ) ); ?>">ドキュメント</a>
                            </li>
                            <li class="menu-item-cta <?php echo is_page( 'contact' ) ? 'current-menu-item' : ''; ?>">
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
                            </li>
                        </ul>
                        <?php
                    }
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
