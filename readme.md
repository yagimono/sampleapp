# 環境構築手順

## ディレクトリ作成

以下のディレクトリを作成する
```
Laravel  
├─laradock（環境用）  
└─sampleapp（アプリ用）
```

## アプリの準備

sampleappディレクトリに以下をクローンする  
https://github.com/yagimono/sampleapp

## 環境の準備

1. laradockディレクトリに以下をクローンする  
https://github.com/Laradock/laradock

1. laradockディレクトリ内のenv-exampleファイルをコピーし、.envファイルを作成する

1. .envファイルの以下を書き換える  
削除: `APP_CODE_PATH_HOST=../`  
追加: `APP_CODE_PATH_HOST=../sampleapp`

1. docker-compose.ymlファイルの以下を書き換える  
削除: `"${NGINX_HOST_HTTP_PORT}:80"`  
追加: `"8001:80"`  
削除: `"${NGINX_HOST_HTTPS_PORT}:443"`  
追加: `"443:443"`

1. laradockディレクトリで以下を実行し、コンテナを初期化する(15分ほどかかる)  
`docker-compose up -d nginx mysql workspace phpmyadmin`

1. 以下にアクセスし、Laravelと大きく表示されればOK  
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
