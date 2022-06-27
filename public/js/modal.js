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

async function expens(id, up, def) {
  await createTableup(up,def);
  document.getElementById("up").style.display ="block";
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

function createTableup(up,def) {
  var inputEle = document.getElementById('up-form');
  var cateEle = document.getElementById('up-cate');
      for(var j = 0; j < def.length;j++){
        var option = document.createElement('option');
        option.value = def[j].id;
        option.innerHTML = def[j].category_name;
        cateEle.appendChild(option); 
        if(up[0].category_id == def[j].id) {
          cateEle.options[j].selected = true;
        }
      }

      var input = document.createElement('input');
      input.type = 'text';
      input.name = 'detail'
      input.value = up[0].detail;
      inputEle.appendChild(input);

      input = document.createElement('input');
      input.type = 'text';
      input.name = 'money';
      input.value = up[0].money;
      inputEle.appendChild(input);

      input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'id';
      input.value = up[0].id;
      inputEle.appendChild(input);
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

function closedisp(){
  var formEle = document.getElementById('up-form');
  var cate = document.getElementById('up-cate');

  while(cate.lastChild){
    cate.removeChild(cate.lastChild);
  }

  var form = formEle.querySelectorAll('input');
  const values = Object.values(form);
  values.map(v => {
      v.remove();
  });

  document.getElementById("up").style.display ="none";
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

function update(id){
  console.log('id',[id]);
  fetch('/update/'+id,{
    method:'GET',
  })
  .then(res => {
    if (!res.ok) { //通信失敗
      console.log('通信失敗');
    }
    return res.json(); //JSONを取り出して次のチェーンへ
  })
  .then(json => {
      if (json.result) { //正常
       expens(id, json.up, json.def);
      } else { //アプリケーションレベルのエラー
        console.log('エラー');
      }
    })
    .catch(error => alert(error.message))
}