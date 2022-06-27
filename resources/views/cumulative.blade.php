<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/schedule-style.css">
  <title>累計</title>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
  <div class="main">
   
  <p><a href="calendar" class="back-btn">マイページへ戻る</a></p>
    
    <div class="input-form">
        <h2>累計</h2>
        <p>検索したい内容と期間を選択してください<br>グラフで見ることが出来ます</p>

        <form action='/cumulative' method="post">
          @csrf
            費目選択
                      <select name="cate" class="div-radio">
                      @foreach($default as $de)
                      <label><option  value="{{$de->id}}" >{{$de->category_name}}</option></label>
                      @endforeach
                      </select><br>
            
            開始年月：<input type="month" name="date" min="{{ $startDate }}" max="{{ $endDate }}"><br>
            終了年月：<input type="month" name="date" min="{{ $startDate }}" max="{{ $endDate }}"><br><br>

            <button type="submit" class="index-btn">検索</button>
        </form>

        <h1>棒グラフ</h1>
  <canvas id="myBarChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

 <!--縦棒グラフ(動きなし)-->
  <script>
  var ctx = document.getElementById("myBarChart");

  @foreach ($result1 as $val)
    @foreach($val as $v)
      let price = {{ $v }}
      @endforeach
    @endforeach

    @foreach ($result2 as $val2)
    @foreach($val2 as $d)
      let date = {{ $d }}
      @endforeach
    @endforeach

  let totals = [
    {
      date: date,
      total: price
    },
  ];

  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: totals.map(total => total['date']),//["2022-06"などの日付が入る]
      datasets: [
        {
          label: '',//optionsのlegendの display: falseでラベル非表示、label:を消すとエラーで出力されなくなる
          data: totals.map(date => date['total']),//[10円などの金額が入る]
          backgroundColor: "rgba(219,39,91,0.5)"
        },
      ]
    },
    options: {
      legend: {//凡例設定
                display: false//表示設定
              },
      title: {
        display: true,
        text: '検索した費目名を出したい'
      },
      scales: {
        yAxes: [{
          ticks: {
            suggestedMax: 100,
            suggestedMin: 0,
            // stepSize: 20,
            callback: function(value, index, values){
              return  value 
            }
          }
        }]
      },
    }
  });
  </script>


    </div>
    
 </div>
 </div>

  <script src="js/modal.js"></script>

  <table>
    <thead>
      <tr>
        <th>累計</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($result1 as $val)
    @foreach($val as $v)
      <tr>
        <td>{{ $v }}</td>
      </tr>
      @endforeach
    @endforeach
    </tbody>
</table>


 </body>
 </html"

        
          