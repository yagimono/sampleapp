# 環境構築手順

## ディレクトリ作成

以下のディレクトリを作成する
```
Laravel  
├─laradock（環境用）  
└─sampleapp（アプリ用）
```

## 環境の準備

1. laradockディレクトリに以下をクローンする  
https://github.com/Laradock/laradock

1. laradockディレクトリ内のenv-exampleファイルをコピーし、.envファイルを作成する

1. .envファイルの以下を書き換える  
削除: `APP_CODE_PATH_HOST=../`  
追加: `APP_CODE_PATH_HOST=../sampleapp`  
削除: `NGINX_HOST_HTTP_PORT=80`  
追加: `NGINX_HOST_HTTP_PORT=8001`  
削除: `MYSQL_VERSION=latest`  
追加: `MYSQL_VERSION=5.7`

1. laradockディレクトリで以下を実行し、コンテナを初期化する(15分ほどかかる)  
`docker-compose up -d nginx mysql workspace phpmyadmin`

## アプリの準備

1. sampleappディレクトリに以下をクローンする  
https://github.com/yagimono/sampleapp

1. laradockディレクトリ内で以下コマンドを実行し、コンテナへログインする  
`docker-compose exec --user=laradock workspace bash`

1. ログイン後、その場（アプリルート）で以下、3つのコマンドを実行する  
`composer install`  
`cp -p .env.example .env`  
`php artisan key:generate`  

1. .envファイルの以下を書き換える  
削除: `DB_HOST=127.0.0.1`  
追加: `DB_HOST=mysql`  
削除: `DB_DATABASE=homestead`  
追加: `DB_DATABASE=default`  
削除: `DB_USERNAME=homestead`  
追加: `DB_USERNAME=default`

1. ホストOS（ローカルPC）のブラウザで以下にアクセスし、Laravelと大きく表示されればOK  
   http://localhost:8001/

## その他のコマンド

- コンテナの起動  
`docker-compose up -d nginx mysql`

- コンテナの停止  
`docker-compose stop`

- コンテナへログイン  
`docker-compose exec --user=laradock workspace bash`

- コンテナからログアウト  
`exit`
