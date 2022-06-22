<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>アカウント-メールアドレス変更画面</title>
</head>

<body>
  <x-header heading="WHAB"  />
   
  <div class="main-parent">
    <div class="main">

      <p>
        <a href="acount" class="btn">アカウント情報へ戻る</a>
      </P>
 
      <div class="input-form">
            <h2>メールアドレス変更</h2>

            <div class="password">
                <form action="changeMail" method="post">
                    @csrf
                    <h4><label>現在のメールアドレス</label>
                    <input type="password" name="user_name" size=50 placeholder="aaaa@aaa.co.jp">
                    </h4>
                    <br>
                    <h4><label>新しいメールアドレスを入力してください</label><br>
                    <input type="password" name="user_name" size=50 placeholder="xxxx@aaa.co.jp">
                    </h4>
                    <h4><label>新しいメールアドレスを再入力してください</label><br>
                    <input type="password" name="user_name" size=50 placeholder="xxxx@aaa.co.jp">
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
