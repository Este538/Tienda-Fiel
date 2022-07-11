<?php 
  //session_start();
  //if(isset($_SESSION['ClaveUsuario'])){
    //header("location: users.php");
  //}
?>

<?php include_once "../layout/header.php"; ?>
<body>
  <main class="main">
  <div class="wrapper">
    <section class="form login">
    <div class="titulo">Ingresar</div>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo electronico</label>
          <input type="text" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Ingresar">
        </div>
      </form>
      <div class="link">¿No te has registrado? <a href="index.php">Registrate aqui</a></div>
    </section>
  </div>
  
  <script src="../scripts/pass-show-hide.js"></script>
  <script src="../scripts/login.js"></script>
  </main>
</body>
</html>
