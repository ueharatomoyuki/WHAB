<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>お知らせ閲覧ページ</title>
  <style>
    table {
     width:500px;
     text-align: left;
     border-collapse: collapse;
    }
    th {
     padding: 10px;
     border-bottom: solid 5px #37beb0;
    }

    td {
     padding: 10px;
     border-bottom: solid 1px #37beb0;
    }
  </style>
</head>

<body>
  <x-header heading="WHAB" />
   
  <div class="main-parent">
  <div class="main">
   
  <p><a href="/calendar" class="back-btn">マイページへ戻る</a></p>
<br>

        <h2>お知らせ</h2>


                <div>
        <table >
            <tr >
                <th>日時</th>
                <th>内容</th>
                <th></th>
            </tr>
            @foreach($getMessege as $getMe)

            <tr>
                <td> {{$getMe->date}} </td>
                <td>  {{$getMe->messege}}</td>
                <td>  </td>
            </tr> 

            @endforeach
        </talbe>
      </div>

       

    
</div>
</div>

  <script src="js/modal.js"></script>

</body>
</html>
