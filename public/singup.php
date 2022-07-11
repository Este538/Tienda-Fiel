

<?php include_once "../layout/header.php"; ?>
<body>
  <main class="main">
  <div class="wrapper">
    <section class="form signup">
      <div class="titulo">Registrate</div>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" class="formulario" id="formulario">
        <div class="error-text"></div>

        <div class="name-details">
          
          <div class="field input" id="grupo__nombre">
            <label class="formulario_label">Nombre</label>
            <div>
              <input type="text" name="fname" class="formulario__input" placeholder="Nombre" required>
              
            </div>
          </div>
          <div class="field input">
            <label class="formulario_label">Apellido</label>
            <input type="text" name="lname" placeholder="Apellido" required>
          </div>
        </div>
        <div class="field input">
          <label class="formulario_label">Correo electronico</label>
          <input type="text" name="email" placeholder="Ingresa un correo" required>
        </div>
        <div class="field input">
          <label class="formulario_label">Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa una contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleccionar foto de perfil</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrar">
        </div>
      </form>
      <div class="link">¿Ya te has registrado antes? <a href="login.php">Ingresa aqui</a></div>
    </section>
  </div>

  <script src="javascript/formulario.js"></script>
  <script src="../scripts/pass-show-hide.js"></script>
  <script src="../scripts/signup.js"></script>
  </main>    
</body>
</html>
