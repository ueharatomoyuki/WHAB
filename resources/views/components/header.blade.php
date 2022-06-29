
<link href="https://fonts.googleapis.com/css?family=Londrina+Shadow rel="stylesheet">

<?php
$user= session('userInf');

?>
<header>

    <h1>{{ $heading }}</h1>

    <h3><br>
      ようこそ、{{ $user[0]->name }}さん
    </h3>
    <a href="/getinformation" class="bt bt-border-shadow bt-border-shadow--color">お知らせ</a>


    @if($user[0]->name === "admin")
    <a href="/admin" class="bt bt-border-shadow bt-border-shadow--color">管理者専用ページ</a>

    @else
    @endif
    <a href="/acount" class="bt bt-border-shadow bt-border-shadow--color">アカウント情報</a>

    <a href="/logout" class="bt bt-border-shadow bt-border-shadow--color">ログアウト</a>

  </header>