<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Eliminar</title>
</head>

<body>
  <?php
    // agrega tu código aqui
    include "../conexion.php";
    if (isset($_POST["testimonio"])){
      $testimonio = $_POST["testimonio"];
      $persona = $_POST["persona"];
      $puesto = $_POST["puesto"];

      $sql = "INSERT INTO emy_testimoniales (testimonio, persona, puesto) VALUES ('$testimonio','$persona','$puesto')";

      ejecutar($sql);

      echo "<script language='javascript'>window.location.assign('admin.php');</script>";
  }
  ?>
    
  </body>
</html> 
