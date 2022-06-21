<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/calendar-style.css">
  <title>マイページ</title>
</head>

<body>
  <x-header heading="マイページ" name="Axiz花子" />

  

<!--  <a href="/input">収支登録画面へ</a>-->

<div class="main-parent">
  <div class="main-calendar">

  <canvas id="myBarChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  <script>
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'horizontalBar',
    // data: {
    //   labels: ['8月1日', '8月2日', '8月3日'],
    //   datasets: [
    //     {
    //       label: 'A店 来客数',
    //       data: [62, 65, 93, 85, 51, 66, 47],
    //       backgroundColor: "rgba(219,39,91,0.5)"
    //      },{
    //        label: 'B店 来客数',
    //        data: [55, 45, 73, 75, 41, 45, 58],
    //        backgroundColor: "rgba(130,201,169,0.5)"
    //      },{
    //        label: 'C店 来客数',
    //        data: [33, 45, 62, 55, 31, 45, 38],
    //        backgroundColor: "rgba(255,183,76,0.5)"
    //      }
    //   ]
    // },
    data: {
            labels:  ["収入", "支出", "差額"],
            datasets: [
                {
                    data: [10, 20, 5 ],
                    backgroundColor: ["red", "yellow", "green"]
                }
            ]
        },
    options: {
      title: {
        display: true,
        text: '支店別 来客数'
      },
      scales: {
        yAxes: [{
          ticks: {
            suggestedMax: 100,
            suggestedMin: 0,
            stepSize: 20,
            callback: function(value, index, values){
              return  value 
            }
          }
        }]
      },
    }
  });

</script>
    <h3><a href="?ym={{$prev}}">&lt;</a>{{$html_title}}<a href="?ym={{$next}}">&gt;</a></h3>
    <table class="calendar" border=1>
    <form action="input" method="get" name="list">
      <tr>
        <th class="weekend">日</th>
        <th class="weekday">月</th>
        <th class="weekday">火</th>
        <th class="weekday">水</th>
        <th class="weekday">木</th>
        <th class="weekday">金</th>
        <th class="Saturday">土</th>
      </tr>

      @foreach ($weeks as $week)
      {!!$week!!}
      @endforeach
    </form>
    </table>

  </div>
</div>

<!--  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>-->
  <script src="js/modal.js"></script>
</body>

</html>