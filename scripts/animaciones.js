const imgArray = [
    "/images/Catálogo.png",
    "/images/Desktop - 1.png"
    
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

    
