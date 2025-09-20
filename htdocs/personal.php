<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="personal.css">
    <?php 
        include "nav_bar.php"
    ?> 
    <div class="content">
    <div class="top-bar">
      <div class="admin-profile">
        <span class="admin-name">Admin - Luis Perez Ponzo</span>
        <img src="img/admin.png" alt="Perfil Admin">
      </div>
    </div>
            <h1>Coffee shop</h1> <h1></h1>
        <h3>Time</h3>
      <div class = "layout" id = "graphic" name="graphic">
          <div class="empleado" id ="personalTemplate" name ="personalTemplate">
            <img src="img/admin.png" alt="Perfil Admin">
            <div class ="info">
              <strong id="nombre">Empleado Plantilla</strong>
              <span id = "turno">Turno:</span>
              <span id ="Jornada">Jornada:</span>

              <button class = "modify_button">Modificar usuario</button>

            </div> 
          </div>
      </div>
    </div>
</body>
</html>
