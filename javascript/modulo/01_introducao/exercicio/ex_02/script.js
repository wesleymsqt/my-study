function carregar() {
    var msg = window.document.getElementById('msg');
    var img = window.document.getElementById('imagem');
    var data = new Date();
    // var hora = data.getHours();
    var hora = 19;

    msg.innerHTML = `Agora são ${hora} horas.`;
    
    if (hora >= 0 && hora < 12) {
        img.src = '../../../images/fotoManha.jpg';
        document.body.style.background = '#b2ccdc';
    } else if (hora >= 12 && hora < 18) {
        img.src = '../../../images/fotoTarde.jpg';
        document.body.style.background = '#bda16b';
    } else {
        img.src = '../../../images/fotoNoite.jpg';
        document.body.style.background = '#fe9431';
    }
}