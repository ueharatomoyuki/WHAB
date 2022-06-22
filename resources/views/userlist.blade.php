<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/schedule-style.css">
  <title>管理者-ユーザー会員一覧</title>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
  <div class="main">
   
  <p><a href="admin" class="back-btn">管理者専用へ戻る</a></p>
    
    <div class="input-form">
        <h2>ユーザー管理一覧</h2>

        <form>
            <input type="text" name="text" size="30" placeholder="あいまい検索">
            <button type="submit" class="index-btn">検索</button>
        </form><br>

        <div>
        <table border=1>
            <tr >
                <th>ユーザーネーム</th>
                <th>ユーザーid</th>
                <th>メールアドレス</th>
                <th>権限</th>
            </tr>
            <tr>
                <td> whab </td>
                <td> 001 </td>
                <td> whab@xxxx.co.jp </td>
                <td> 0 </td>
            </tr>
            <tr>
                <td> whab2 </td>
                <td> 002 </td>
                <td> whab2@xxxx.co.jp </td>
                <td> 0 </td>
            </tr>
        </talbe>
</div>

    </div>
    
</div>
</div>

  <script src="js/modal.js"></script>

</body>
</html"