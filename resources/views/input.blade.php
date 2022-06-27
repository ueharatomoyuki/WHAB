<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/schedule-style.css">
  <title>家計簿</title>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
    <div class="main">

      <p><a href="/calendar" class="back-btn">マイページへ戻る</a></P>
      @if(!count($exp) == 0)
      <table class="exp" border=1>
        <tr>
          <th class="category">費目</th>
          <th class='deital'>詳細</th>
          <th class="money">金額</th>
        </tr>
    @foreach($exp as $ex)
    <tr>
         <td> {{$ex->category_name}}</td>
         <td> {{$ex->detail}}</td>
         <td> {{$ex->money}}</td>
      <td><a class="btn" onclick="update('{{$ex->id}}')">編集</a></td>
    </tr>
    @endforeach
    @endif
</table>
<x-update />

        <div class="input-item">  
          <label class="input-title">

            {{ $date }}

          </label>
        </div>

        <h3>登録</h3>
        <div class="tab_container">     
        
          <input id="tab1" type="radio" name="tab_item" checked>
          <label class="tab_item" for="tab1">支出</label>

          <input id="tab2" type="radio" name="tab_item">
          <label class="tab_item" for="tab2">収入</label>


          <div class="tab_content" id="tab1_content">
            <div class="tab_content_description">
              <p class="c-txtsp">

          <form class="input-form" action="/insert" method="post"> 
          @csrf     
          
              <input type="hidden" name="date" value="{{ $date }}">

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
                    <td></td>
                    <td>　　　合計　　　</td>
                    <td>　　sum　　</td>
                  </tr>
                </table>
                <button type="submit" >登録</button>
                <p><a href="/category">費目を追加する</a></p>
              </form>
              </p>
              
            </div>
          </div>
          
      <div class="tab_content" id="tab2_content">
            <div class="tab_content_description">
              <p class="c-txtsp">
          <form class="input-form" action="/incomeInsert" method="post"> 
          @csrf      
          
              <input type="hidden" name="date" value="{{ $date }}">

                <table>
                  <tr> 
                    <th>　　　費目　　　</th>
                    <th>　　金額　　</th>
                  </tr>
                  <tr> 
                    <td><input type="text" name="incomeDetail" size=25></td>
                    <td><input type="text" name="incomeMoney" size=25></td>
                  </tr>
                  <tr> 
                    <td>　　　　　　合計</td>
                    <td>　　　　　　sum</td>
                  </tr>
                </table>
                <button type="submit" >登録</button>
              </form> 
              </p>
              
            </div>
          </div>
          
        </div>

    </div>
  </div>

  <script src="/js/modal.js"></script>

</body>
</html>
