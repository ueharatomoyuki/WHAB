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

  <div class="main">
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

  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>
  <script src="js/modal.js"></script>
</body>

</html>