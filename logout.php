<?php
session_start();

  // セッションの中身を空の配列で上書きする
  $SESSION = array();

  // セッション情報も有効期限切れにする
  if (ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time() - 42000,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

  }

  // セッション情報の破棄
  session_destroy();

  // Cookie情報の削除
  setcookie('email','',time() - 3000);
  setcookie('password','',time() - 3000);

  // ログイン後の画面に戻る
  header("Location: index.php"); //ログインの画面に残手で戻る
  exit();

  // ログイン後の画面に、ログインチェックの機能を実装
  // ログイン後の画面に行くことでしっかりログアウトしているかどうか確認できる

?>