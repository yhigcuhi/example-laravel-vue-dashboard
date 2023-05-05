# example-laravel-vue-dashboard
Laravel + Vue3 での Dashboard画面 サンプル

## 環境
|項目|バージョン|
|:---|:---:|
|php|8.1 (laravel 9以降を使いたいため)|
|laravel|10（2023.05.04 php 8.1での最新）|
|nginx|とりあえず最新（開発用なので）|
|postgres|13（都合上）|

## 環境構築: laravel
```bash
$ composer create-project laravel/laravel .
$ composer install
$ curl https://www.toptal.com/developers/gitignore/api/vim,vue,node,linux,macos,laravel,windows,composer,intellij,sublimetext,visualstudio,visualstudiocode >> .gitignore
``` 

## 環境構築: vue on Laravel + Inertia + typescript
```bash
$ npm install && npm run dev
$ npm install -D bootstrap sass lodash @types/lodash @tailwindcss/forms autoprefixer postcss tailwindcss @types/ziggy-js @vitejs/plugin-vue typescript vue vue-tsc @inertiajs/vue3
$ composer require inertiajs/inertia-laravel tightenco/ziggy
```

## 環境構築: Google OAuth
[laravel/socialite Google OAuth 参考](https://zenn.dev/naoki_oshiumi/articles/80ab178d958447)
[laravel/socialite + breeze Laravel 10のカスタマイズ 参考](https://reffect.co.jp/laravel/socialiote)

- socialiteインストール
```bash
$ composer require laravel/socialite --dev
```
- ログイン画面とシーダー作成

service.phpとenvの内容に Google OAuthの設定を記載

## 利用デザイン
[Argon Dashboard 2 Creative-time 利用(resources/assets 配下の資材)](https://demos.creative-tim.com/vue-argon-dashboard)

- vite-tsconfig-pathsで「@assets」のエイリアスをviteで使えるように (tsconfigも変更)
- sass と sass-loaderのバージョンを下げる(利用デザインでの 利用bootstrapバージョンのバグに合わせ)
- 一部 scssの書き換え sassのバージョン対応 (変数 / 数 => calc(変数 / 数)へ) 

コマンド
```bash
$ npm i -D vite-tsconfig-paths
```

## 資材管理
- バックエンド: laravel
- ルーティング定義: inertiaで laravelとvueを結合
- フロントエンド: vue (index.htmlの代わりだけ blade)

※ vueとしては typescript で実装
※ SPA + RESTfull で可能な限り実装

/
    ┗ /docker (コンテナごとの Docker File)
        ┗ /nginx
            ┗ Dcokerfile
        ┗ /php
            ┗ Dcokerfile
        ┗ /postgres
            ┗ Dcokerfile
    ┗ /db  (postgresのマウント先)
    ┗ /laravel-src (laravel + vueソース)
        ┗ /resources
            ┗ /js
                ┗ /pages (表示する画面ごと TODO:ディレクトリ構成は今後検討)
                    ┗ XXX.vue (画面vue)
                ┗ app.ts (エントリーポイント)
            ┗ /view
                ┗ app.blade.php (エントリーポイント)
            ┗ .env (laravel 用:基本何もしない docker から反映する)
    ┗ docker-compose.yml
    ┗ .env (docker compose用)