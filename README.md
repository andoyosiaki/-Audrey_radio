はじめに

このアプリはPHPを独学で学習している私がアウトプットの１つとして作成したもので、セキュリティなどに問題があるかもしれません。  
もし実際にアプリを動作させるような場合はローカル環境で動作させてください。
あと、もし眼に余るようなトンデモナイ記述をしていたらそっと<a href="https://twitter.com/float_top">ツイッター</a>のDMにでも連絡いただければ幸いです。(；´Д`)


アプリ名
====
**<a href="https://3.kagome.xyz" target=”_blank”>オードリー文字起こしまとめ</a>**

## 簡単な説明
youtubeにある「オードリー文字起こしまとめ」をまとめたアプリです。
管理ユーザーのみコンテンツの投稿が可能です。


## 機能
1. コンテンツ投稿機能（管理ユーザーのみ)
1. コンテンツ一覧表示機能
1. コンテンツ詳細表示機能


## 開発環境
使用言語・データーベース
* PHP
* HTML
* CSS
* MYSQL  

使用ツール・ライブラリ
* bootstrap4
* MAMP
* Atom Editor  


## 作った感想と今後の課題  

phpを使った初めてのアプリケーションとなります。  

コンテンツの投稿は管理ユーザーのみ可能で、動画のurlとタイルをコピペしてフォームから投稿します。
同じく、一覧画面のサムネイル画像も、youtubeから手動でDLした物をフォームから投稿して一意な名前を付けてimgフォルダに保存しています。
コンテンツの削除・編集機能などは実装していません。
