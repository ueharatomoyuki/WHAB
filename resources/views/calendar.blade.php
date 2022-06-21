<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/calendar-style.css">
  <title>マイページ</title>
</head>

<body>
  <x-header heading="WHAB" name="Axiz花子" />

<div class="main-parent">
  <div class="main">

  <canvas id="myBarChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  <script>
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'horizontalBar',
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