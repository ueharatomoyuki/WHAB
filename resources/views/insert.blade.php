<?php
session_start();
if(!isset($_SESSION['noPass'])){
   $_SESSION['noPass'] = 1;
}
$name = "";
if(isset($_SESSION['uName'])){
  $name = $_SESSION['uName'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>新規登録</title>
</head>

<body>
  <header>
    <h2>
      新規登録
    </h2>
  </header>

  <div class="main-parent">
  <div class="main">
    <h2>ネームとパスワードとメールアドレスを入力してください</h2> 

    <form class="login-form" action="insert" method="post">
      @csrf
      @if($_SESSION['noPass']==0)
      <p class="error"> パスワードとパスワード(確認)が違います！</p>
      @endif
      @if($name != "")
      <p class="error">{{$name}}は使われています</p>
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
      <div class="password">
        <h3><label>パスワード(確認)</label></h3>
        <input type="password" name="pass1">
        @error('pass1')
        <span class="error">{{$message}}</span>
        @enderror
      </div>
      <div class="password">
        <h3><label>メールアドレス</label></h3>
        <input type="text" name="mail">
        @error('mail')
        <span class="error">{{$message}}</span>
        @enderror
      </div>
      <button type="submit" class="btn">登録</button>
    </form>
  </div>
</div>
  <a href="index" class="btn">ログイン画面へ戻る</a>
  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>

</body>

</html>
<?php
if($_SESSION['noPass']==0)
unset($_SESSION['noPass']);

if(isset($_SESSION['uName']))
unset($_SESSION['uName']);

?>