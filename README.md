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
5. .envファイルを作成
```
$ cp .env.example .env
```
6. .envファイルのDBパスワードを設定する（好きなパスワードでOK。今回はpasswordとする）
```
DB_PASSWORD=password
```
7. dockerコンテナの起動/build
```
$ run up -d --build
```
8. PHPパッケージのインストール
```
$ run composer install
```

* .envを先に作らないと、.envの情報が加味されないままDBが立ち上がってしまうので注意。
* dockerコンテナを先に立ち上げてしまったら、db配下を一旦消して、buildしなおします。

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

localhost:8080で立ち上がったら成功！

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
