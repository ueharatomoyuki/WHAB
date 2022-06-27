<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>アカウント-ユーザーネーム変更画面</title>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
    <div class="main">

      <p>
        <a href="acount" class="back-btn">アカウント情報へ戻る</a>
      </P>
 
        <div class="input-form">
            <h2>ユーザーネーム変更</h2><br>

            <div class="password">
                <form action="changeAcountName" method="post">
                    @csrf
                    <h4><label>新しいユーザーネームを登録します</label><br>
                    <input type="text" name="user_name" size=50 value="{{$name}}">
                    </h4>
                    <div><br>
                        <button type="submit" >登録</button>
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
