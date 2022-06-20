<<<<<<< HEAD
<?php
$user= session('userInf');

?>
<header>
    <h3>
      ようこそ、{{ $user[0]->name }}さん
=======
<header>
    <h3>
      ようこそ、{{ $name }}さん
>>>>>>> 8f738281f47fb92688772dfe0836cd1d1084cb50
    </h3>
    <h2>{{ $heading }}</h2>
    <a href="logout" class="btn">ログアウト</a>
</header>