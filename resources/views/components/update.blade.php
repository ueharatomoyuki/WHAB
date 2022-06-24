<div>
    <div id="up">
    <form class="input-form" action="/endUpdate" method="post">
        @csrf
    <div id = "up-form">
        <select name="cate" id="up-cate">
        </select>


    </div>
        <button type="submit" class="modal_btn">更新</buttom>
    </form>
        <button type="button" onclick="closedisp()" class="modal_btn">戻る</button>
    </div>
    <div id="fadeLayer"></div>
</div>