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

### DB関係
8. migrateする前のおまじない
```
run artisan key:generate
```

9. migrate
```
run artisan migrate
```

### JS関係
10. /etc/hosts　ファイルに追記
```
127.0.0.1 host.docker.internal
```
11. nodeバージョンの統一
```
$ nvm install && nvm use
```
12. nodeパッケージのインストール
```
$npm ci
```
13. laravel Mixを起動
```
npm run watch
```


