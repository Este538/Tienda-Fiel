const imgArray = [
    "../images/almacenBg.gif",
    "../images/frutasb2.gif",
    "../images/frutasb3.gif",
];

const hero = document.getElementById("mine-hero");
let i = 0;

const slideShow = () =>{
    hero.style.backgroundImage  = "url('"+imgArray[i]+"')";
    if(i<imgArray.length - 1){
        i=i+1;
    }else{
        i = 0;
    }
    
}

window.onload = function (){
    setInterval(slideShow, 5000)
};


const navToggle = document.querySelector('.btn-bars');
const navMenu = document.querySelector('.container-nav');

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("nav-menu_visible");
});
