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


        <form action="category" method="post">

        <div>
        <table>
            <tr >
                <th>費目</th>
                <th>変動費</th>
                <th>固定費</th>
                <th>削除項目</th>
                <th>変動費OR固定費</th>
            </tr>

            @if(isset($default))
                @foreach($default as $de)
                <tr>
                    <td> {{$de->category_name}} </td>
                         <input type="hidden" name='{{$de->id}}' value='{{$de->category_select}}' >
                    <td> <input type="radio" name='{{$de->id}}' value="1" checked>   </td>
                    <td> <input type="radio" name='{{$de->id}}' value="2"  >  </td>
                    <td>  <input type="checkbox" name="delete" >  </td>
                    <td> <select name="cate" class="div-radio">
                         <label><option  value="1" >変動費</option></label>
                         <label><option  value="2" >固定費</option></label>

                        </select>
                    </td>
                    </tr>
                    @endforeach
                @endif
                <tr>
                    <td>追加費目</td>
                    <td>{{$de->id}}</td>
                    <td></td>
                    <td></td>
                </tr>
        </table>
        </div>

                    <select name="expense" class="div-radio">
                      @foreach($default as $de)
                      <label><option  value="{{$de->id}}" >{{$de->category_name}}</option></label>
                      @endforeach
                      </select>

            <button type="submit" class="btn">登録</button>
        </form>

    </div>
    
</div>
</div>

  <script src="js/modal.js"></script>

</body>
</html"