<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>管理者お知らせ発信ページ</title>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
  <div class="main">
   
  <p><a href="admin" class="back-btn">管理者専用へ戻る</a></p>
    
    <div class="input-form">
        <h2>お知らせ発信</h2>

<form action="infor" method="post">
  @csrf
        <h3><label>発信内容</label></h3>
            <textarea rows="10" cols="25" name="informessege"></textarea>

      <div>
          <center><br>
            <button type="button" class="register-btn" onclick="openModal()">送信</button>
            <x-modal mode="送信" />
          </center>
      </div>
</form>
    </div>
    
</div>
</div>

  <script src="js/modal.js"></script>

</body>
</html>
