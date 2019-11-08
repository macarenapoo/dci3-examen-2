<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Agregar</title>
</head>

<body>
  <?php
  include "../conexion.php";

  if (isset($_POST["testimonio"])){
    $testimonio = $_POST["testimonio"];
    $rol = $_POST["autor"];
    $autor = $_POST["puesto"];

    $sql = "INSERT INTO karla_testimoniales2 (testimonio, autor, puesto) VALUES ('$testimonio', '$autor', '$puesto' )";

    ejecutar($sql);

    echo "<script language='javascript'>window.location.assign('admin.php');</script>";
}
  ?>
    
  </body>
</html> 
