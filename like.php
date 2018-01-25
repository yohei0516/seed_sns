<?php
session_start();

    // もしGET送信でlike_tweet_idが存在していたら
    // likeボタンが押されたとき
    if (isset($_GET["like_tweet_id"])) {
        // liks情報をlikesテーブルに登録
        like($_GET["like_tweet_id"],$_SESSION["id"],$_GET["page"]);
        // $sql = "INSERT INTO `likes` (`tweet_id`, `member_id`) VALUES (".$_GET["like_tweet_id"].",".$_SESSION["id"].");";

        // SQL文の実行
        // $stmt = $dbh->prepare($sql);
        // $stmt->execute();

        // // 一覧ページへもどる
        // header("Location: index.php");
  }


    // もしGET送信でunlike_tweet_idが存在していたら
    // unlikeボタンが押されたとき
    if (isset($_GET["unlike_tweet_id"])) {
       //  登録されているlike情報をlikesテーブルから削除
       unlike($_GET["unlike_tweet_id"],$_SESSION["id"],$_GET["page"]);
       //  $sql = "DELETE FROM `likes` WHERE tweet_id=".$_GET["unlike_tweet_id"]." AND member_id=".$_SESSION["id"];

       //  SQL文の実行
       //  $stmt = $dbh->prepare($sql);
       //  $stmt->execute();

       //  一覧ページへもどる
       //  header("Location: index.php");
    }

        // like関数
        // 引数 like_tweet_id,login_member_id
        function like($like_tweet_id,$login_member_id,$page){
          // DBに接続
          require('dbconnect.php');

          $sql = "INSERT INTO `likes` (`tweet_id`,`member_id`) VALUES (".$like_tweet_id.",".$login_member_id.");";

          // SQL文の実行
          $stmt = $dbh->prepare($sql);
          $stmt->execute();

          // 一覧ページへもどる
          header("Location: index.php?page=".$page);
        }

          // unlike関数
          // 引数 unlike_tweet_id,login_member_id
          function unlike($unlike_tweet_id,$login_member_id,$page){
          // DBに接続
          require('dbconnect.php');

          $sql = "DELETE FROM `likes` WHERE tweet_id=".$unlike_tweet_id." AND member_id=".$login_member_id;

          // SQL文の実行
          $stmt = $dbh->prepare($sql);
          $stmt->execute();

          // 一覧ページへもどる
          header("Location: index.php?page=".$page);
        }


?>