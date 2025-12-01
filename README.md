# Ayumi Japan WordPress Theme

アンケートの力で、ビジネスを正しく動かす。

A beautiful Japanese-themed WordPress theme for Ayumi Japan - a survey and market research company.

## Features

- Responsive design
- Custom logo support
- Custom background support
- Widget areas (sidebar and footer)
- Navigation menus (primary and footer)
- Post thumbnails
- Translation ready
- HTML5 markup

## Installation

1. Upload the `ayumi-japan` folder to `/wp-content/themes/`
2. Activate the theme through the 'Appearance > Themes' menu in WordPress
3. Configure theme settings in 'Appearance > Customize'

## Theme Structure

```
ayumi-japan/
├── style.css          # Main stylesheet with theme header
├── index.php          # Main template file
├── functions.php      # Theme functions and setup
├── header.php         # Header template
├── footer.php         # Footer template
├── sidebar.php        # Sidebar template
├── single.php         # Single post template
├── page.php           # Page template
├── archive.php        # Archive template
├── 404.php            # 404 error page template
├── screenshot.png     # Theme screenshot (1200x900px recommended)
└── README.md          # This file
```

## Customization

### Menus
The theme supports two menu locations:
- **Primary Menu** (in header) - HOME, サービス, 会社概要, ブログ, ドキュメント, お問い合わせ
- **Footer Menu** (in footer)

Configure via: `Appearance > Menus`

### Hero Background Image (TOPページ)
TOPページのヒーローセクションに背景画像を設定できます：

1. WordPress管理画面で `外観 > カスタマイズ > ヘッダー画像` に移動
2. 「新規画像を追加」をクリック
3. 画像をアップロード（推奨サイズ: 1920x1080px）
4. 画像を選択して「公開」

背景画像を設定すると、自動的に美しいオーバーレイが適用され、テキストの視認性が保たれます。

### Widgets
The theme includes two widget areas:
- Sidebar
- Footer

Configure via: `Appearance > Widgets`

### Custom Logo
You can add a custom logo via `Appearance > Customize > Site Identity`

### Custom Background
You can customize the site background via `Appearance > Customize > Background`

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## License

GNU General Public License v2 or later

## Credits

Theme developed for Ayumi Japan
