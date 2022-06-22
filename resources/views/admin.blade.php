<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>管理者専用ページ</title>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
  <div class="main">
   
  <p><a href="calendar" class="back-btn">マイページへ戻る</a></p>
    
    <div class="input-form">
        <h2>管理者専用ページ</h2>

      <div>
        <h3><label>　　　ID　　　</label>
        <input type="text" size=30>
        </h3>
      </div>

      <div class="password">
        <h3><label>ユーザーネーム</label>
        <input type="text" size=30>
        </h3>
      </div>
            
      <div class="password">
        <h3><label>メールアドレス</label>
        <input type="text" size=30>
        </h3>
      </div>
      
      <div>
      <h3>ユーザー管理</h3>
            <a href="userlist" class="back-btn">ユーザー一覧</a>
            <a href="information" class="back-btn">お知らせ</a>
      </div>

    </div>
    
    </div>
</div>

  <script src="js/modal.js"></script>

</body>
</html>
