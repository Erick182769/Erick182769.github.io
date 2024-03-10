<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Ventas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    fieldset {
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
    }

    legend {
      font-weight: bold;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"],
    input[type="reset"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      border: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      background-color: #45a049;
    }

    input[type="submit"]:focus,
    input[type="reset"]:focus {
      outline: none;
    }

    .error {
      color: red;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Información General</h1>
    <form action="procesar_formulario.php" method="post">
      <fieldset>
        <legend>Datos del Usuario</legend>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        
        <label for="apellido_paterno">Apellido Paterno</label>
        <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno">
        
        <label for="apellido_materno">Apellido Materno</label>
        <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno">
        
        <br/>
        <label for="usuario">Nombre de Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario">
        
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" placeholder="Password">
        
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
        <br/>
      </fieldset>
      
      <fieldset>
        <legend>Datos de Facturación</legend>
        <label for="pais">País</label>
        <select name="pais" id="pais">
          <option value="México">México</option>
          <option value="Brasil">Brasil</option>
          <option value="E.U.A">E.U.A</option>
          <option value="Colombia">Colombia</option>
        </select>
        
        <label for="ciudad">Ciudad</label>
        <select name="ciudad" id="ciudad">
          <option value="San Luis Potosí">San Luis Potosí</option>
          <option value="Matehuala">Matehuala</option>
          <option value="Cd. Valles">Cd. Valles</option>
        </select>
        
        <label for="calle">Calle</label>
        <input type="text" name="calle" id="calle" placeholder="Calle">
        
        <label for="numero_casa">Número de Casa</label>
        <input type="text" name="numero_casa" id="numero_casa" placeholder="Número de Casa">

        <label for="colonia">Colonia</label>
        <input type="text" name="colonia" id="colonia" placeholder="Colonia">
        <br/>
        
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="E-mail">
        
        <label for="rfc">R.F.C</label>
        <input type="text" name="rfc" id="rfc" placeholder="R.F.C">
        
        <label for="codigo_postal">C.P</label>
        <input type="text" name="codigo_postal" id="codigo_postal" placeholder="Código Postal">
        
        <input type="submit" name="enviar" id="enviar" value="Enviar">
        <input type="reset" name="restablecer" id="restablecer" value="Restablecer">
        <br/>
      </fieldset>
    </form>
  </div>
</body>
</html>
