function openModal() {
    document.getElementById("modal").style.display ="block";
    document.getElementById("fadeLayer").style.display ="block";
}

function closeModal() {
    document.getElementById("modal").style.display ="none";
    document.getElementById("fadeLayer").style.display ="none";
}

async function openexpenses(date, exp) {
    await createTable(exp);
    document.getElementById('da').textContent = date;
    document.getElementById('aaa').href ='/input/'+ date;
    document.getElementById("exp").style.display ="block";
    document.getElementById("fadeLayer").style.display ="block";
}

function createTable(exp) {
    var tableEle = document.getElementById('exp-table');
    for (var i = 0; i<exp.length;i++){
        var tr = document.createElement('tr');
        var keys = Object.keys(exp[i]);
        for(var j = 0; j<Object.keys(exp[i]).length; j++) {
            var td = document.createElement('td');
            td.innerHTML = exp[i][keys[j]];
            tr.appendChild(td);
        }
        tableEle.appendChild(tr);
    }
}

function closeModal2() {
    var tableEle = document.getElementById('exp-table');
    var tds = tableEle.querySelectorAll("tr td");
    const values = Object.values(tds);
    values.map(v => {
        v.remove();
    });
    document.getElementById("exp").style.display ="none";
    document.getElementById("fadeLayer").style.display ="none";
}

function sample(date) {
    fetch('/expnses/' + date, {
      method: 'GET',
    })
    .then(res => {
      if (!res.ok) { //通信失敗
        console.log('通信失敗');
      }
      return res.json(); //JSONを取り出して次のチェーンへ
    })
    .then(json => {
        if (json.result) { //正常
         openexpenses(date, json.expenses);
        } else { //アプリケーションレベルのエラー
          console.log('エラー');
        }
      })
      .catch(error => alert(error.message))
}