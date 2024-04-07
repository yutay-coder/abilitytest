# 20240407_ability_test

# abilitytest

# アプリケーション名

## 環境構築

- ディレクトリ構成
  Ability-laravel
  ├── docker
  │ ├── mysql
  │ │ ├── data
  │ │ └── my.cnf
  │ ├── nginx
  │ │ └── default.conf
  │ └── php
  │ ├── Dockerfile
  │ └── php.ini
  ├── docker-compose.yml
  └── src

- default.conf、yml、Dockerfile、ini を記載
- Docker ビルド
  docker-compose up -d --build

- Composer で laravel をインストールする＆確認
  docker-compose exec php bash
  composer -v

- Laravel のプロジェクトを作成
  composer create-project "laravel/laravel=8.\*" . --prefer-dist

- 時間の設定を変更
  config/app.php の 70 行目を'timezone' => 'Asia/Tokyo',にして時間設定

- マイグレーションファイル作成
- database/migrations ディレクトリ以下にマイグレーションファイルが作成される。
  docker-compose exec php bash
  php artisan make:migration create_contacts_table
  php artisan make:migration create_categories_table
  php artisan make:migration create_users_table
  //各マイグレーションファイルに記述を追加してマイグレーション
  php artisan migrate

- シーダーファイルを作成
  php artisan make:seeder UserTableSeeder
  php artisan make:seeder CategoriesTableSeeder
  php artisan make:seeder ContactsTableSeeder
- シーダーファイルに記載、DatabaseSeeder.php に登録して以下でシーディングを実行
  php artisan db:seed

- モデルを作成
- テーブル(マイグレーション)に対応したモデルを作成(src/app/models/モデル名.php)し、紐付ける
  docker-compose exec php bash
  php artisan make:model User(元から存在していたので不要)
  php artisan make:model Category
  php artisan make:model Contact

## 使用技術(実行環境)

Laravel 8
php:7.4.9

## ER 図

ability-test.drawio.png 参照

## URL

http://localhost/
http://localhost:8080/
