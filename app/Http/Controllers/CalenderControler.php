<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalenderControler extends Controller
{
    public function turn() 
    {
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
            $week .= '<td class="today">' . $day."<a href=input/$html_title$day class='btn'>";//今日の場合はclassにtodayをつける
        } else {
            $week .= "<td>". $day ."<a href=input/$html_title$day class='btn'>";
        }
        $week .= '</a> </td>';
        
        if($youbi % 7 == 6 || $day == $day_count){//週終わり、月終わりの場合
            //%は余りを求める、||はまたは
            //土曜日を取得
            
            if($day == $day_count){//月の最終日、空セルを追加
                $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
            }
            
            $weeks[] = '<tr>' . $week . '</tr>'; //weeks配列にtrと$weekを追加
            
            $week = '';//weekをリセット
        }
        }
        return view('calendar')->with('weeks', $weeks)->with('prev',$prev)->with('next',$next)->with('html_title',$html_title);
    }
}