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


    <form action="cateinsert" method="post">
        @csrf
        <div>
        <table id='table' border="1">
            <tr >
                <th>費目</th>
                <th>変動費</th>
                <th>固定費</th>
                <th>削除項目</th>
            </tr>

            @if(isset($default))

                <input type="hidden" name='count' value='{{$count[0]->cou}}' id="cou">

                @for($i=0;$i<=$count[0]->cou;$i++)
                <tr >
                    <td> {{$default[$i]->category_name}} 
                         <input type="hidden" name='id[{{$default[$i]->id}}]' value='{{$default[$i]->id}}' >
                         <input type="hidden" name='category_name[{{$i}}]' value='{{$default[$i]->category_name}}' >
                         </td>
                        @if($default[$i]->category_select === 1 )
                        <td>  <input type="radio" name='category_select[{{$i}}]' value="1" checked>  </td>   
                        <td>  <input type="radio" name='category_select[{{$i}}]' value="2">  </td>
                        @else 
                        <td>  <input type="radio" name='category_select[{{$i}}]' value="1">  </td>
                        <td>  <input type="radio" name='category_select[{{$i}}]' value="2" checked >  </td>
                        @endif
                    
                    <td> <input type="checkbox" name="delete[{{$i}}]">  </td>
                    </tr>
                    @endfor
                @endif
            <tr>
               <script>
                function coladd() {
                    var table = document.getElementById("table");
                    var count = document.getElementById("cou"); //Id="cout"のタブ？をcaountに代入
                    var cou = Number(count.value) + 1; //Number関数を使って、count.valueの値に1を代入
                    //count.value = cou; //count.value に cou　のデータを入れて　inputタブのvalue値を更新
                    var id = document.getElementById("id"); //Id="cout"のタブ？をcaountに代入
                    // var cou = Number(count.value) + 1; //Number関数を使って、count.valueの値に1を代入
                    // count.value = cou; //count.value に cou　のデータを入れて　inputタブのvalue値を更新
                    // 行を行末に追加
                    var row = table.insertRow(-1);
                    //td分追加
                    var cell1 = row.insertCell(-1);
                    var cell2 = row.insertCell(-1);
                    var cell3 = row.insertCell(-1);
                    var cell4 = row.insertCell(-1);

                    // セルの内容入力
                    cell1.innerHTML = '<input type="text" name= "category_name[' + cou + ']" placeholder="費目追加"> <input type="hidden" name="id[' + cou + ']" "value=' + id + ">";
                    cell2.innerHTML = '<input type="radio" name="category_select[' + cou + ']" value=1 checked>';
                    cell3.innerHTML = '<input type="radio" name="category_select[' + cou + ']" value=2>';
                    // cell4.innerHTML = '<input type="checkbox" name="delete">';
                    cell4.innerHTML = '<input type="button" value=この行を削除 id="coladd" onclick="coldel(this)">';
                }
                function coldel(obj) {
                    // 削除ボタンを押下された行を取得
                    tr = obj.parentNode.parentNode;
                    // trのインデックスを取得して行を削除する
                    tr.parentNode.deleteRow(tr.sectionRowIndex);
                }
                </script>

            </tr>
        </table>
    </div>

            <!-- <button type="submit" class="btn">削除</button>
            </form> -->

        <button type="submit" class="btn">登録</button>
        <!-- <button type="submit" class="btn">削除</button> -->

    </form> 

    <input type="button" value="行を追加" id="coladd" onclick="coladd()"> 

 
        
    </div>
</div>
</div>

  <script src="js/modal.js"></script>

</body>
</html>