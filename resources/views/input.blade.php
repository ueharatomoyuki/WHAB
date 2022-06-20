<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>スケジュール追加</title>
</head>

<body>
  <x-header heading="スケジュール追加" name="Axiz花子" />

  <div class="main-input">
    <p> 
    <a href="calendar" class="btn">マイページへ戻る</a>
    </P>

    <form class="input-form" action="calendar">
      <div class="input-item">
        <label class="input-title">
          <center>
           6/15 ※カレンダーより日付データを得る
          </center>
        </label>
      </div>


      <div><p>支出</p>
        <table>
          <tr> 
            <th>　費目　　</th>
            <th>　　　詳細　　　</th>
            <th>　　金額　　</th>
          </tr>
          <tr> 
            <td>
              <select class="div-radio" >
                <label><option value="1">食品</option></label>
                <label><option value="2">日用品</option></label>
                <label><option value="3">雑貨</option></label>
                <label><option value="4">医療費</option></label>
                <label><option value="5">(追加)</option></label>
              </select>
            </td>
            <td><input type="text" name="expense" size=20></td>
            <td><input type="text" name="expense-money" size=20></td>
          </tr>
          <tr> 
            <td>
              <select class="div-radio">
                <label><option value="1">食品</option></label>
                <label><option value="2">日用品</option></label>
                <label><option value="3">雑貨</option></label>
                <label><option value="4">医療費</option></label>
                <label><option value="5">(追加)</option></label>
              </select>
            </td>
            <td><input type="text" name="expense" size=20></td>
            <td><input type="text" name="expense-money" size=20></td>
          </tr>
          <tr> 
            <td>
              <select class="div-radio">
                <label><option value="1">食品</option></label>
                <label><option value="2">日用品</option></label>
                <label><option value="3">雑貨</option></label>
                <label><option value="4">医療費</option></label>
                <label><option value="5">(追加)</option></label>
              </select>
            </td>
            <td><input type="text" name="expense" size=20></td>
            <td><input type="text" name="expense-money" size=20></td>
          </tr>
          <tr> 
            <td>
              <select class="div-radio">
                <label><option value="1">食品</option></label>
                <label><option value="2">日用品</option></label>
                <label><option value="3">雑貨</option></label>
                <label><option value="4">医療費</option></label>
                <label><option value="5">(追加)</option></label>
              </select>
            </td>
            <td><input type="text" name="expense" size=20></td>
            <td><input type="text" name="expense-money" size=20></td>
          </tr>
          <tr> 
            <td>　</td>
            <td>　　　合計　　　</td>
            <td>　　sum　　</td>
          </tr>
        </table>
      </div>

      <br>


      <div><p>収入</p>
        <table>
          <tr> 
            <th>　　　費目　　　</th>
            <th>　　金額　　</th>
          </tr>
          <tr> 
            <td><input type="text" name="income" size=30></td>
            <td><input type="text" name="income-money" size=30></td>
          </tr>
          <tr> 
            <td><input type="text" name="income" size=30></td>
            <td><input type="text" name="income-money" size=30></td>
          </tr>
          <tr> 
            <td><input type="text" name="income" size=30></td>
            <td><input type="text" name="income-money" size=30></td>
          </tr>
          <tr> 
            <td><input type="text" name="income" size=30></td>
            <td><input type="text" name="income-money" size=30></td>
          </tr>
          <tr> 
            <td>　　　　　　合計</td>
            <td>　　　　　　sum</td>
          </tr>
        </table>
      </div>


      <!--<div class="input-item">
        <label class="input-title">タイトル</label>
        <input name="title" type="text">
      </div>
      <div class="input-item">
        <label class="input-title">分類</label>
        <select class="div-radio">
          <label><option value="1">重要</option></label>
          <label><option value="2">仕事</option></label>
          <label><option value="3">プライベート</option></label>
          <label><option value="4">メモ</option></label>
        </select>
      </div>
      <div class="input-item">
        <label class="input-title">場所</label>
        <input name="place" type="text">
      </div>
      <div class="input-item">
        <label class="input-title" for="body">内容</label>
        <textarea rows="5" id="body"></textarea>
      </div>
-->
      <div>
        <center><br>
          <button type="button" onclick="openModal()">登録</button>
          <x-modal mode="登録" />
        </center>
      </div>
    </form>

  </div>

  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>

  <script src="js/modal.js"></script>
</body>
</html>
