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
    <center>
        <h3><a href="?ym={{$prev}}">&lt;</a>{{$html_title}}<a href="?ym={{$next}}">&gt;</a></h3>
    </center>    
        <table class="calendar" border=1>
          
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

    </table>

  </div>
  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>
  <script src="js/modal.js"></script>
</body>

</html>
