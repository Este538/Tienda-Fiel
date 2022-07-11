
<main class="main">
  <section id="hero-contactanos">
      <div class="container-contacto">
         <div class="contacto-titulo"> <h3>Contactanos</h3></div>
      </div>
  </section>
  <section id="datos-empresa">
    <div class="container-datos">
      <div class="ventas-contacto">
           <div class="icono-aud"> <i class="fa-solid fa-headphones"></i></div>
           <div class="datos-section-contacto"> 
                  <h3>ventas</h3>
                  <p>ventas@orange.com</p>
                  <p>(999) 396 8250</p>
          </div>
      </div>
      <div class="compras-contacto">
            <div class="icono-comp"><i class="fa-solid fa-id-card"></i></div>
            <div class="datos-section-contacto"> 
                  <h3>Compras</h3>
                  <p>ventas@orange.com</p>
                  <p>(999) 396 8250</p>
          </div>
      </div>
      <div class="QYS">
          <div class="icono-aud"> <i class="fa-solid fa-headphones"></i></div>
          <div class="datos-section-contacto"> 
                  <h3>Quejas y sugerencias</h3>
                  <p>ventas@orange.com</p>
                  <p>(999) 396 8250</p>
          </div>
      </div>
    </div>
  </section>
  
  <section id="sucursales">
      <div class="visitanos-titulo"><h3>Visitanos</h3></div>
      <div class="mapa">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1k6aBKla-vBOaKlQoIjFQ4h_irVEJB9Q&ehbc=2E312F" class="mapa-frame"></iframe>
      </div>
  </section>

  <section id="contactanos">
              
      <div class="formulario_contacto">
      <div class="mensaje-correcto">El correo se ha enviado con exito</div>
      <div class="mensaje-incorrecto">Ingresa los valores correctamente</div>
        <h3>Contáctanos</h3>
        <form action="./layout/doc.php" method="POST" class="formulario-contacto" name="form" id="form" >
             <input type="text" name="nombre" id="nombre-contacto" placeholder="Nombre" class="correcto">
             <input type="text" name="Correo" id="correo-contacto" placeholder="Correo Electrónico" class="correcto">
             <input type="text" name="telefono" id="telefono-contacto" placeholder="Teléfono(10 dígitos)" class="correcto">
             <input type="text" name="ciudad" id="ciudad-contacto" placeholder="Ciudad" class="correcto">
             <input type="text" name="estado" id="estado-contacto" placeholder="Estado" class="correcto">
             <textarea name="mensaje" id="mensaje-contacto" cols="30" rows="10" class="correcto" placeholder="Mensaje"></textarea>
             <div class="btn-enviar-container">
              <button type=button name="enviar-fcontacto" class="btn-enviar" >Enviar</button>
              <button type=submit name="crear" class="crear-doc">Descargar</button>
             </div>
        </form>
      </div> 
  </section>
  <script src="./scripts/forms.js"></script>
</main>

