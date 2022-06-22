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

        <form>
            費目選択
            <select name="category" class="div-radio">
                     
                      <label><option value="1" >食品</option></label>
                      <label><option value="2" >家賃</option></label>

            </select><br>
            期間
            <select name="start" class="div-radio">
                     
                      <label><option value="○○年○月" >○○年○月</option></label>
                      <label><option value="○○年○月" >○○年○月</option></label>

            </select><br>
            <select name="end" class="div-radio">
                     
                      <label><option value="○○年○月" >○○年○月</option></label>
                      <label><option value="○○年○月" >○○年○月</option></label>
           </select><br>
            <button type="submit" class="index-btn">検索</button>
        </form>

        <h1>棒グラフ</h1>
  <canvas id="myBarChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

<!--縦棒グラフ(動きなし)-->
  <script>
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日'],
      datasets: [
        {
          label: 'A店 来客数',
          data: [62, 65, 93, 85, 51, 66, 47],
          backgroundColor: "rgba(219,39,91,0.5)"
        },{
          label: 'B店 来客数',
          data: [55, 45, 73, 75, 41, 45, 58],
          backgroundColor: "rgba(130,201,169,0.5)"
        },{
          label: 'C店 来客数',
          data: [33, 45, 62, 55, 31, 45, 38],
          backgroundColor: "rgba(255,183,76,0.5)"
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
              return  value +  '人'
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

</body>
</html"