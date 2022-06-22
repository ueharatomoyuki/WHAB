<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>アカウント-パスワード変更画面</title>
</head>

<body>
  <x-header heading="WHAB" name="Axiz花子" />
   
  <div class="main-parent">
    <div class="main">

      <p>
        <a href="acount" class="btn">アカウント情報へ戻る</a>
      </P>
 
        <div class="input-form">
            <h2>パスワード変更</h2>

            <div class="password">
                <form action="changePassword" method="post">
                    @csrf
                    <h4><label>現在のパスワード</label>
                    <input type="password" name="user_name" size=50 placeholder="aaaa">
                    </h4>
                    <br>
                    <h4><label>新しいパスワードを入力してください</label><br>
                    <input type="password" name="user_name" size=50 placeholder="xxxx">
                    </h4>
                    <h4><label>新しいパスワードを再入力してください</label><br>
                    <input type="password" name="user_name" size=50 placeholder="xxxx">
                    </h4>
                    <div><br>
                        <button type="submit" onclick="openModal()">登録</button>
                        <x-modal mode="登録" />
                    </div>
                </form>
            </div>
                
        </div>
    </div>
  </div>

  <script src="js/modal.js"></script>

</body>
</html>
