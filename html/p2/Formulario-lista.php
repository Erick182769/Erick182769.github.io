<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Ventas</title>
</head>
<body>
  <h1>Información General</h1>
  <form action="procesar_formulario.php" method="post">

  <fieldset>
  <legend>Datos del Usuario</legend>
  <label for="nombre">
        Nombre:
  </label>
  <input type="text" name="nombre" id="nombre" placeholder="Nombre">
  
  <label for="apellido_paterno">
        Apellido Paterno
  </label>
  <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno">
  
  <label for="apellido_materno">
      Apellido Materno
  </label>
  <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno">
  
  <br/>
  <label for="usuario">
      Nombre de Usuario
  </label>
  <input type="text" name="usuario" id="usuario" placeholder="Usuario">
  
  <label for="contrasena">
      Contraseña
  </label>
  <input type="password" name="contrasena" id="contrasena" placeholder="Password">
  
  <label for="fecha_nacimiento">
      Fecha de Nacimiento
  </label>
  <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="dd/mm/aaaa">
  <br/>
  </fieldset>
  
  <fieldset>
  <legend>Datos de Facturación</legend>
  <label for="pais">
      País
  </label>
  <select name="pais" id="pais">
    <option value="México">México</option>
    <option value="Brasil">Brasil</option>
    <option value="E.U.A">E.U.A</option>
    <option value="Colombia">Colombia</option>
  </select>
  
  <label for="ciudad">
      Ciudad
  </label>
  <select name="ciudad" id="ciudad">
   <option value="San Luis Potosí">San Luis Potosí</option>
    <option value="Matehuala">Matehuala</option>
    <option value="Cd. Valles">Cd. Valles</option>
  </select>
  
  <label for="calle">
      Calle
  </label>
  <input type="text" name="calle" id="calle" placeholder="Calle">
  
  <label for="numero_casa">
      Número de Casa
  </label>
  <input type="text" name="numero_casa" id="numero_casa" placeholder="Número de Casa">

  <label for="colonia">
      Colonia
  </label>
  <input type="text" name="colonia" id="colonia" placeholder="Colonia">
  <br/>
  
  <label for="email">
      E-mail
  </label>
  <input type="text" name="Email" id="Email" placeholder="E-mail">
  
  <label for="rfc">
      R.F.C
  </label>
  <input type="text" name="RFC" id="RFC" placeholder="R.F.C">
  
  <label for="codigo_postal">
      C.P
  </label>
  <input type="text" name="CP" id="CP" placeholder="Código Postal">
  
  <input type="submit" name="enviar" id="enviar" value="Enviar">
  
  <input type="reset" name="restablecer" id="restablecer" value="Restablecer">
  
  <br/>
  
  </fieldset>
  </form>
</body>
</html>


