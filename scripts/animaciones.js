//slider
const imgArray = [
    "./images/almacenBg.gif",
    "./images/frutasb2.gif",
    "./images/frutasb3.gif",
];

const textArray =[
    "Somos lideres en el Sureste de Mexico ",
    "Un aliado para tu negocio ",
    "Mas de 20 toneladas de fruta por dia",
];



const hero = document.getElementById("mine-hero");
const texto = document.getElementById("texto-slider");
let i = 0;

const slideShow = () =>{
    hero.style.backgroundImage  = "url('"+imgArray[i]+"')";
    texto.innerHTML = textArray[i];
    if(i<imgArray.length - 1){
        i=i+1;
    }else{
        i = 0;
    }
    
}

window.onload = function (){
    setInterval(slideShow, 7000)
};

//menu desplegable
const navToggle = document.querySelector('.btn-bars');
const navMenu = document.querySelector('.container-nav');

navToggle.addEventListener("click", () => {
    let height = 0;
    navMenu.classList.toggle("nav-menu_visible");
    if(navMenu.clientHeight == "0"){
        height = navMenu.scrollHeight;
    }

    navMenu.style.height = '${height}px';

});



