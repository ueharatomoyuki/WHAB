<?php 
// session_start();
// $date = $_SESSION['date'];
?>
<div>
    <div id="exp">
        <p id="da"></p>
        <table id="exp-table" border=1>
            <tr>
                <th class="category">費目</th>
                <th class='deital'>詳細</th>
                <th class="money">金額</th>
            </tr>
        </table>
        <a href=input/ class="modal_btn" id="aaa">編集</a>
        <button type="button" onclick="closeModal2()" class="modal_btn">戻る</button>
    </div>
    <div id="fadeLayer"></div>
</div>