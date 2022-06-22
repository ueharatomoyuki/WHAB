<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>アカウント情報</title>
</head>

<body>
  <x-header heading="WHAB" name="Axiz花子" />

  <div class="main-parent">
    <div class="main">
    <p><a href="calendar" class="btn">マイページへ戻る</a></P>
 
    <div class="input-form">
    <h2>アカウント情報</h2><br>

      <div>
        <h3><label>　　　ID　　　</label>
        <input type="text" size=30 >
        </h3>
      </div>

      <div class="password">
        <form action="changePassword" method="post">
            <h3><label>　パスワード　</label>
            <input type="password" name="password" size=30>
            </h3>
            <button type="submit" class="btn">変更</button>
        </form>
      </div>

      <div class="password">
        <form action="changeUserName" method="post">
            <h3><label>ユーザーネーム</label>
            <input type="text" name="user_name" size=30>
            <button type="submit" class="btn">変更</button>
            </h3>
        </form>
      </div>
            
      <div class="password">
        <form action="changeMail" method="post">
            <h3><label>メールアドレス</label>
            <input type="text" name="mail" size=30>
            <button type="submit" class="btn">変更</button>
            </h3>
        </form>
      </div>
      
    </div>

    </div>
</div>

  <script src="js/modal.js"></script>

</body>
</html>
