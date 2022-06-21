<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>家計簿</title>
</head>

<body>
  <x-header heading="家計簿" name="Axiz花子" />
   
  <div class="main-parent">
    <div class="main">

      <p><a href="calendar" class="btn">マイページへ戻る</a></P>
 
      <form class="input-form" action="/insert" method="post">
      @csrf
        <div class="input-item">  
          <label class="input-title">
            {{ $html_title }}{{ $day }}
          </label>
        </div>

        <div class="tab_container">

          <input type="hidden" name="html_title" value="{{ $html_title }}">
          <input type="hidden" name="day" value="{{ $day }}">
  
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
                      <select name="expense" class="div-radio">
                      @foreach($default as $de)
                      <label><option  value="{{$de->id}}" >{{$de->category_name}}</option></label>
                      @endforeach
                      </select>
                    </td>
                    <td><input type="text" name="expenseDetail" size=20></td>
                    <td><input type="text" name="expenseMoney" size=20></td>
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
            <button type="submit" onclick="openModal()">登録</button>
            <x-modal mode="登録" />
          </center>
        </div>
      </form>
    </div>
  </div>

  <script src="js/modal.js"></script>

</body>
</html>
