
<?php
$user= session('userInf');

?>
<header>
    <h1>{{ $heading }}</h1>
    <h3><br>
      ようこそ、{{ $user[0]->name }}さん
    </h3>
    <a href="/informatioin" class="header-btn">お知らせ</a>
    <a href="/admin" class="header-btn">管理者専用ページ</a>
    <a href="/acount" class="header-btn">アカウント情報</a>
    <a href="/logout" class="logout-btn">ログアウト</a>
</header>