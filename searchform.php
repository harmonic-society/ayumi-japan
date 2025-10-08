<?php
/**
 * The template for displaying search forms
 *
 * @package Ayumi_Japan
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php _e( '検索:', 'ayumi-japan' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php esc_attr_e( 'キーワードを入力...', 'ayumi-japan' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit">
        <span class="search-icon">🔍</span>
        <span class="search-text"><?php _e( '検索', 'ayumi-japan' ); ?></span>
    </button>
</form>
