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