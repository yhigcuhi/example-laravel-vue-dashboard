# redoc導入
FROM redocly/redoc:latest

# nginx config file 書き換え (キャッシュ無効化など)
# パスは何故かカレントディレクトリかららしい https://qiita.com/gbf_abe/items/2bf45206c515cea75d9b
COPY ./*.conf /etc/nginx/conf.d/

# ドキュメントディレクトリパス
WORKDIR /
