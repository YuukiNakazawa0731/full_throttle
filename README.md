# Full Throttle ポートフォリオ

このリポジトリは、仲澤勇樹のポートフォリオサイト「Full Throttle」のソースコードです。

## 構成

- `components/index.php`  
  メインのポートフォリオページ（HTML/PHP）

- `components/index_parts/`  
  サイトの各種パーツ・リソース
  - `full_throttle.js`：トップページの動的演出・アニメーション制御
  - `works.js`：作品詳細ページのアニメーション制御
  - `about_works/`：各作品の詳細ページ（HTML）
  - `css/`：レスポンシブ対応のスタイルシート（full/middle/mobile）
  - `images/`：画像素材

## 主な機能

- ローディングアニメーション（初回アクセス時のみ）
- スクロールやクリックによる各種アニメーション
- レスポンシブデザイン（PC/タブレット/スマートフォン対応）
- jQuery・Slick Carouselによるスライダー演出
- 作品ごとの詳細ページ

## セットアップ・動作環境

1. Webサーバー（PHP対応）上に配置してください。
2. ルートディレクトリにjQuery（`jQuery.js`）、typist.js、slick.jsが必要です。
3. `components/index.php` にアクセスするとトップページが表示されます。

## 依存ライブラリ

- [jQuery](https://jquery.com/)
- [Slick Carousel](https://kenwheeler.github.io/slick/)
- typist.js（ローディングテキストアニメーション）

## ライセンス

このポートフォリオは個人利用目的で作成されています。  
画像・テキスト等の無断転載はご遠慮ください。

---

© Nakazawa Yuuki 2022
