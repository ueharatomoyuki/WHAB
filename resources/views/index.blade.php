<?php 
session_start();
if(!isset($_SESSION['userLog'])){
$_SESSION['userLog'] = 1;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/style.css">
  <title>ログイン</title>
</head>

<body>
  <header>
    <h2>
      ログイン
    </h2>
  </header>

<div class="main-parent">
  <div class="main">
    <h2>ネームとパスワードを入力してください</h2> 

    <form class="login-form" action="calendar" method="post">
      @csrf
      @if($_SESSION['userLog']==0)
      <p class="error">ネームまたはパスワードが不正です</p>
      @endif
      <div>
        <h3><label>ネーム</label></h3>
        <input type="text" name="name" placeholder="例)家計簿">
        @error('name')
        <span class="error">{{$message}}</span>
        @enderror
      </div>
      <div class="password">
        <h3><label>パスワード</label></h3>
        <input type="password" name="pass">
        @error('pass')
        <span class="error">{{$message}}</span>
        @enderror
      </div>
      <button type="submit" class="register-btn">ログイン</button>
    </form>
    <br>
    <a href="insert" class="register-btn">新規登録</a>
  </div>
</div>

<!--  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>-->

</body>

</html>
<?php 
if($_SESSION['userLog']==0)
unset($_SESSION['userLog'])
?>