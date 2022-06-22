<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/schedule-style.css">
  <title>支出の費目分類</title>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
  <div class="main">
   
  <p><a href="calendar" class="back-btn">マイページへ戻る</a></p>
    
    <div class="input-form">
        <h2>支出の費目分類</h2>
        <p>支出の費目を変動費か固定費に分類しましょう</p>

        <form action="cumulative" method="post">

        <table>
            <tr >
                <th>費目</th>
                <th>変動費</th>
                <th>固定費</th>
                <th>削除項目</th>
            </tr>
            <tr>
                <td> 食品 </td>
                <td> 〇 </td>
                <td> 〇 </td>
                <td> □ </td>
            </tr>
            <tr>
                <td> 家賃 </td>
                <td> 〇 </td>
                <td> 〇 </td>
                <td> □ </td>
            </tr>
            <tr>
                <td> 日用品 </td>
                <td> 〇 </td>
                <td> 〇 </td>
                <td> □ </td>
            </tr>
            <tr>
                <td> 雑貨 </td>
                <td> 〇 </td>
                <td> 〇 </td>
                <td> □ </td>
            </tr>
        </talbe>

            <button type="submit" class="btn">登録</button>
        </form>

    </div>
    
</div>
</div>

  <script src="js/modal.js"></script>

</body>
</html"