<<<<<<< HEAD
=======
<?php
//タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

//前月・次月リンクが選択された場合は、GETパラメーターから年月を取得
if(isset($_GET['ym'])){ 
  $ym = $_GET['ym'];
}else{
  //今月の年月を表示
  $ym = date('Y-m');
}

//タイムスタンプ（どの時刻を基準にするか）を作成し、フォーマットをチェックする
//strtotime('Y-m-01')
$timestamp = strtotime($ym . '-01'); 
if($timestamp === false){//エラー対策として形式チェックを追加
  //falseが返ってきた時は、現在の年月・タイムスタンプを取得
  $ym = date('Y-m');
  $timestamp = strtotime($ym . '-01');
}

//今月の日付　フォーマット　例）2020-10-2
$today = date('Y-m-j');

//カレンダーのタイトルを作成　例）2020年10月
$html_title = date('Y年n月', $timestamp);//date(表示する内容,基準)

//前月・次月の年月を取得
//strtotime(,基準)
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

//該当月の日数を取得
$day_count = date('t', $timestamp);

//１日が何曜日か
$youbi = date('w', $timestamp);

//カレンダー作成の準備
$weeks = [];
$week = '';

//第１週目：空のセルを追加
//str_repeat(文字列, 反復回数)
$week .= str_repeat('<td></td>', $youbi);

for($day = 1; $day <= $day_count; $day++, $youbi++){
  
  $date = $ym . '-' . $day; //2020-00-00
  
  if($today == $date){
      
      $week .= '<td class="today">' . $day;//今日の場合はclassにtodayをつける
  } else {
      $week .= '<td>' . $day;
  }
  $week .= '</td>';
  
  if($youbi % 7 == 6 || $day == $day_count){//週終わり、月終わりの場合
      //%は余りを求める、||はまたは
      //土曜日を取得
      
      if($day == $day_count){//月の最終日、空セルを追加
          $week .= str_repeat('<td calss="Saturday"></td>', 6 - ($youbi % 7));
      }
      
      $weeks[] = '<tr>' . $week . '</tr>'; //weeks配列にtrと$weekを追加
      
      $week = '';//weekをリセット
  }
}

?>


>>>>>>> 35f0a03e177bc2d69f5b4006ebfb729cb2e5633b
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
<<<<<<< HEAD
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
=======
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a><?php echo $html_title; ?><a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
<<<<<<< HEAD
        <table class="table table-bordered">
          
=======
    </center>
        <table class="calendar" border=1>
>>>>>>> 036cb39b0455f1cee67d5a88850da0f4928bc1ee
            <tr>
                <th class="weekend">日</th>
                <th class="weekday">月</th>
                <th class="weekday">火</th>
                <th class="weekday">水</th>
                <th class="weekday">木</th>
                <th class="weekday">金</th>
                <th class="Saturday">土</th>
>>>>>>> 35f0a03e177bc2d69f5b4006ebfb729cb2e5633b
            </tr>
<<<<<<< HEAD
             <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
          </form>
=======
             
                @foreach ($weeks as $week)
                {!!$week!!}
                @endforeach

>>>>>>> 036cb39b0455f1cee67d5a88850da0f4928bc1ee
    </table>

  </div>
  
  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>
  <script src="js/modal.js"></script>
</body>

</html>
