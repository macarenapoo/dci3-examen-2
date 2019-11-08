<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Agregar</title>
</head>

<body>
  <?php
   include "../conexion.php";
   if (isset($_POST["testimonio"])) {
       $testimonio= $_POST["testimonio"];
       $autor = $_POST["autor"];
       $puesto = $_POST["empresa"];

       $sql = "INSERT INTO pablo_testimoniales (testimonio, autor, empresa) VALUES ('$testimonio', '$autor', '$empresa')";

       ejecutar($sql);

       echo "<script language='javascript'>window.location.assign('admin.php');</script>";
   }
  ?>
    
  </body>
</html> 