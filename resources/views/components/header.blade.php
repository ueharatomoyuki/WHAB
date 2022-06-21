
<?php
$user= session('userInf');

?>
<header>
    <h1>{{ $heading }}</h1>
    <h3>
      ようこそ、{{ $user[0]->name }}さん
    </h3>
    <a href="admin" class="btn">管理者専用ページ</a>
    <a href="acount" class="btn">アカウント情報</a>
    <a href="logout" class="btn">ログアウト</a>
</header>