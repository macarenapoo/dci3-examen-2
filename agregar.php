<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Agregar</title>
</head>
<body>
    
<body>
  <?php
    include "../conexion.php";
    if (isset($_POST["testimonio"])){
        $testimonio = $_POST["testimonio"];
        $autor = $_POST["autor"];
        $puesto = $_POST["puesto"];

        $sql = "INSERT INTO giselle_testimoniales (testimonio, autor, puesto) VALUES ('$testimonio', '$autor', '$puesto')";

        ejecutar($sql);

        echo "<script language='javascript'>window.location.assign('admin.php');</script>";
    }
  ?>
    
  </body>
</html> 
