const form = document.querySelector(".formulario-contacto"),
correcto = document.querySelector(".mensaje-correcto"),
incorrecto = document.querySelector(".mensaje-incorrecto"),
bton2 = document.querySelector(".crear-doc"),
bton= document.querySelector(".btn-enviar");

    var usuario= /^[a-zA-Z0-9\_\-]{4,16}$/; // Letras, numeros, guion y guion_bajo
    var nombreU= /^[a-zA-ZÀ-ÿ\s]{1,40}$/; // Letras y espacios, pueden llevar acentos.
	var password= /^.{4,12}$/; // 4 a 12 digitos.
	var correo= /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
	var telefono= /^\d{10,14}$/; // 10 a 14 numeros.

//form.onsubmit = (e)=>{
  //  e.preventDefault();
//}

bton.onclick = ()=>{
    /*alert("mundo");
    if(form.nombre.value == ""){
        form.nombre.className="error";
        correcto.style.display = "block";
    }
}*/

/*function validar(form){*/
    var error=0;

    
    if(form.nombre.value == "" || (nombreU.test(form.nombre.value))==false){
        form.nombre.className="error";
        correcto.style.display = "none";
        incorrecto.style.display = "block";
        error=1;   
    }else{
        form.nombre.className="correcto";
    }

    if(form.Correo.value == "" || (correo.test(form.Correo.value))==false){
        form.Correo.className="error";
        correcto.style.display = "none";
        incorrecto.style.display = "block";
        error=1;   
    }else{
        form.Correo.className="correcto";
    }

    if(form.telefono.value == "" || (telefono.test(form.telefono.value))==false){
        form.telefono.className="error";
        correcto.style.display = "none";
        incorrecto.style.display = "block";
        error=1;   
    }else{
        form.telefono.className="correcto";
    }

    if(form.ciudad.value == "" || (nombreU.test(form.ciudad.value))==false){
        form.ciudad.className="error";
        correcto.style.display = "none";
        incorrecto.style.display = "block";
        error=1;   
    }else{
        form.ciudad.className="correcto";
    }
    
    if(form.estado.value == "" || (nombreU.test(form.estado.value))==false){
        form.estado.className="error";
        correcto.style.display = "none";
        incorrecto.style.display = "block";
        error=1;   
    }else{
        form.estado.className="correcto";
    }

    if(form.mensaje.value == ""){
        form.mensaje.className="error";
        correcto.style.display = "none";
        incorrecto.style.display = "block";
        error=1;   
    }else{
        form.mensaje.className="correcto";
    }

    if(error==0){
        correcto.style.display = "block";
        incorrecto.style.display = "none";
        bton.style.display = "none";
        bton2.style.display = "block";
        
    }
}