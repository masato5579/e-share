# e-share

## Tech Stack
- Laravel 8.x
- PHP 8.x
- MySQl 8.0
- Node.js
- React

## Prerequisites
- docker
- nvm

## SetUp

### 初期設定
1. Prerequisitesをインストール
2. aliasを設定
```
echo "alias run='./Taskfile'" >> ~/.zshrc
```
3. gitリポジトリをクローン
```
$ git@github.com:masato5579/e-share.git
```
4. ディレクトリの移動
```
$ cd e-share
```

### PHP関係
5. dockerコンテナの起動/build
```
$ run up -d --build
```
6. PHPパッケージのインストール
```
$ run composer install
```
7. .envファイルを作成
```
$ cp .env.example .env
```
8. .envファイルのDBパスワードを設定する（好きなパスワードでOK。今回はpasswordとする）
```
DB_PASSWORD=password
```

### DB関係
9. migrateする前のおまじない
```
$ run artisan key:generate
```

10. migrate
```
$ run artisan migrate
```

### JS関係
11. /etc/hosts　ファイルに追記
```
127.0.0.1 host.docker.internal
```
12. nodeバージョンの統一
```
$ nvm install && nvm use
```
13. nodeパッケージのインストール
```
$ npm install
```
14. laravel Mixを起動
```
$ npm run watch
```

上記で失敗したら教えてください。

## npm script

### npm run dev
フロントエンドの開発環境の立ち上げ
1. prettierでコードの整形
2. eslintでコードチェック
3. 対象ファイルのコンパイル

### npm run watch
対象ファイルのコンパイル/変更があったら即時コンパイル

### npm run lint
対象ファイルのコードチェック・コード整形

### npm run fmt
フォーマットされているかの確認

### npm run fmt:fix
フォーマット後の内容でファイルを上書きする

## composer 

### run composer lint
phpのコードチェック/コード整形
1. @phpcbf
2. @phpc
3. @phpcsfixe
