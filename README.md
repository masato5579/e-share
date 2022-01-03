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
5. .envファイルと.env.testingを作成
```
$ cp .env.example .env
$ cp .env.example .env.testing
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

### testDB関係(これをしないとテストした時に本番DBが変わってしまう)

15. .env.testingを作成する

```
$ cp .env.example .env.testing
```

16. .env.testingを以下のように編集する

```
APP_KEY=(ここはenvファイルのをコピペしてください。)
DB_DATABASE=eshare_testing
DB_USERNAME=sail
DB_PASSWORD=password
```

17. dockerの中で、mysqlを立ち上げる

```
$ docker compose exec mysql bash
```

18. mysqlにログインする
```
$ mysql -p
```

19. テスト用のDBを作成する

```
mysql> CREATE DATABASE eshare_testing
```

20. deployerに権限に付与する

```
mysql> GRANT ALL ON .* TO sail;
```

21. テスト用DBをmigrateする

```
$ run artisan migrate --env=testing
```

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
