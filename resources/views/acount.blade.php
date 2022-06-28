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

<table border="0">
<tr>
<th>ID</th>
<th>{{$user[0]->id}}</th>
<th></th>
</tr>
<tr>
<th>ユーザーネーム</th>
<th>
  {{$user[0]->name}}</th>
<th>
  <form action="changeUserName" method="get">
        @csrf
  <button type="submit" class="register-btn">変更</button> </form></th>
</tr>
<tr>
<th>パスワード</th>
<th>
  ・・・・・</th>
  <th>
  <form action="changePassword" method="get">
          @csrf
  <button type="submit" class="register-btn">変更</button> </form></th>
</tr>
<tr>
<th>メールアドレス</th>
<th>
  {{$user[0]->mail}}</th>
<th>
  <form action="changeMail" method="get" >
        @csrf
  <button type="submit" class="register-btn">変更</button> </form></th>
</tr>

</table>

      
    </div>

    </div>
</div>

  <script src="js/modal.js"></script>

</body>
</html>
