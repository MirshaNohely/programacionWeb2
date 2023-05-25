<?php include "header.php" ?>

<div class="row">
  <div class="col s12 m5">
    <div>
      <h1>Login</h1>
      <form method="POST" action="logica/loguear.php">
        <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
        <br />
        <input type="text" name="clave" placeholder="Contraseña" />
        <br />
        <button type="submit">Iniciar Sesión</button>
      </form>
    </div>
  </div>
</div>

<?php include "footer.php" ?>

<?php include 'firma_proyecto.php'; ?>
