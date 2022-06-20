
<?php
$user= session('userInf');

?>
<header>
    <h3>
      ようこそ、{{ $user[0]->name }}さん
    </h3>
    <h2>{{ $heading }}</h2>
    <a href="logout" class="btn">ログアウト</a>
</header>