window.addEventListener("load", function(){
    new Glider(document.querySelector(".slider__contenedor"),{
        slidesToShow: 4, 
        slidesToScroll: 4,
        dots: ".slider_indicador",
        arrows: {
            prev: ".slider_anterior",
            next: ".slider_siguiente"
        }
    });
});