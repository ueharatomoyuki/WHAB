<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>アカウント情報</title>
</head>

<body>
  <x-header heading="WHAB" />

  <div class="main-parent">
    <div class="main">
    <p><a href="calendar" class="back-btn">マイページへ戻る</a></P>
 
    <div class="input-form">
    <h2>アカウント情報</h2><br>

<table>
<tr>
<th>ID</th>
<th><input type="text" size=30></th>
<th></th>
</tr>
<tr>
<th>パスワード</th>
<th><form action="changePassword" method="post">
          @csrf
            <input type="password" name="password" size=30></th>
        <th><button type="submit" class="btn">変更</button> </form></th>
</tr>
<tr>
<th>ユーザーネーム</th>
<th><form action="changeUserName" method="post">
        @csrf
            <input type="text" name="user_name" size=30></th>
<th><button type="submit" class="btn">変更</button> </form></th>
</tr>
<tr>
<th>メールアドレス</th>
<th><form action="changeMail" method="post">
        @csrf
            <input type="text" name="mail" size=30></th>
<th><button type="submit" class="btn">変更</button> </form></th>
</tr>

</table>
      
    </div>

    </div>
</div>

  <script src="js/modal.js"></script>

</body>
</html>
