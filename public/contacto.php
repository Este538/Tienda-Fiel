<?php require('../layout/header.php') ?>
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
      <h2>aqui se ve lo de los mapas ivan</h2>
  </section>

  <section id="contactanos">
      <div class="formulario">
        <h3>Contáctanos</h3>
        <form action="" class="formulario-contacto">
             <input type="text" name="nombre" id="nombre-contacto" placeholder="Nombre" class="input">
             <input type="text" name="Correo" id="correo-contacto" placeholder="Correo Electrónico" class="input">
             <input type="text" name="telefono" id="telefono-contacto" placeholder="Teléfono(10 dígitos)" class="input">
             <input type="text" name="ciudad" id="ciudad-contacto" placeholder="Ciudad" class="input">
             <input type="text" name="estado" id="estado-contacto" placeholder="Estado" class="input">
             <div class="btn-enviar-container">
              <button type=submit name="enviar-fcontacto" class="btn-enviar">Enviar</button>
             </div>
        </form>
      </div> 
  </section>
 
</main>

<?php require('../layout/footer.php') ?>