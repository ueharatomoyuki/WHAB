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

        <form action="sortlist">
            <input type="text" name="sort" size="30" placeholder="あいまい検索">
            <button type="submit" class="index-btn">検索</button>
        </form><br>

        <div>
        <table border=1>
            <tr >
                <th>ユーザーid</th>
                <th>ユーザーネーム</th>
                <th>メールアドレス</th>
                <th>権限</th>
            </tr>
            @foreach($list as $li)
            <tr>
                <td> {{$li->id}} </td>
                <td>  {{$li->name}}</td>
                <td> {{$li->mail}} </td>
                <td> {{$li->role}}</td>
            </tr> 
            @endforeach
        </talbe>
</div>

    </div>
    
</div>
</div>

  <script src="js/modal.js"></script>

</body>
</html"