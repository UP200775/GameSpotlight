const altura = document.body.scrollHeight - window.innerHeight;
const fondo = document.getElementById('fondo');
const fondito = document.getElementById('imag')



window.onscroll = () =>{
    const anchofondo = (window.pageYOffset / altura) * 300;
    if (anchofondo <= 150){
        fondo.style.width = anchofondo + '%';
        fondito.style.height = anchofondo + '%';
    }
   

}


