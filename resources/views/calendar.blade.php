<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/calendar-style.css">
  <title>マイページ</title>
</head>

<body>
  <x-header heading="WHAB" />

  <div class="main-parent">
    <div class="main">
  
      <a href="cumulative" class="back-btn">累計</a>
      <a href="category" class="back-btn">支出の分類振り分け</a>
  
      <!-- <h1>収支差額グラフ</h1> -->
      <div class="chart-container" style="position: relative; height:50vh; width:50vw">
        <canvas id="myBarChart"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
        <script>

        //  横棒グラフ(動きあり）
            var ctx = document.getElementById("myBarChart");

              //収入の値が入る変数
              @if(!empty($income))
                @foreach($income as $in)
                  @foreach($in as $i)
                    let income =  {{ $i }}
                  @endforeach
                @endforeach
              @else 
                let income =  0
              @endif

              //6/23：固定費を支出合計としておきます（支出の値が入る変数）
              @if(!empty($fixedcost))
                @foreach($fixedcost as $in)
                  @foreach($in as $i)
                    let fixedcost =  {{ $i }}
                  @endforeach
                @endforeach
              @else 
                let fixedcost =  0
              @endif

              //変動費の値が入る変数
              let variablecost = 0;

              //支出=(固定費＋変動費)
              let expense = fixedcost + variablecost;
              
              //差額=(収入-支出)
              let difference = income - expense;
              
              //配列に入る収入の変数
              let labelIncome = '収入：' + income;
              
              //配列に入る支出の変数
              let labelExpense = '支出：' + expense;

              //配列に入る差額の変数
              let labelDifference = '差額：' + difference;
              
              var myBarChart = new Chart(ctx, { //オブジェクト生成
              type: 'horizontalBar',//横棒を指定するコード

            data: {
              labels: [labelIncome, labelExpense, labelDifference],//配列でグラフの左側に文字を表示させるために必要
              datasets: [
                    {
                      label:'収入',
                      data: [income, 0, 0],//収入と差額をそれぞれ表示させる為の配列
                      backgroundColor: ["rgba(219,39,91,0.5)","rgba(219,39,250,0.5)", "rgba(219,39,91,2.0)"]
                    },
                    {
                      label:'固定費',
                      data: [0, fixedcost, 0],//固定費を表示させる為の配列
                      backgroundColor: ["rgba(219,39,91,0.5)","rgba(219,39,250,0.5)", "rgba(219,39,91,2.0)"]
                    },
                    {
                      label:'変動費',
                      data: [0, variablecost, 0],//変動費を表示させる為の配列
                      backgroundColor: ["rgba(219,39,91,0.5)","rgba(219,39,100,0.5)", "rgba(219,39,91,2.0)"]
                    },
                    {
                      label:'支出合計額',
                      data: [0, 0, expense],//差額を表示させる為の配列
                      backgroundColor: ["rgba(219,39,91,0.5)","white", "rgba(0,0,0,0)"]
                    },
                    {
                      label:'差額(残高)',
                      data: [0, 0, difference],//差額を表示させる為の配列
                      backgroundColor: ["rgba(219,39,91,0.5)","pink", "rgba(50,200,200,0.5)"]
                    }
                    
                  ]
              },
            options: {
              legend: {//凡例設定
                display: false//表示設定
              },
              title: {
                display: true,
                text: "{{$html_title}}"//カレンダーと連動している
              },
              tooltips:{
                filter: function (item, data) {
                // 値が 0 より大きいものだけを表示
                return (item.xLabel > 0);//収入と支出と差額のツールチップを干渉させずに独立で表示させる処理
                }
              },
              scales: {
              xAxes: [{
              stacked:true,//積み上げにする処理
              ticks: {
                // suggestedMax: 100000,
                // suggestedMin: 0,
                //stepSize: 100,
              callback: function(value, index, values){
                return  value 
                }
              }
              }],
              yAxes:[{
                stacked:true,//積み上げにする処理
              }] 
              },
            }
          });
        </script>
      </div>

      <center>
        <h3><a href="?ym={{$prev}}">&lt;</a>{{$html_title}}<a href="?ym={{$next}}">&gt;</a></h3>
    </center>    
    <table class="calendar" border=1>
      <form action="input" method="get" name="list">
        <tr>
            <th calss="weekend">日</th>
            <th calss="weekday">月</th>
            <th calss="weekday">火</th>
            <th calss="weekday">水</th>
            <th calss="weekday">木</th>
            <th calss="weekday">金</th>
            <th calss="saturday">土</th>
        </tr>
        
        @foreach ($weeks as $week)
          {!!$week!!}
        @endforeach
            
      </form>
    </table>

    </div>
  </div>

  <x-exp />

<center>
 <footer>
  <small>
  お問い合わせはこちら
  <!-- <a href=env("hello@exmp.com")>WHAB管理人</a> -->
  <a href="mailto:' ."hello@exmp.com" .'?subject=このまま送信してください&body='.$bodyBox.'">WHAB管理人</a>
  </small>
 </footer>
</center>

  <script src="js/modal.js"></script>
</body>

</html>