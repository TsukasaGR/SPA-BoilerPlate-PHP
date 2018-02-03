# これは何か

SPAを始める際にサクッと環境構築を行うためのボイラープレートです。
とりあえずで動かすレベルであればすぐに動かせると思います。

# 構成

## フロントエンド

- nginx
- node.js
- npm

## バックエンド

- php7.1
- nginx
- php-fpm
- composer

## DB

- MySQL5.7

# 導入手順

1. docker for mac, docker for windows等でdockerを利用可能な状態にする
1. /frontendディレクトリにフロントエンドのアプリを配置する
1. /backendディレクトリにバックエンドのアプリを配置する
1. /docker-compose/frontend/default.confのドキュメントルートをアプリのドキュメントルートに合わせる
1. /docker-compose/backend/default.confのドキュメントルートをアプリのドキュメントルートに合わせる
1. ディレクトリ直下でdockerを起動する
    ```shell
    $ docker-compose up -d
    ```
1. 必要であればDBを作成する

    項目 | 値
    --- | ---
    host | 127.0.0.1(アプリからDBサーバーを設定する場合はホスト名を `app-db` とする)
    user | root
    pass | root

1. アクセス確認する
    - frontend
        - http://127.0.0.1/80
    - backend
        - http://127.0.0.1/8000

# 主な使い方

1. フロントエンドでnpm installする場合
    ```shell
    # ホストOSにて
    $ docker exec -it frontend bash
    # コンテナにて
    $ cd /var/www/html
    $ npm install
    ```

1. バックエンドでcomposer installする場合
    ```shell
    # ホストOSにて
    $ docker exec -it backend bash
    # コンテナにて
    $ cd /var/www/html
    $ composer install
    ```
