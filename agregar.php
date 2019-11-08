<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Agregar</title>
</head>

<body>
  <?php
    // Agrega el código aqui
    if (isset($_POST["testimonio"])){

      $testimonio= $_POST["testimonio"];
      $autor = $_POST["autor"]; 
      $puesto = $_POST["puesto"];
     

      include "../conexion.php";

           $sql = "INSERT INTO mara_testimoniales (testimonio, autor, puesto) VALUES ('$testimonio', '$autor', '$puesto')";

          ejecutar($sql);

          echo "<script language='javascript'>window.location.assign('admin.php');</script>";
    }
        
    ?>
  
    
  </body>
</html> 
