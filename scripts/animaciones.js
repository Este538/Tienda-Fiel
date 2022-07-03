const imgArray = [
    "../images/citrico_1.webp",
    "../images/citrico_2.webp",
    "../images/citrico_3.jpg",
    "../images/citrico_4.png"
    
    
];

const img = document.getElementById("slide");

let i = 0;

const slideShow = () =>{
    img.src = imgArray[i];
    if(i<imgArray.length - 1){
        i=i+1;
    }else{
        i = 0;
    }
    
}

window.onload = function (){
    setInterval(slideShow, 5000)
};

    
