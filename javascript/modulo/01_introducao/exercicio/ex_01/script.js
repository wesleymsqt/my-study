// console.log('Hello, console!');

var vel = 50;
var txtv = document.getElementById('txtvel');

function calcular() {
    var vel = Number(txtv.value);
    var res = window.document.querySelector('div#res');
    res.innerHTML = `<p>Sua velocidade é: <strong> ${vel}km/h </strong></p>`;
    if (vel > 60) {
        res.innerHTML += `<p>Você esta MULTADO!</p>`
    }
    res.innerHTML += `<p>Dirija sempre com cinto!</p>`;
    // window.alert(`Sua velocidade atual é: ${vel}`);
}

if (vel > 60) {
    console.log('Velocidade maior que 60');
} else {
    console.log('Velocidade menor que 60!');
}