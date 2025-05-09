/* Minhas funções */
function clicar(){
    var area = window.document.getElementById('clicar');
    area.innerText = 'clicou';
}
function entrar(){
    var area = window.document.getElementById('entrar');
    area.innerText = 'entrou';
    area.style.background = 'green';
}
function sair(){
    var area = window.document.getElementById('entrar');
    area.innerText = 'saiu';
    area.style.background = 'red';
}

/* Outro método: */
const a = window.document.getElementById('area');

a.addEventListener('click', mouseClicar); // ('reservada', nomeFuncao);
a.addEventListener('mouseenter', mouseEntrar);
a.addEventListener('mouseout', mouseSair);

function mouseClicar(){
    a.innerText = 'Clicou!';
    a.style.background = 'blue';
}
function mouseEntrar(){
    a.innerText = 'Entrou!';
    a.style.background = 'green';
}
function mouseSair(){
    a.innerText = 'Saiu!';
    a.style.background = 'red';
}

/* Somando valores: */
function somar() {
    var tn1 = window.document.getElementById('txtn1');
    var tn2 = window.document.querySelector('input#txtn2'); //mesma coisa
    var res = window.document.getElementById('res');
    var n1 = Number(tn1.value);
    var n2 = Number(tn2.value);
    var soma = n1 + n2;
    
    window.alert(`Somando: ${n1} + ${n2} = ${soma}`);
}