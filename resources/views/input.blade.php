<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>収支登録</title>
</head>

<body>
  <x-header heading="収支登録" name="Axiz花子" />

  <div class="input-parent">
    <div class="main-input">

      <p><a href="calendar" class="btn">マイページへ戻る</a></P>

      <form class="input-form" action="calendar">
      {{ csrf_field() }}

        <div class="input-item">  
          <label class="input-title">
            {{$html_title}}{{$day}}日
          </label>
        </div>

        <div class="tab_container">
  
          <input id="tab1" type="radio" name="tab_item" checked>
          <label class="tab_item" for="tab1">支出</label>
          <input id="tab2" type="radio" name="tab_item">
          <label class="tab_item" for="tab2">収入</label>

          <div class="tab_content" id="tab1_content">
            <div class="tab_content_description">
              <p class="c-txtsp">
                <table>
                  <tr> 
                    <th>　費目　　</th>
                    <th>　　　詳細　　　</th>
                    <th>　　金額　　</th>
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
              </p>
            </div>
          </div>

          <div class="tab_content" id="tab2_content">
            <div class="tab_content_description">
              <p class="c-txtsp">
                <table>
                  <tr> 
                    <th>　　　費目　　　</th>
                    <th>　　金額　　</th>
                  </tr>
                  <tr> 
                    <td><input type="text" name="income" size=25></td>
                    <td><input type="text" name="income-money" size=25></td>
                  </tr>
                  <tr> 
                    <td>　　　　　　合計</td>
                    <td>　　　　　　sum</td>
                  </tr>
                </table>
              </p>
            </div>
          </div>
        </div>

        <div>
          <center><br>
            <button type="button" onclick="openModal()">登録</button>
            <x-modal mode="登録" />
          </center>
        </div>
      </form>
    </div>
  </div>

  <script src="js/modal.js"></script>

</body>
</html>
