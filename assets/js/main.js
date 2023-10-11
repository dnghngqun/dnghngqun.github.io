function result(num){
    document.getElementById('show').value += num;
    return num;
}

function solve(){
    let x = document.getElementById('show').value;
    let y = eval(x);
    // hàm eval thực hiện phép tính cho sẵn
    document.getElementById('show').value = y;
}

function clearAll(){
    document.getElementById('show').value = '';
}

function result2(num2){
    let x = document.getElementById('show');
    let y = x.value / 100;
    document.getElementById('show').value = y;
}