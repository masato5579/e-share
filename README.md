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
5. dockerコンテナの起動
```
$ run up
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
