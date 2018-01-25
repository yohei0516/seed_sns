<?php
  require("function.php");

  // ログインチェック
  login_check();

  // つぶやきを削除
  delete_tweet();
  // // DBに接続
  // require('dbconnect.php');

  // // 削除したいtweet_id
  // $delete_tweet_id = $_GET['tweet_id'];

  // // 論理削除用のUPDATE文
  // $sql = "UPDATE `tweets` SET `delete_flag` = '1' WHERE `tweets`.`tweet_id` = ".$delete_tweet_id;

  // // SQL実行
  // $stmt = $dbh->prepare($sql);
  // $stmt->execute();

  // // 一覧画面に戻る
  // header("Location: index.php");
  // exit;
?>

<!-- 
物理削除...データを実際に削除（データはなくなる）
Delete文

論理削除...データを削除した定義にする（delete_flagなど専用のカラムを用意する）

おまけ
テーブルのユーザー定義について
テーブルのカラムへ挿入するデータが未指定の時、セットする値を決められる(INSERT文に設定してなくてもエラーにならない)

論理削除の例
tweet_idが1のものを論理削除する

UPDATE `tweets` SET `delete_flag` = '1' WHERE `tweets`.`tweet_id` =1; 
-->