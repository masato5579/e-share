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
5. dockerコンテナの起動
```
$ run up
```
6. PHPパッケージのインストール
```
$ run composer install
```

